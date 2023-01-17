<?php include "../constante/bd.php";

$ress = $my_con->query("DELETE   
FROM professeur WHERE id_prof='". $_GET["id"]."'");

echo "ok";
?>