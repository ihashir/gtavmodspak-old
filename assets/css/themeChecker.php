<?php
$tooltip = "'tooltip'";
echo '
<script>function getCookie(cname) { var name = cname + "="; var decodedCookie = decodeURIComponent(document.cookie); var ca = decodedCookie.split(";"); for(var i = 0; i <ca.length; i++) { var c = ca[i]; while (c.charAt(0) == " ") { c = c.substring(1); } if (c.indexOf(name) == 0) { return c.substring(name.length, c.length); } } return ""; } var cookie = getCookie("theme");
if(cookie=="dark"){
   document.getElementById("moon").setAttribute("class", "far fa-lightbulb");
   document.getElementById("themebtn").setAttribute("onclick", "lightTheme()");
   console.log("cookieExist");
  }
  else{

    document.getElementById("moon").setAttribute("class", "far fa-moon");
    document.getElementById("themebtn").setAttribute("onclick", "darkTheme()");
    console.log("cookienotExist");
  }
  
  </script>';
  
?>