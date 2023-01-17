<?php
include '../constante/bd.php';
$vale=$_GET['vale'];
$sth =$my_con->prepare('SELECT id_prof
FROM professeur
WHERE  prenom_prof=?');
$sth->execute(array($vale));
if($sth->rowCount()>0){
    $sth=$sth->fetchObject();
    
    echo $sth->id_prof;
}
else echo -1;
?>