<?php

$timer_start = microtime(1);

if(!isset($_COOKIE['admin'])){

if(!isset($_COOKIE['theme'])){


if(strpos($_SERVER['REQUEST_URI'], 'vehicles') !== false){
include('../../cache/top_cache.php');
}
else if(strpos($_SERVER['REQUEST_URI'], 'maps') !== false){
include('../../cache/top_cache.php');
}
else if(strpos($_SERVER['REQUEST_URI'], 'misc') !== false){
include('../../cache/top_cache.php');
}
else{
include('../cache/top_cache.php');
}


}

else{
if(strpos($_SERVER['REQUEST_URI'], 'vehicles') !== false){
include('../../cache/top_cache_dark.php');
}
else if(strpos($_SERVER['REQUEST_URI'], 'maps') !== false){
include('../../cache/top_cache_dark.php');
}
else if(strpos($_SERVER['REQUEST_URI'], 'misc') !== false){
include('../../cache/top_cache_dark.php');
}
else{
include('../cache/top_cache_dark.php');
}

}


}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/f34fb94d7e.js" crossorigin="anonymous"></script>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Mods : Gta V Mods Pakistan</title>
    <meta name="description" content="Download amazing Pakistani gta 5 mods. These mods are completely free. Go and download now.. New mods are coming....." />
	<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="https://gtavmodspakistan.com/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Mods : Gta V Mods Pakistan" />
	<meta property="og:description" content="Download amazing Pakistani gta 5 mods. These mods are completely free. Go and download now.. New mods are coming....." />
	<meta property="og:url" content="https://gtavmodspakistan.com/" />
	<meta property="og:site_name" content="GTA V MODS PAKISTAN" />
	<meta property="article:modified_time" content="2021-01-08T16:33:54+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:label1" content="Est. reading time">
	<meta name="twitter:data1" content="0 minutes">
	
	<meta name="google-site-verification" content="6q0CDzIxgOlo9dIIjHSyIOE1nGqo2dxskHPAuNX_Zn4" />
    
    <!-- Favicons -->
    <link rel="icon" href="/assets/img/icon.ico" sizes="32x32">
    <link rel="icon" href="/assets/img/icon.ico" sizes="192x192">
    <link rel="apple-touch-icon" href="/assets/img/icon.ico">
    <style>
    

    #hero {
        /* background: green; */
    }
    <?php
if($_COOKIE['theme']=="dark"){


if(strpos($_SERVER['REQUEST_URI'], 'vehicles') !== false){
include("../../assets/css/darkTheme.php");
}
else if(strpos($_SERVER['REQUEST_URI'], 'maps') !== false){
include("../../assets/css/darkTheme.php");
}
else if(strpos($_SERVER['REQUEST_URI'], 'misc') !== false){
include("../../assets/css/darkTheme.php");
}
else{
include("../assets/css/darkTheme.php");

}
}
?>
#hero h2{
color:#7ACC79!important;
}

<?php

if(strpos($_SERVER['REQUEST_URI'], 'vehicles') !== false){
include('../../assets/css/style.css');
}
else if(strpos($_SERVER['REQUEST_URI'], 'maps') !== false){
include('../../assets/css/style.css');
}
else if(strpos($_SERVER['REQUEST_URI'], 'misc') !== false){
include('../../assets/css/style.css');
}
else{
include('../assets/css/style.css');
}

    
?>
    </style>


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
    <!--<link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />-->
    <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet" /> -->

 

    <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script>
    function func() {

        var title = document.getElementById("search").value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("output").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "/assets/php/search.php?q=" + title, true);
        xmlhttp.send();

    }
    </script>
</head>

<body y data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0" cz-shortcut-listen="true" class="">

    <button type="button" class="mobile-nav-toggle d-lg-none"><i class="fas fa-bars" aria-hidden="true"></i></button>
    <!-- ======= Header ======= -->
    <div id='loader'></div>
<div class='loaderimg'></div>
<style>
.cat{
padding-top:5px;
padding-left:5px;
border-radius:10px;
}

<?php
if(strpos($_SERVER['REQUEST_URI'], 'vehicles') !== false){
echo '#cat1{background:rgba(179, 179, 179,0.4);}';
}
else if(strpos($_SERVER['REQUEST_URI'], 'maps') !== false){
echo '#cat2{background:rgba(179, 179, 179,0.4);}';
}
else if(strpos($_SERVER['REQUEST_URI'], 'misc') !== false){
echo '#cat3{background:rgba(179, 179, 179,0.4);}';
}


