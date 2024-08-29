<?php

if(!isset($_GET['unhide'])){
  header('Location: https://gtavmodspakistan.com');
}
$servername = 'pdb26.runhosting.com';
$username =  '3683761_wpress059d0a84';
$password = 'hashirisbest1122';
$database = '3683761_wpress059d0a84';
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
  die('error occured');
}
mysqli_set_charset($conn, 'utf8mb4');


if(isset($_GET['unhide'])){

  $titlenospace = $_GET['unhide'];
  $sql = "SELECT * FROM `upload_mods` WHERE `titlenospace` = '" . $titlenospace . "'";
  $result = mysqli_query($conn, $sql);
  
  
  $row = mysqli_fetch_assoc($result);
  $cat = $row['category'];
  
   if($cat=='maps/props'){
  $cat = "maps-props";
  }
  $catLight = "../../mods/". $cat . "/dark-cached-index.html";
  $catDark = "../../mods/". $cat . "/cached-index.html";
  
  $files = array('../../cached-index.html','../../dark-cached-index.html','../../mods/cached-index.html','../../mods/dark-cached-index.html',$catLight,$catDark);
error_reporting(E_ERROR | E_PARSE);
foreach($files as $file){
try{
 unlink($file);
}
catch(Exception $e){
echo "huh";
}

 }
  
  $sql = "UPDATE `upload_mods` SET `hidden` = '0' WHERE `titlenospace` = '" . $titlenospace . "'";
  
  $result = mysqli_query($conn, $sql);
  
  header('Location: https://gtavmodspakistan.com');
}
?>