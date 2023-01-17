<?php include "../constante/bd.php";
$username_prof=$_POST['nom_prof'];
$last_name_prof=$_POST['prenom_prof'];
$Password1_prof=$_POST['mot_pass'];
$email_prof=$_POST['email_prof'];
$phone_prof=$_POST['phone_prof'];
$id_prof=$_GET['id'];
$ress = $my_con->prepare("UPDATE 
 professeur SET   nom_prof=?,prenom_prof=?,mot_pass=?,email_prof=?,phone_prof=?
 WHERE id_prof =?");
 $ress->execute(array($username_prof,$last_name_prof,$Password1_prof,$email_prof,$phone_prof,$id_prof));

header("location:espace_admin.php");
?>