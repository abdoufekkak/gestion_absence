<?php include "../constante/bd.php";
$search=$_GET['include'];

$res = $my_con->query("
SELECT * FROM administrateur
WHERE nom_ad  LIKE '%".$search."%'");


?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">CNI</th>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">email</th>
            <th scope="col">action</th>

        </tr>
    </thead>



    <tbody>




        <?php
while($elemnt= $res->fetch(PDO::FETCH_ASSOC))
{ ?>
        <tr id="<?= $elemnt['id'];  ?>">
            <th scope="row"> <?= $elemnt["id"]; ?></th>
            <th scope="row"> <?= $elemnt["nom_ad"]; ?></th>
            <td> <?= $elemnt["prenom_ad"]; ?></td>
            <td> <?= $elemnt["email"]; ?> </td>
            <td> <a href="action_modifier_admin.php?id=<?= $elemnt['id'] ?>" class="btn btn-warning"><i
                        class="fa-solid fa-pen-to-square"></i></a> <a onclick="delete_oko(<?= $elemnt['id']; ?>)"
                    href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a> </td>
        </tr>
        <?php
}

?>
        <?php
echo"</tbody>";
?>