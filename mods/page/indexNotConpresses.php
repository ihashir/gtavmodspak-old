<?php
$servername = 'pdb26.runhosting.com';
$username =  '3683761_wpress059d0a84';
$password = 'hashirisbest1122';
$database = '3683761_wpress059d0a84';
 
$conn = mysqli_connect($servername, $username, $password, $database);
$titlenospace = $_GET['mod'];
mysqli_set_charset($conn, 'utf8mb4');
$sql = "SELECT * FROM `upload_mods` WHERE `titlenospace` = '$titlenospace'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hidden = $row['hidden'];
if($hidden==1 && !isset($_COOKIE['admin'])){
echo '<html><title>Not Found !</title><meta content="width=device-width, initial-scale=1.0" name="viewport" /><body style="background:#c5f3c5;">';
die("<h3 style='    text-align: center;
    margin-top: 47vh;
    color: #007d00;
    font-family: sans-serif;
    font-size: 30px;'>MOD NOT FOUND !</h3><script>setTimeout(function(){ window.location.href = 'http://www.gtavmodspakistan.com'; }, 3000);</script></body>");
}
if(gettype($row)=="NULL"){
echo '<html><title>Not Found !</title><meta content="width=device-width, initial-scale=1.0" name="viewport" /><body style="background:#c5f3c5;">';
die("<h3 style='    text-align: center;
    margin-top: 47vh;
    color: #007d00;
    font-family: sans-serif;
    font-size: 30px;'>MOD NOT FOUND !</h3><script>setTimeout(function(){ window.location.href = 'http://www.gtavmodspakistan.com'; }, 3000);</script></body>");
}

$title = $row['title'];
$desc = $row['description'];
$dnlink = $row['dnlink'];
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    .dnBtndiv {
    text-align: center;
    margin: 10px;
    margin-bottom: 30px;
}
.dnBtn{
font-size:20px!important;
font-weight:500!important;
}
          body > main > div > pre > a {
    color: #6EBC25!important;
}
body > main > div > pre > a:hover {
    color: #62A51F!important;
}
body > main > div > pre > strong > a {
    color: #6EBC25!important;
}
body > main > div > pre > strong > a:hover {
    color: #62A51F!important;
}
          .title{
          margin-top: 100px;
    text-align: center;
    font-family: revert;
          }
          .desc{
          white-space: pre-wrap!important;word-wrap: break-word!important;font-family:Sans-serif;
          display: block;
    color: #3c3c3c;
    font-size: 18px;
    font-weight: bold;
    margin-left: 26px;
    margin-right: 48px;
    font-family: system-ui;
    line-height: 35px;
    margin-bottom: 50px;
          }
          .divDesc{
          white-space:pre-wrap!important;
          display: flex;
    justify-content: center;
          }
         
    </style>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title><?php echo $title . " : Download";?></title>
    <?php echo '<meta name="description" content="Download ' . $title . ' Pakistani mod for GTA V, completely free...gtavmodspakistan" />';?>
	<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="https://gtavmodspakistan.com/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
        
	<?php echo '<meta property="og:title" content="'.$title . ' : Download" />';
        echo '<meta name="og:description" content="Download ' . $title . ' Pakistani mod for GTA V, completely free...gtavmodspakistan" />';
        ?>
	
	<meta property="og:url" content="https://gtavmodspakistan.com/" />
	<meta property="og:site_name" content="GTA V MODS PAKISTAN" />
	<meta property="article:modified_time" content="2021-01-08T16:33:54+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:label1" content="Est. reading time">
	<meta name="twitter:data1" content="0 minutes">

    <!-- Favicons -->
    <link rel="icon" href="/assets/img/icon.ico" sizes="32x32">
    <link rel="icon" href="/assets/img/icon.ico" sizes="192x192">
    <link rel="apple-touch-icon" href="/assets/img/icon.ico">
    <style>
    #header {
    background: #3caf62;
        }
    .carousel {
        /* max-height: 768px; */
        max-width: 768px;
        min-width: auto;
        margin: auto;
        margin-top: 70px;
        margin-bottom: 70px;
        padding: 20px;

    }

    .carousel .carousel-item img {
        width: 100%;
    }

    
         <?php
if($_COOKIE['theme']=="dark"){

include "../../assets/css/darkTheme.php";

}
?>
#hero h2{
color:#7ACC79!important;
}
    }
    </style>

 <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet" /> -->
    <!--<link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />-->
    <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet" /> -->

   

    <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
</head>

