<?php
  include 'config/application.php';
  if ($_SESSION["user_name"]!="") {
  	$UTILITY->location_goto("content/home");
  }
  else {
  	include "view/login.php";
  }
?>
