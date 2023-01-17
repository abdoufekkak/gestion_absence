<?php
include "../constante/bd.php";
$y=explode(' ',$_GET['ok']);
$id_prof=$_GET['id_prof'];
$elemnt=$_GET['elment'];
 $ok=$y[0];
 if($ok==1){
$date_debut=8;
$date_fin=10;
 }else if($ok==2){
    $date_debut=10;
$date_fin=12;
 }else if($ok==3){
    $date_debut=14;
    $date_fin=16;
 }else{
    $date_debut=16;
    $date_fin=18;
 }
 $jour=$y[1];

 



$INSER =$my_con->prepare('INSERT  INTO seance(id_prof,datee,heure_debut,heure_fin,jour,element,classe) VALUE(?,?,?,?,?,?,?)');
$INSER->execute(array($id_prof,1,$date_debut,$date_fin,$jour,$elemnt,0));

