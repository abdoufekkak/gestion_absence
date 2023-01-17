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
FROM professeur WHERE id_prof='". $_GET["id"]."'");
while($ligne= $ress->fetch(PDO::FETCH_ASSOC)) 
{ 

?>
<div class="container"> <form method="post" action="modifier_final_prof.php?id=<?php echo $_GET["id"] ; ?>">
    <div class="containerr">
        <div class="title">Registration</div>
        <div class="content">
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your name" name="nom_prof"
                            value="<?php echo $ligne['nom_prof'] ; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="prenom_prof" placeholder="Enter your username"
                            value="<?php echo $ligne['prenom_prof'] ; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email_prof" placeholder="Enter your email"
                            value="<?php echo $ligne['email_prof']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="phone_prof" placeholder="Enter your number"
                            value="<?php echo  $ligne['phone_prof']; ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="text" name="mot_pass" placeholder="Enter your password"
                            value="<?php echo $ligne['mot_pass'] ; ?>" required>
                    </div>

                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1">
                    <input type="radio" name="gender" id="dot-2">
                    <input type="radio" name="gender" id="dot-3">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Prefer not to say</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="modifier" value="valider">
                </div>
            </form>
        </div>
    </div>
</form></div>


<?php
}
?>