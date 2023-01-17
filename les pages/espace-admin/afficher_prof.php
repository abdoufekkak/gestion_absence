<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.js"></script>


<link href="../../images/font/css/all.css" rel="stylesheet">

<head>



    <?php 
include "../constante/bd.php";



 
$ress = $my_con->query('SELECT nom_prof,prenom_prof,email_prof,id_prof
FROM professeur');?>

    <div id="bobo">
        <?php
echo '<table class="table">
    <thead>
        <tr>

            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">email</th>
            <th scope="col">action</th>


        </tr>

    </thead>';



    ?>

        <tbody>

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
</tbody>";


?>

    </div>
    <Script>
    $(document).ready(function() {
        //load_data();
        $('#form1').keyup(function() {
            var x = $(this).val();
            if (x != "") {
                load_data(x);
            } else {}

        });

        function load_data(query) {
            $.ajax({
                url: "searchresult.php",
                method: "GET",
                data: {
                    include: query
                },
                success: function(data) {
                    document.querySelector('#bobo').innerHTML = data;
                }
            });
        }
    });
    </Script>