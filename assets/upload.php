<?php

$servername = 'pdb26.runhosting.com';
$username =  '3683761_wpress059d0a84';
$password = 'hashirisbest1122';
$database = '3683761_wpress059d0a84';

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
  die('error occured');
}



if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
	foreach($_FILES['file']['name'] as $key=>$val){
		
		$file_real_name= $val;
		$file=$_FILES['file']['tmp_name'][$key];
	list($width,$height)=getimagesize($file);
	$nwidth= 768;
	$nheight=432;
	$newimage=imagecreatetruecolor($nwidth,$nheight);
	if($_FILES['file']['type'][$key]=='image/jpeg'){
		$source=imagecreatefromjpeg($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=$file_real_name;
		imagejpeg($newimage,'img/mods/'.$file_name);
	}elseif($_FILES['file']['type'][$key]=='image/png'){
		$source=imagecreatefrompng($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=$file_real_name;
		imagepng($newimage,'img/mods/'.$file_name);
	}elseif($_FILES['file']['type'][$key]=='image/gif'){
		$source=imagecreatefromgif($file);
		imagecopyresized($newimage,$source,0,0,0,0,$nwidth,$nheight,$width,$height);
		$file_name=$file_real_name;
		imagegif($newimage,'img/mods/'.$file_name);
	}else{
		echo "Please select only jpg, png and gif image";
	}
		
  }
  $file_name = $_FILES['file']['name'];
  $title = $_POST['title'];
  $hidden = $_POST['hidden'];
  $titlenospace = str_replace(" ", "", $title);
  $title = strtoupper($_POST['title']);
  $desc = $_POST['desc'];
  $dnlink = $_POST['dnlink'];
  $cat = $_POST['select'];
  $datee = date("Y-m-d")."T".date("h:i:s")."+00:00";

  $str=file_get_contents('../sitemap.xml');
  $put = "<!-- here -->
<url>
  <loc>https://gtavmodspakistan.com/mods/page/?mod=".$titlenospace."</loc>
  <lastmod>".$datee."</lastmod>
  <priority>0.80</priority>
</url>";
  $str=str_replace("<!-- here -->", $put ,$str);

  file_put_contents('../sitemap.xml', $str);

  
  $total = count($file_name);

  
  if($total == 1){
    $picname = array($_FILES['file']['name'][0]);
  }
  elseif($total == 2){
    $picname = array($_FILES['file']['name'][0],$_FILES['file']['name'][1]);
  }
  elseif($total == 3){
    $picname = array($_FILES['file']['name'][0],$_FILES['file']['name'][1],$_FILES['file']['name'][2]);
  }
  elseif($total == 4){
    $picname = array($_FILES['file']['name'][0],$_FILES['file']['name'][1],$_FILES['file']['name'][2],$_FILES['file']['name'][3]);
  }
  elseif($total == 5){
    $picname = array($_FILES['file']['name'][0],$_FILES['file']['name'][1],$_FILES['file']['name'][2],$_FILES['file']['name'][3],$_FILES['file']['name'][4]);
  }
  
  
  mysqli_set_charset($conn, 'utf8mb4');
  $picname = serialize($picname);
  if ($hidden=='true'){
  $sql = "INSERT INTO `upload_mods` (`title`, `description`, `picname`, `titlenospace`, `dnlink`, `category`, `slider`,`hidden`) VALUES ('$title', '$desc', '$picname', '$titlenospace', '$dnlink', '$cat', 'true',1)";
}
else{
  $sql = "INSERT INTO `upload_mods` (`title`, `description`, `picname`, `titlenospace`, `dnlink`, `category`, `slider`) VALUES ('$title', '$desc', '$picname', '$titlenospace', '$dnlink', '$cat', 'true')";
}
  $result = mysqli_query($conn, $sql);
  echo var_dump($result);
  echo "mod uploaded successfuly";
  
  // move_uploaded_file($file_tmp_loc, $file_store)
  if($cat=='maps/props'){
  $cat = "maps-props";
  }
  $catLight = "../mods/". $cat . "/dark-cached-index.html";
  $catDark = "../mods/". $cat . "/cached-index.html";
  
  $files = array('../cached-index.html','../dark-cached-index.html','../mods/cached-index.html','../mods/dark-cached-index.html',$catLight,$catDark);
error_reporting(E_ERROR | E_PARSE);
foreach($files as $file){
try{
 unlink($file);
}
catch(Exception $e){
echo "huh";
}

 }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Upload</title>
</head>

<body>
    <!-- <form action="?" method="post" enctype="multipart/form-data">
        title
        <input type="text" name="title" id="text">
        desc
        <input type="text" name="desc" id="text">
        dnlink
        <input type="text" name="dnlink" id="text">
        category
        <select name="select">
            <option>vehicles</option>
            <option>maps/props</option>
            <option>misc</option>

        </select>


        Select image to upload:
        <input type="file" name="file" id="fileToUpload">

        <input type="submit" value="Upload" name="upload">
    </form> -->
    <h2 class="text-center mt-2">Upload Mod (Only for admins !)</h2>

    <div class="container">
        <form action="?" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Mod Title</label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="title">
                <small id="title" class="form-text text-muted">Note : The title will automatically converted to
                    uppercase !</small>
            </div>
            <div class="form-group">
                <label for="desc">Mod description</label>
                <textarea class="form-control" id="desc" name="desc"></textarea>
            </div>
            <div class="form-group">
                <label for="dnlink">Mod Download Link</label>
                <input type="text" class="form-control" id="dnlink" name="dnlink">
            </div>
            <div class="form-group">
                <label for="select">Mod Category (default is vehicles)</label>
                <select id="select" name="select" class="custom-select">
                    <option selected>vehicles</option>
                    <option>maps/props</option>
                    <option>misc</option>
                </select>
            </div>
            
                <div class="form-group">
                    <label for="fileToUpload">Mod Image (ONLY 5 IMAGES CAN BE UPLOAD)</label>
                    <input type="file" name="file[]" id="fileToUpload" class="form-control-file" multiple>
                    <small id="title" class="form-text text-muted">Note : You can upload multiple images here (MAX 5 IMAGES)</small>
                </div>
            
<div class="form-check"><input class="form-check-input" type="checkbox" value="true" id="flexCheckChecked" name="hidden" checked> <label class="form-check-label" for="flexCheckChecked">Hide Mod (Only admin can see)</label><div>
            <input type="submit" value="Upload" name="upload" class="btn btn-primary mt-3">
        </form>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
