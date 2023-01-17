<?php require "action_loging.php"?>
<!DOCTYPE html>
<html>

<head>


</head>

<body>

    <title> LOGIN FORM </title>
    <lin<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@1,300&family=Edu+VIC+WA+NT+Beginner:wght@700&display=swap" rel="stylesheet">
    <link rel=" stylesheet " href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css ">
    <link rel=" stylesheet " href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css ">
    <link rel="stylesheet " type=" text/css" href="style_login.css">
    <link rel="stylesheet" type="text/css" href="coco.css">
    <link rel="stylesheet" href="../constante/stylefooter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link href="../../images/font/css/all.css" rel="stylesheet">
        
    <div class="form_bg ">
    <h1><a  style="color:#fff"href="../accueil/accueil.php"></i>accueil</a></h1>
        <div class="container">
            <div class=" col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                <form class="form_horizontal" action="" method="post">
                    <div  style="margin-top=100px" class="form_icon">
                        <i class="fa fa-user-circle">
                        </i>
                    </div>
                    <h3 class="title"> login form </h3>
                    <div class="form-group">
                        <span class="input-icon">
                            <i class=" fa fa-user "> </i>
                        </span>
                        <input class="form-control" type="text" name="username" placeholder="username" value=<?php if(isset($_COOKIE['nom'])) echo $_COOKIE['nom']; ?>  />
                    </div>
                    <div class="form-group">
                        <span class="input-icon">
                            <i class="fa fa-lock"> </i>
                        </span>
                        <input class="form-control" type="password" name="password" placeholder=" password " value=<?php if(isset($_COOKIE['pre'])) echo $_COOKIE['pre'] ; ?>  />
                    </div>
                    <br> <button type="submit" name="login" class="btn signin"> login </button>
                    <ul class="form-options">
                        <li>
                            <a href="#"> se souvenir mot de passe</a>
                        </li>
                 </ul>
                </form>
            </div>
        </div>
    </div>

    <?php $i = 0;
  while ($i <0) {
    echo "<br>";
    $i++;
  }
  ?>
    <?php include "../constante/footer.php" ?>

</body>

</html>