<body y data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0" cz-shortcut-listen="true" class="">
    <button type="button" class="mobile-nav-toggle d-lg-none"><i class="fas fa-bars" aria-hidden="true"></i></i></button>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="/" class="logo"><img
                    src="/assets/img/icon.png"
                    alt="" class="img-fluid"></a>
            <h1 class="logo mr-auto">
                <a href="/">GTA V MODS PAKISTAN</a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li class="active"><a href="/mods">Mods</a></li>

                    <li><a href="/contact">Contact</a></li>
                    <li><button id="themebtn" class="themebtn" type="button" onclick="darkTheme()"><i id="moon" class="far fa-moon" aria-hidden="true"></i></button></li>
                </ul>
            </nav>
            <!-- .nav-menu -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    
    <!-- End Hero -->

    <main id="main">
<?php

$modify = false;
if(isset($_COOKIE['admin'])){
$modify=true;
}

echo '<h2 class="title">'.$title.'</h2>';

?>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

<?php
$active = "active";
if(!isset($_GET['mod'])){
    echo "<h1>Mod not found !</h1>";
    exit();
}


if(!$conn){
  die('error occured');
}

$titlenospace = $_GET['mod'];
mysqli_set_charset($conn, 'utf8mb4');
$sql = "SELECT * FROM `upload_mods` WHERE `titlenospace` = '$titlenospace'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hidden = $row['hidden'];
if($row['slider'] == 'true'){
$n = 0;
$total = $row['picname'];
$total = $total[2]-1;



echo '
<ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>';
  while($n != $total){
      
      $n=$n +1;
     
      echo   '<li data-target="#carouselExampleIndicators" data-slide-to="'.$n.'"></li>';
 }
echo '</ol>
<div class="carousel-inner">';
}
if($row['slider'] == 'true'){
    
    $picname = $row['picname'];    
    $picname = unserialize($picname);
    foreach ($picname as $key => $value) {
    echo '<div class="carousel-item '.$active.'">
<img class="d-block" src="../../assets/img/mods/'.$value.'" alt="slide">
</div>';
$active = "";
}

    

}
else{

$picname = $row['picname'];

echo '<div class="carousel-inner">
<div class="carousel-item active">

<img class="d-block" src="../../assets/img/mods/'.$picname.'" alt="slide">
</div>';
}
?>
</div>

<?php
if($row['slider'] == 'true'){
echo '<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>';
}

?>

</div>
</div>
        <hr>

        <?php

echo '<div class="divDesc"><pre class = "desc">'.$desc.'</pre></div>
<div class="dnBtndiv"><a href="'.$dnlink.'"><button type="button" class="mt-3 btn btn-success p-2 pr-4 pl-4 dnBtn">DOWNLOAD</button></a>';

if ($modify==true){
    echo '<a class="col" href="/assets/php/modify.php?modify='.$titlenospace.'"><button type="button" class="mt-3 btn btn-success p-2 pr-4 pl-4 dnBtn">MODIFY</button></a>';
    if($hidden==1){
    echo '<a class="col" href="/assets/php/unhide.php?unhide='.$titlenospace.'"><button type="button" class="mt-3 btn btn-info p-2 pr-4 pl-4 dnBtn">UN HIDE</button></a>';
    }
    else{
    echo '<a class="col" href="/assets/php/hide.php?hide='.$titlenospace.'"><button type="button" class="mt-3 btn btn-info p-2 pr-4 pl-4 dnBtn">HIDE</button></a>';
    }
    echo '<button type="button" onclick="del()" class="mt-3 btn btn-danger p-2 pr-4 pl-4 dnBtn">DELETE</button>';
}


?>


</div>





      


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->





    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>GTAVMODSPAKISTAN</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Email : contact@gtavmodspakistan.com
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="arrow" aria-hidden="true"></i></a>
    <!-- <div id="preloader"></div> -->
<?php
    include "../../assets/css/themeChecker.php";
    ?>
    <script src="../../assets/css/theme.js"></script>
    <!-- Vendor JS Files -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <!-- <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script> --> 
    <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <!-- <script src="assets/vendor/aos/aos.js"></script> -->

    <!-- Template Main JS File -->
    <script src="../../assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script> -->
    <script src="https://kit.fontawesome.com/f34fb94d7e.js" crossorigin="anonymous"></script>
    <?php
    if ($modify==true){
    echo "<script>
    function del(){
    var con = confirm('Are you sure you want to delete this mod?');
    if (con==true){
    window.location.href = 'https://gtavmodspakistan.com/assets/php/delete.php?delete=". $titlenospace ."';
    }
    
    }
    </script>";
    }
    ?>
</body>

</html>
