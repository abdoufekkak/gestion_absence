<?php 
include "../constante/bd.php";

 if(isset($_POST["login"])){
if(!empty($_POST["username"])&& !empty($_POST["password"])){
    $username_admin=$_POST["username"];
    $password_admin=$_POST["password"];
    $sth =$my_con->prepare('SELECT id,email, mot_pass_ad 
    FROM administrateur
    WHERE email=? AND mot_pass_ad=?');
$sth->execute(array($username_admin,$password_admin));
if($sth->rowCount()>0){
 $sth=$sth->fetchObject();
 session_start();

 $_SESSION["username"]=$username_admin;
 $_SESSION["password"]=$password_admin;
 $_SESSION["id_admin"]=$sth->id;
 setcookie('nom',$_SESSION["username"],time()+3600*24*60);
 setcookie('pre',$_SESSION["password"],time()+3600*24*60);
 header("location:../espace-admin/espace_admin.php");

}else{
    $username_prof=$_POST["username"];
    $password_prof=$_POST["password"];
    $sthh =$my_con->prepare('SELECT email_prof,mot_pass 
    FROM professeur
    WHERE email_prof=? AND mot_pass=?');
$sthh->execute(array($username_prof,$password_prof));
if($sthh->rowCount()>0){
 session_start();
 $_SESSION["username"]=$username_prof;
 $_SESSION["password"]=$password_prof;
 header("location:../espace-prof/espace_professeur.php");
}

}
 }
else{

}

 }else{

 }
 ?>