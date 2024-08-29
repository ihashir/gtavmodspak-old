<?php

$timer_start = microtime(1);

if(!isset($_COOKIE['admin'])){

if(!isset($_COOKIE['theme'])){
include('cache/top_cache.php');
}
else{
include('cache/top_cache_dark.php');
}


}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Download : Gta 5 Mods Pakistan</title>
    <meta name="google-site-verification" content="foGFvVOBb-yHbYKnbOnMlHkskeQBy4u9-KLJPhZ1deo" />
    <meta name="description" content="Download amazing Pakistani gta 5 mods. These mods are completely free. Go and download now.. New mods are coming....." />
	<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="https://gtavmodspakistan.com/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Download : Gta 5 Mods Pakistan" />
	<meta property="og:description" content="Download amazing Pakistani gta 5 mods. These mods are completely free. Go and download now.. New mods are coming....." />
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
    
    
    <!-- Template Main CSS File -->
    <!--<link href="/assets/css/style.css" rel="stylesheet" />-->
    
    
    <style>
    <?php
    include('assets/css/style.css');
    ?>
    #hero {
  width: 100%!important;
  height: 80vh!important;
  background: url("/assets/img/main.jpg");
  background-position: center center!important;
  background-repeat: no-repeat!important;
  background-size: cover!important;
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

    
       
.showModsDiv {
    text-align: center;
    margin-bottom: 30px;
}
.showModsH {
    font-size: 18px;
}
a.showModsA {
    color: #378400;
    text-decoration: underline;
}
a.showModsA:hover{
color:#2e6706;
}

    <?php
if($_COOKIE['theme']=="dark"){

include "assets/css/darkTheme.php";

}
?>
    </style>


    <!-- Google Fonts 
    

    

    =======================================================
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
        xmlhttp.open("GET", "assets/php/search.php?q=" + title, true);
        xmlhttp.send();

    }
</script>
    
</head>

<body y data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0" cz-shortcut-listen="true" class="">

<div id='loader'></div>
<div class='loaderimg'></div>

    <button type="button" class="mobile-nav-toggle d-lg-none"><i class="fas fa-bars"></i></button>



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
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/mods">Mods</a></li>

                    <li><a href="/contact">Contact</a></li>
                    <li><button id="themebtn" class="themebtn" type="button" onclick="darkTheme()"><i id="moon" class="far fa-moon" aria-hidden="true"></i></button></li>
                    
                </ul>
            </nav>
            <!-- .nav-menu -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
    
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                    <h1>GTA V MODS PAKISTAN</h1>
                    <h2>Download mind blowing Pakistani GTA mods, Absolutely free !</h2>
                    <div class="d-lg-flex">
                        <a href="/mods" class="btn-get-started scrollto">Mods</a>
                    
                    <?php
                    if(isset($_COOKIE['admin'])){
                      echo '
                      <a href="/assets/upload.php" class="btn-get-started scrollto ml-3">Upload Mod</a>
                      </div>
                  ';
                    }
                    ?>
                </div>

            </div>
        </div>
    </section>
    <!-- End Hero -->

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
if (isset($_COOKIE['admin'])){ 
$sql = "SELECT * FROM `upload_mods` ORDER BY `sno` DESC LIMIT 7";
}
else{
$sql = "SELECT * FROM `upload_mods` WHERE hidden = 0 ORDER BY `sno` DESC LIMIT 7";
}
$result = mysqli_query($conn, $sql);
$n = 0;
$active = "active";


echo '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>';
  while($n != 6){
      
      $n=$n +1;
     
      echo   '<li data-target="#carouselExampleIndicators" data-slide-to="'.$n.'"></li>';
 }
echo '</ol>
<div class="carousel-inner">';

while($row = mysqli_fetch_assoc($result)){
    $title = $row['title'];
    $desc = $row['description'];
    $dnlink = $row['dnlink'];
    $slider = $row['slider'];
    $picname = $row['picname'];
    if($row['slider'] == 'true'){
        $picname = $row['picname'];
        $picname = unserialize($picname);
        $picname = $picname[0];
    }
    
echo   '<div class="carousel-item '.$active.'">
<img class="d-block" src="'.$picname.'?maxwidth=750" alt="slide">
</div>';
$active = "";
}
echo '</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>';
?>

        <hr>

        








        <div class="container mb-3">
            <div class="mt-3">
                <div class="row" style="justify-content:space-around;">

                    <div class="recent my-4 my-2">
                        <h2 class="mt-4">RECENT MODS</h2>
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
$sql = "SELECT * FROM `upload_mods` ORDER BY `sno` DESC LIMIT 6";
}
else{ 
$sql = "SELECT * FROM `upload_mods` WHERE hidden = 0 ORDER BY `sno` DESC LIMIT 6";
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



<div class="showModsDiv"><a class="showModsA" href="/mods"><h5 class="showModsH">SHOW ALL MODS...</h5></a></div>

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

    <a href="#" class="back-to-top"><i class="arrow up"></i></a>
    <!-- <div id="preloader"></div> -->

        <?php
    include "assets/css/themeChecker.php";
    ?>
    


    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <?php
include('assets/js/main.js');
?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    
            <script rel="preconnect" src="https://kit.fontawesome.com/f34fb94d7e.js" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
$('#search').on('keypress',function(e) { if(e.which == 13) {
func();
} });
});

 </script>


</body>

</html>
<?php

if(!isset($_COOKIE['admin'])){

if(!isset($_COOKIE['theme'])){
include('cache/bottom_cache.php');
}
else{
include('cache/bottom_cache_dark.php');
}


}

echo "<script>console.log('Generated in ".(round((microtime(1) - $timer_start),4))." sec.')</script>";

?>
