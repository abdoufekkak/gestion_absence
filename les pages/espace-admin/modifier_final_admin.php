<?php session_start();
include "../constante/securiter.php";?>
<?php include "../constante/bd.php";
$username_ad=$_POST['nom_ad'];
$last_name_ad=$_POST['prenom_ad'];
$Password1_ad=$_POST['mot_pass_ad'];
$email_ad=$_POST['email'];
$CNI_ad=$_POST['CNI'];
$id_ad=$_GET['id'];

$ress = $my_con->prepare("UPDATE 
 administrateur SET  id=?,nom_ad=?,prenom_ad=?,email=?,mot_pass_ad=?
 WHERE id =?");
 $ress->execute(array($CNI_ad,$username_ad,$last_name_ad,$email_ad,$Password1_ad,$id_ad));
 header('location:espace_admin.php');
?>