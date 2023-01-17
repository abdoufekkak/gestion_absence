<?php session_start();
include "../constante/securiter.php";?>
<?php include "../constante/bd.php";


$ress = $my_con->query("DELETE   
FROM administrateur WHERE id='". $_GET["id"]."'");
echo "ok";

?>