?>

.catLink{
color:#62A861;
transition:0.2s;
}
.catLink:hover{
color:#62A861;

}

#hero {
  height:50vh!important;
  background: url("/assets/img/modMain.webp")!important;
  background-position: center center!important;
  background-repeat: no-repeat!important;
  background-size: cover!important;
  
}

.fas{
    color: #7ACC79;
    font-size: 50px;
    font-weight: 900;
    margin-left:13px;
    transition:0.2s;
}
.fas:hover{
color:#62A861;
}
@media (max-width: 992px) {
  .fas {
    font-size:30px;
    margin-left:0px;
  }
 @media (max-width: 775px) {
  .fas {
    font-size:20px;
  }
  
}


</style>
    <button type="button" class="mobile-nav-toggle d-lg-none"><i class="fas fa-bars" aria-hidden="true"></i></button>
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
                    <li><a href="/about">about</a></li>
                    <li  class="active"><a href="/mods">Mods</a></li>

                    <li><a href="/contact">Contact</a></li>
                    <li><button id="themebtn" class="themebtn" type="button" onclick="darkTheme()"><i id="moon" class="far fa-moon" aria-hidden="true"></i></button></li>
                </ul>
            </nav>
            <!-- .nav-menu -->
        </div>
    </header>
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
                <div class="d-flex justify-content-center">
                
                <a class="catLink mx-auto" href="/mods/vehicles"><div id="cat1" class="mx-auto cat">
                     <i aria-hidden="true" class="fas fa-car"></i>
                    <h2 class="op" style="color:#7ACC79;">vehicles</h2>
                </div>
                </a>
                <a class="catLink mx-auto" href="/mods/maps-props" ><div id="cat2" class="mx-auto cat">
                    <i aria-hidden="true" class="fas fa-map-marked-alt"></i>
                    <h2 class="op" style="color:#7ACC79;">maps/props</h2>
                </div>
                </a>
                <a class="catLink mx-auto" href="/mods/misc"><div id="cat3" class="mx-auto cat">
                    <i aria-hidden="true" class="fas fa-tools"></i>
                    <h2 class="op" style="color:#7ACC79;">misc</h2>
                </div>
                </a>
                   
                </div>

            
        </div>
    </section>
    <!-- End Header -->


    <main id="main">


        <?php

$servername = 'fdb27.runhosting.com';
$username =  '3651499_wpressc283f452';
$password = 'hashirisbest1122';
$database = '3651499_wpressc283f452';


$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
  die('error occured');
}
?>








        <div class="container mb-3">
            <div class="mt-3">
                <div class="row" style="justify-content:space-around;">

                    <div class="recent my-4 my-2">
                        <h2 class="mt-4"><?php 
                        if(strpos($_SERVER['REQUEST_URI'], 'vehicles') !== false){
echo 'Vehicles';
}
else if(strpos($_SERVER['REQUEST_URI'], 'maps') !== false){
echo 'Maps/Props';
}
if(strpos($_SERVER['REQUEST_URI'], 'misc') !== false){
echo 'Misc';
}
                        
                        ?></h2>
                    </div>
                    <div class="col-xs-2 my-4 form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" id="search" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0 mt-4" onclick="func()">Search</button>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 mt-4" id="output">

<?php
if (isset($_COOKIE['admin'])){ 

if(strpos($_SERVER['REQUEST_URI'], 'vehicles') !== false){
$sql = "SELECT * FROM `upload_mods` WHERE category = 'vehicles'  ORDER BY `sno` DESC";
}
else if(strpos($_SERVER['REQUEST_URI'], 'maps') !== false){
$sql = "SELECT * FROM `upload_mods` WHERE category = 'maps/props' ORDER BY `sno` DESC";
}
else if(strpos($_SERVER['REQUEST_URI'], 'misc') !== false){
$sql = "SELECT * FROM `upload_mods` WHERE category = 'misc' ORDER BY `sno` DESC";
}
else{
$sql = "SELECT * FROM `upload_mods` ORDER BY `sno` DESC";
}

}

