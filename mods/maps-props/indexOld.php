<?php

if(!isset($_COOKIE['admin'])){

if(!isset($_COOKIE['theme'])){
include('../../cache/top_cache.php');
}
else{
include('../../cache/top_cache_dark.php');
}


}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/f34fb94d7e.js" crossorigin="anonymous"></script>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Maps/Props : Gta V Mods Pakistan</title>
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
	
	<meta name="google-site-verification" content="6q0CDzIxgOlo9dIIjHSyIOE1nGqo2dxskHPAuNX_Zn4" />
    
    <!-- Favicons -->
    <link rel="icon" href="/assets/img/icon.ico" sizes="32x32">
    <link rel="icon" href="/assets/img/icon.ico" sizes="192x192">
    <link rel="apple-touch-icon" href="/assets/img/icon.ico">
    <style>
    

    
         <?php
if($_COOKIE['theme']=="dark"){

include "../../assets/css/darkTheme.php";

}
?>
#hero h2{
color:#7ACC79!important;
}
    }
 <?php
    include('../../assets/css/style.css');
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
    <!--<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />-->
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
        xmlhttp.open("GET", "../../assets/php/search.php?q=" + title + "&&cat=maps", true);
        xmlhttp.send();

    }
    </script>
</head>

<body y data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0" cz-shortcut-listen="true" class="">
    <button type="button" class="mobile-nav-toggle d-lg-none"><i class="fas fa-bars" aria-hidden="true"></i></button>
    <!-- ======= Header ======= -->
    <?php
    include "../header.php";
    ?>
    <!-- End Header -->


    <main id="main">


        <?php

$servername = 'pdb26.runhosting.com';
$username =  '3683761_wpress059d0a84';
$password = 'hashirisbest1122';
$database = '3683761_wpress059d0a84';


$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
  die('error occured');
}
?>








        <div class="container mb-3">
            <div class="mt-3">
                <div class="row" style="justify-content:space-around;">

                    <div class="recent my-4 my-2">
                        <h2 class="mt-4">MAPS / PROPS</h2>
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
$sql = "SELECT * FROM `upload_mods` WHERE category = 'maps/props' ORDER BY `sno` DESC";
}
else{ 
$sql = "SELECT * FROM `upload_mods` WHERE hidden = 0 && category = 'maps/props' ORDER BY `sno` DESC";
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
      <a href="https://gtavmodspakistan.com/mods/page/?mod='.$titlenospace.'" class="text-dark">
      <div class="col mb-4">
      <div class="card" style="width:768; height:432;">
        <img src="../../assets/img/mods/'. $pic .'" class="card-img-top" alt="...">
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
    include "../../assets/css/themeChecker.php";
    ?>
    <script src="../../assets/css/theme.js"></script>
    <!-- Vendor JS Files -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
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
</body>

</html>
<?php

if(!isset($_COOKIE['admin'])){

if(!isset($_COOKIE['theme'])){
include('../../cache/bottom_cache.php');
}
else{
include('../../cache/bottom_cache_dark.php');
}


}



?>
