<?php

$servername = 'pdb26.runhosting.com';
$username =  '3683761_wpress059d0a84';
$password = 'hashirisbest1122';
$database = '3683761_wpress059d0a84';

$noResult = true;

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
  die('error occured');
}

$search = $_GET['q'];
$cat = $_GET['cat'];

if($cat == ""){
     $sql = "SELECT * FROM `upload_mods` where title like '%". $search ."%' and hidden = 0 ORDER BY `sno` DESC" ;
}
elseif($cat == "maps"){
        $sql = "SELECT * FROM `upload_mods` where title like '%". $search ."%' and category = 'maps/props' and hidden = 0 ORDER BY `sno` DESC" ;
}
else{
     $sql = "SELECT * FROM `upload_mods` where title like '%". $search ."%' and category = '". $cat ."' and hidden = 0 ORDER BY `sno` DESC" ;
}
$result = mysqli_query($conn, $sql);



while($row = mysqli_fetch_assoc($result)){
    $noResult = false;
    $pic = $row['picname'];
    $title = $row['title'];
    $titlenospace  = $row['titlenospace'];
    if($row['slider'] == 'true'){
    $pic = $row['picname'];
    $pic = unserialize($pic);
    $pic = $pic[0];
    $title = $row['title'];
    $titler = '\''.$row['title'].'\'';
    
    $titlenospace  = $row['titlenospace'];
    
    
    
    }
    echo '
    <a href="https://gtavmodspakistan.com/mods/page?mod='. $titlenospace .'" class="text-dark">
    <div class="col mb-4" id="output">
    <div class="card">
    <img src="https://gtavmodspakistan.com/assets/img/mods/'. $pic .'" class="card-img-top" alt="...">
      <div class="card-body">
    
        <h4 class="card-title text-center">'. $title .'</h4>
        
        
      </div>
    </div>
    </div>
    </a>
    
    ';
    
}
if($noResult){
        echo "<h4 style='text-align:center;'>Oops ! No Results found :(</h4>";
}

?>