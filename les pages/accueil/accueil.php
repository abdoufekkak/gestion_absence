<!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="abdou fekkak">
    <meta name="generator" content="Hugo 0.84.0">
    <title>La page d'accueil</title>
    <link href="../images/font/css/all.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../constante/stylefooter.css">
    <!-- style service  -->
    <link rel="stylesheet" href="style_service.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="C:\wamp64\www\gesrion_absense\css\css2\css\all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <link rel="stylesheet" type="text/css" href="coco.css">


    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>

    <?php include "nav.php" ?>

    <br><br>
    <img class="img" style="opacity:1; right:12px;" src="../../images/Logiciel-gestion-absence.jpg" align="right">

    <div class="container">
        <div class="info">
            <h1>G.<span style="color:">ABS</span>&#63;</h1>
            <p style="text-align: justify;letter-spacing: 3px;text-indent: 50px;">
                Est un espace qui permet de gerer les abscences,<br />

                des etudiants ... &#9786;<br />
                <br />
                vous pouvez se connecter dans ce plateforme <br />
                en accédant à ce lien &#8681;.
                <br />
            </p>
            <a href="../login/login.php" class="btn btn-info" role="button">connexion &raquo;</a>

        </div>

    </div>






    <!-- service -->
    <?php $i=0;
      while($i<20){
        echo "<br>";
        $i++;
      }
   ?>



    <div class="containeer">
        <h2 id="service"> Nos Services</h2>
        <section class="services ">
            <div class="card">
                <div class="content">
                    <div class="icon"><i class="fa fa-line-chart"></i></div>
                    <div class="title">statistique</div>
                    <p>consulter les statistiques d'absence.</p>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="icon"><i class="fa-solid fa-calendar"></i></div>
                    <div class="title">planning</div>
                    <p>planifier et gérer l'emploi du temps.</p>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <div class="icon"><i class="fa-solid fa-person"></i></div>
                    <div class="title">absence </div>
                    <p> gerer et modifier l'absence</p>
                </div>
            </div>
    </div>



    <?php $i=0;
      while($i<20){
        echo "<br>";
        $i++;
      }
   ?>


    <!--menmbre-->
    <div class="containeer">
        <h2 id="menbre"> contact menbre </h2>
    </div>

    <br><br>



    <section>
        <?php include "menbre.html" ?>
    </section>


    <?php $i=0;
      while($i<40){
        echo "<br>";
        $i++;
      }
      ?>






    <?php include "../constante/footer.php"?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>


</body>

</html>