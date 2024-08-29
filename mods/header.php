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
if(strpos($_SERVER['REQUEST_URI'], 'misc') !== false){
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