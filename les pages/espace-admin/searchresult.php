<?php include "../constante/bd.php";
$search=$_GET['include'];

$ress = $my_con->query("
SELECT * FROM professeur
WHERE nom_prof LIKE '%".$search."%'");


echo '<table class="table">
    <thead>
        <tr>

            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">email</th>
            <th scope="col">action</th>


        </tr>

    </thead>';



    echo"<tbody>";
    ?>
<div id="ok">
    <?php
while($elemntt=$ress->fetch(PDO::FETCH_ASSOC))
{?>

    <tr class="group" id="<?= $elemntt['id_prof'];  ?>">
        <th scope='row'> <?= $elemntt["nom_prof"]; ?></th>
        <td><?= $elemntt["prenom_prof"]; ?></td>
        <td><?= $elemntt["email_prof"]; ?></td>
        <td> <a href="action_modifier_prof.php?id=<?= $elemntt['id_prof']; ?>" class="btn btn-warning"><i
                    class="fa-solid fa-pen-to-square"></i></a> <button type="button"
                onclick="delete_ok(<?= $elemntt['id_prof']; ?>)" class="btn btn-danger"><i
                    class="fa-solid fa-trash-can"></i></button>
        </td>

    </tr>

    <?php

}







echo"
</tbody><div>";

?>