<?php 

include "../constante/bd.php";
$sth =$my_con->prepare('INSERT INTO classe(filiere,niveau,id) VALUES(?,?,?)');
$sth->execute(array($_GET['filier'],$_GET['niveau'],$_GET['filier'].$_GET['niveau']));
if($sth->rowCount()>0){
    echo 'aabdou';

}

