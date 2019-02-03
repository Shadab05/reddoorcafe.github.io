<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION['email']);


$myurl= $_SERVER['REQUEST_URI'];

if(strpos($myurl,'?')==false)
{
//if you find anything on the right of a question mark in the url, hit :
 header("Location: login.php");
}
else
  {

 //else hit
header("Location: login.php?login=unsuccessful");
}


?>
