 <?php session_start();
 include "../constante/securiter.php";?>
 <!DOCTYPE html>
 <!-- Designined by CodingLab - youtube.com/codinglabyt -->
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
     <link rel="stylesheet" href="style.css" />
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
                             <a class="nav-link active" aria-current="page" href="#">planning</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="#">statistique</a>
                         </li>


                     </ul>

                 </div>
             </div>
         </nav>
         <br>
         <?php
      

         ?>
         
<?php
try
{ 
$my_con = new PDO('mysql:host=localhost; 
 dbname=gestion-absence', 'root', ''); 
} 
catch(PDOException $excep) 
{ 
echo "Erreur : " . $excep->getMessage(); 
} 
?>
                 <?php 

$ress = $my_con->prepare('SELECT * FROM seance where id_prof=? and jour=? order by heure_debut  asc');

 


                 // ?>
<?php function order($x){

    if(count($x)==1){
        for($i=0;$i<3;$i++){
            $x[i+1]=array('','','','');
        }
    }
    else false;
}
?>
         <h2> planning </h2>
         <!-- echo $date =date('N',strtotime($ligne[0]));y -->
         <table class="table table-bordered border-primary">
<tr><td>#</td> <td>8-10</td> <td>10-12</td> <td>2-4</td> <td>4-6</td></tr>
               <tr>
<td> lundi</td>


               </tr>
             <tr>
                <td>mardi</td>
           
         
            
               </tr>
               <tr>
                <td>mercredi</td>
             <td><a href="admin.html">java</a></td>
                </tr>
                <tr>
                <td>jeudi</td>
                </tr>
                <tr>
                    <td>vendredi</td>
                
                </tr>
                <tr>
                    <td>samedi</td>
                
                </tr>
         </table>
         <br><br><br>
         <div class="row">
             <div class="col-md-4 mx-auto">
                 <div style="display:inline">
                     <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                         <option selected>importe</option>
                         <option value="1"> IMPORTER EXCEL GI1</option>
                         <option value="2">IMPORTER EXCEL GI2</option>
                         <option value="3">UNIX/IID</option>
                     </select>
                 </div>
                 <button type="button" class="btn btn-info">valider</button>
             </div>
         </div>



 </body>

 </html>