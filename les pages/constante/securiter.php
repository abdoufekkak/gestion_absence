<?php 
if(!(isset($_SESSION["username"]) && isset($_SESSION["password"]) && !empty($_SESSION["username"]) && !empty($_SESSION["password"]))){
header("location:../login/login.php");
}