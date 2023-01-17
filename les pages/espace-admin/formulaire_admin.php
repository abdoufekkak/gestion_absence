<?php include "action_formulaire_admin.php" ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>

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
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"
        <meta charset="UTF-8" />
    <title>Responsive Registration Form | CodingLab</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style-form.css">
</head>

<body>
    <div class="container">
        <br />
        <h2 style="display: inline">gestion des absences</h2>
    <a href='../constante/deconnexion.php'>
        <button type="button" class="btn btn-info" style="float: right">
            logout
        </button>
    </a>
        <br /><br />

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">G-ABS</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="espace_admin.php">page principale</a>
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
        <div class="containerr container">
            <div class="title">creer compte admin</div>
            <div class="content">
                <form action="" method="post">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">CNI</span>
                            <input type="text" name="CNI" placeholder="Enter your CNI" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Name</span>
                            <input type="text" name="Name" placeholder="Enter your name" required>
                        </div>
                        <div class="input-box">
                            <span class="details">last Name</span>
                            <input type="text" name="last_Name" placeholder="Enter your username" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="text" name="1Password" placeholder="Enter your password" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Confirm Password</span>
                            <input type="text" name="2Password" placeholder="Confirm your password" required>
                        </div>
                    </div>

                    <div class="button">
                        <input type="submit" name="valider" class="btn btn-success" value="valider">
                    </div>
                </form>
            </div>
        </div>
</body>