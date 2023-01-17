<?php session_start();
include "../constante/securiter.php";?>
<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">


<head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="style-form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
</head>
<?php include "../constante/bd.php";
$ress = $my_con->query("SELECT *
FROM administrateur WHERE id='". $_GET["id"]."'");
while($ligne= $ress->fetch(PDO::FETCH_ASSOC)) 
{ 

?>
<div class="container">
    <form method="post" action="modifier_final_admin.php?id=<?php echo $_GET["id"] ; ?>">
    <div class="containerr">
        <div class="title">Registration</div>
        <div class="content">

            <div class="user-details">
                <div class="input-box">
                    <span class="details">CNI</span>
                    <input type="text" placeholder="Enter your name" name="CNI" value="<?php echo $ligne['id'] ; ?>"
                        required>
                </div>
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" name="nom_ad"
                        value="<?php echo $ligne['nom_ad'] ; ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="prenom_ad" placeholder="Enter your username"
                        value="<?php echo $ligne['prenom_ad'] ; ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" name="email" placeholder="Enter your email"
                        value="<?php echo $ligne['email']; ?>" required>
                </div>

                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" name="mot_pass_ad" placeholder="Enter your password"
                        value="<?php echo $ligne['mot_pass_ad'] ; ?>" required>
                </div>

            </div>

            <div class="button">
                <input type="submit" name="modifier" value="valider">
            </div>

        </div>
    </div>
</form>
</div>


<?php
}
?>