else{

if(strpos($_SERVER['REQUEST_URI'], 'vehicles') !== false){
$sql = "SELECT * FROM `upload_mods` WHERE hidden = 0 && category = 'vehicles'  ORDER BY `sno` DESC";
}
else if(strpos($_SERVER['REQUEST_URI'], 'maps') !== false){
$sql = "SELECT * FROM `upload_mods` WHERE hidden = 0 && category = 'maps/props' ORDER BY `sno` DESC";
}
else if(strpos($_SERVER['REQUEST_URI'], 'misc') !== false){
$sql = "SELECT * FROM `upload_mods` WHERE hidden = 0 && category = 'misc' ORDER BY `sno` DESC";
}
else{
$sql = "SELECT * FROM `upload_mods` WHERE hidden = 0 ORDER BY `sno` DESC";
}


}
$result = mysqli_query($conn, $sql);



while($row = mysqli_fetch_assoc($result)){

    $pic = $row['picname'];
    $title = $row['title'];
    $titlenospace  = $row['titlenospace'];
    if($row['slider'] == 'true'){
    $pic = $row['picname'];
    $pic = unserialize($pic);
    $pic = $pic[0];
    $title = $row['title'];
    $titler = '\''.$row['title'].'\'';
    $likes = $row['likes'];
    $titlenospace  = $row['titlenospace'];
    
    $hidden = $row['hidden'];
    
    }
    

    
    

      echo '
      <a href="http://gtavtest672.atwebpages.com/mods/page/?mod='.$titlenospace.'" class="text-dark">
      <div class="col mb-4">
      <div class="card" style="width:768; height:432;">
        <img src="'. $pic .'?maxwidth=750" class="card-img-top" alt="...">
        <div class="card-body">
      
          <h4 class="card-title text-center">'. $title .'</h4>
          '; 
          
          if($hidden==1 && isset($_COOKIE['admin'])){
          echo '<div class="container"><button type="button" class="btn btn-lg btn-danger" disabled="">HIDDEN</button></div>';
          }
          
      echo '
        </div>
      </div>
      </div>
      </a>
      ';
    
}





?>

            </div>
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
    
    
    if(strpos($_SERVER['REQUEST_URI'], 'vehicles') !== false){
include "../../assets/css/themeChecker.php";
}
else if(strpos($_SERVER['REQUEST_URI'], 'maps') !== false){
include "../../assets/css/themeChecker.php";
}
else if(strpos($_SERVER['REQUEST_URI'], 'misc') !== false){
include "../../assets/css/themeChecker.php";
}
else{
include "../assets/css/themeChecker.php";
}
    ?>
    
    <!-- Vendor JS Files -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <!-- <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script> --> 
    <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <!-- <script src="assets/vendor/aos/aos.js"></script> -->

    <!-- Template Main JS File -->
    <?php
if(strpos($_SERVER['REQUEST_URI'], 'vehicles') !== false){
include('../../assets/js/main.js');
}
else if(strpos($_SERVER['REQUEST_URI'], 'maps') !== false){
include('../../assets/js/main.js');
}
else if(strpos($_SERVER['REQUEST_URI'], 'misc') !== false){
include('../../assets/js/main.js');
}
else{
include('../assets/js/main.js');
}



?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script> -->
</body>

</html>
<?php

echo "<script>console.log('Generated in ".(round((microtime(1) - $timer_start),4))." sec.')</script>";


if(!isset($_COOKIE['admin'])){

if(!isset($_COOKIE['theme'])){


if(strpos($_SERVER['REQUEST_URI'], 'vehicles') !== false){
include('../../cache/bottom_cache.php');
}
else if(strpos($_SERVER['REQUEST_URI'], 'maps') !== false){
include('../../cache/bottom_cache.php');
}
else if(strpos($_SERVER['REQUEST_URI'], 'misc') !== false){
include('../../cache/bottom_cache.php');
}
else{
include('../cache/bottom_cache.php');
}


}

else{
if(strpos($_SERVER['REQUEST_URI'], 'vehicles') !== false){
include('../../cache/bottom_cache_dark.php');
}
else if(strpos($_SERVER['REQUEST_URI'], 'maps') !== false){
include('../../cache/bottom_cache_dark.php');
}
else if(strpos($_SERVER['REQUEST_URI'], 'misc') !== false){
include('../../cache/bottom_cache_dark.php');
}
else{
include('../cache/bottom_cache_dark.php');
}

}


}





?>
