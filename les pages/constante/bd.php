
<?php
try
{ 
$my_con = new PDO('mysql:host=localhost; 
 dbname=gestion-absence', 'root', ''); 
} 
catch(PDOException $excep) 
{ 
echo "Erreur : " . $excep->getMessage(); 
} 
?>