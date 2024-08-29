<?php

// Cookies | Sessions

// echo time();
setcookie("admin", "681", time() + 315569520, "/");
echo "<h1>Now you are admin, now get the sh*t out of here !!!</h1>";
$adm = $_COOKIE['admin'];
echo $adm;
?>

