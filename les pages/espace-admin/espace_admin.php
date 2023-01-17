<?php session_start();
include "../constante/securiter.php";?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.js"></script>

<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
    <link href="../../images/font/css/all.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <meta charset="UTF-8" />
    <title>Responsive Registration Form | CodingLab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div class="container">
        <br />
        <h2 style="display: inline">gestion des absences</h2>
        <a href="../constante/deconnexion.php"> <button type="button" class="btn btn-info" style="float: right">
                logout
            </button></a>
        <br /><br />

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">G-ABS</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">page principale</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                menu
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="formulaire-prof.php">creation compte prof</a></li>
                                <li><a class="dropdown-item" href="formulaire_admin.php">creation compte admin</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">voir statistique</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="planning.php">planning</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="gestion_classe.php">gestion_classe</a>
                                </li>
                            </ul>
                        </li>


                        </form>
                </div>
            </div>
        </nav>
        <br>


        <br><br>
        

        <form action="" method="post">
            <div >
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="x" type="radio" id="inlineCheckbox1" value="option1"
                        onclick="showCustomer()" />
                    <label class="form-check-label" for="inlineCheckbox1">prof</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" onclick="showCustomerr()" name="x" type="radio" id="inlineCheckbox2"
                        value="option2" checked="checked" />
                    <label class="form-check-label" for="inlineCheckbox2">admin</label>
                </div>


                <!-- End Example Code -->

                        <span  id="prof" style="float:left  ;  padding-right:150px ; margin-top:-4px;" >
                            <div class="form-outline">
                                <input   placeholder="search" value="" type="search" id="form1" class="form-control"  />
                            
                            </div>
                            
                        </span>
                        <span id="admin" style="float:left ;  padding-right:150px ; margin-top:-4px;">
                            <div class="form-outline">
                                <input placeholder="search" value="" type="search" id="form2" class="form-control"  />
                               
                            </div>
                            
                        </span>
            </div>

        </form>
        <br><br>
        <div id="bobo"></div>


        </h3>


</body>

</html>
<script>
// $(document).ready(function() {
//     //load_data();
//     $('#form1').keyup(function() {
//         var x = $(this).val();
//         if (x != "") {
//             load_data(x);
//         } else {
//             document.querySelector('#bobo').innerHTML
//         }

//     });

//     function load_data(query) {
//         $.ajax({
//             url: "searchresult.php",
//             method: "GET",
//             data: {
//                 include: query
//             },
//             success: function(data) {
//                 document.querySelector('#bobo').innerHTML = data;
//             }
//         });
//     }
// });

function showCustomerr() {

    const xhttpp = new XMLHttpRequest();
    xhttpp.onload = function() {
        document.getElementById("bobo").innerHTML = this.responseText;
        $('#prof').hide();
        $('#admin').show();


    }
    xhttpp.open("GET", "afficher_admin.php");
    xhttpp.send();
}


function showCustomer() {

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        if( this.responseText=="ok"){
            document.getElementById("bobo").innerHTML = this.responseText;
        $('#admin').hide();
        $('#prof').show();
        }
      

 
    }
    xhttp.open("GET", "afficher_prof.php?cid");
    xhttp.send();
}

function okok() {
    if (ducument.getElementById('inlineCheckbox2').checked == true) {
        alert(12);
    }
}


function delete_oko(id) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {

        
        jQuery("#" + id).hide(1000);


    }
    xhttp.open("GET", "action_supprimer_admin.php?id=" + id);
    xhttp.send();

}

function delete_ok(id) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {

        jQuery("#" + id).hide(1000);


    }
    xhttp.open("GET", "action_supprimer_professeur.php?id=" + id);
    xhttp.send();



}
$(document).ready(function() {
    //load_data();

    $('#form1').keyup(function() {
        var x = $(this).val();
        if (x != "") {
            load_data(x);
        } else {
            showCustomer();
        }


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

$(document).ready(function() {
    //load_data();

    $('#form2').keyup(function() {
        var x = $(this).val();
        if (x != "") {
            load_data(x);
        } else {
            showCustomerr();
        }


    });

    function load_data(query) {
        $.ajax({
            url: "searchresult_admin.php",
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




showCustomerr();
</script>