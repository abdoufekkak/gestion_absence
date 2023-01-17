<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en">
    <?php error_reporting(0);?>
<?php include "../constante/bd.php";?>

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
        <button type="button" class="btn btn-info" style="float: right">
            logout
        </button>
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
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="formulaire.php">creation compte</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">voir statistique</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="planning.php">planning</a>
                                </li>
                            </ul>
                        </li>


                        </form>
                </div>
            </div>
        </nav>

        <br>

        <div class="row">
            <div style="width:25%" class="col-md-3">
                <h2>FILIERE:</h2>
                <select class="form-select" aria-label="Default select example">
                    <option selected="">---</option>
                    <?php   
                   $ress = $my_con->query("SELECT DISTINCT filiere  FROM classe");
                   while($elemntt=$ress->fetch(PDO::FETCH_ASSOC))
{


                  ?>

                    <option value=""><?= $elemntt['filiere'];?></option>
                    <?php }?>

                </select>
            </div>
            <div style="width:25%" class="col-md-3">
                <h2>NIVEAU:</h2>
                <select class="form-select" aria-label="Default select example">
                    <option selected="">---</option>
                    <?php   
                   $ress = $my_con->query("SELECT DISTINCT niveau  FROM classe");
                   while($elemntt=$ress->fetch(PDO::FETCH_ASSOC))
{


                  ?>

                    <option value=""><?= $elemntt['niveau'];?></option>
                    <?php }?>

                </select>

            </div>


            <script>
            function verifier() {

                var xx = document.getElementsByClassName("okok");

                var i = 0;
                while (xx[i]) {
                    if (document.getElementById('x').value == xx[i].value || document.getElementById('x').value == "") {
                        return true;
                    }
                    i++;
                }
                return false;
            }

            function okok() {
                if (!verifier()) {
                    alert("ce prof n'xiste pas");
                    document.getElementById('x').value = "";
                }
            }
            </script>
            <div style="width:50%" class="col-md-6">
                <h2>semaine:</h2>
                <input class="form-select" type="week" name="week" id="camp-week" min="2022-W18" max="2023-W26"
                    required>
            </div>
        </div>
    </div>

    <?php include "importer_excel.php" ;
    
     
     
     
    if(isset($reader)){
    $i=0;
     foreach($reader as $key => $row){ 
       
     $x[$i]=$row;
    $i++;
     }
    }
    

    ?>
    <br><br>
    <table style="margin-left: 50px; margin-right:50;" class=" table">
        <thead>
            <tr style="text-align:center">

                <th style="text-align:left">seance/jour</th>

                <th>8-10</th>
                <th scope="col">10:15-12:15</th>


                <th scope="col">2-4</th>
                <th scope="col">4:15-6:15</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="col">lundi</th>
                <?php
                $i=0;
                $j=0;
                $k=-1;
                $S=0;
               while($i<4){
                echo "<td >";
            ?>
        <div class='tous'> 
        <div>
                <input   onchange='fofo(this)' placeholder="Entrer nom p"  id="<?= $i.' '.'1'?>" list="browsers" value="<?= $x[0][$j=$j+2]; ?>"
                    name="browser" />
                <datalist  id="browsers">
                    <?php  
                $ress = $my_con->query("SELECT id_prof,nom_prof,prenom_prof  FROM professeur");
                   while($elemntt=$ress->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <option   class="okok"   id="<?= $elemntt['id_prof'];?>"
                        value="<?=$elemntt['prenom_prof'];?>">
                        <?php }?>
                </datalist>
                </div>
                <input   type="text" id="<?= $i.' '.'1'?>" value="<?= $x[0][$k=$k+2]?>" name="ok" />
        </div>
              

                <?php
                
                echo "</td>";
                $i++;
               }?>
            </tr>
            <tr>
                <th scope="col">mardi</th>
                <?php
                $i=0;
                $j=0;
                $k=-1;
                while($i<4){
                    echo "<td >";
              ?>
              <div class='tous'> 

              <div>
                <input  onchange='fofo(this)' placeholder="Entrer nom prof"  id="<?= $i.' '.'2'?>" list="browsers" name="browser" value="<?= $x[1][$j=$j+2]?>">
                <datalist id="browsers">
                    <?php  
                
                $ress = $my_con->query("SELECT id_prof,nom_prof,prenom_prof  FROM professeur");
                   while($elemntt=$ress->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <option class="okok" id="<?= $elemntt['id_prof'];?>"
                        value="<?=$elemntt['prenom_prof'];?>">
                        <?php }?>
                </datalist>
                </div>
                <input  id="<?= $i.' '.'2'?>" type="text" name="ok" value="<?= $x[1][$k=$k+2]?>" />
              </div>
               
                <?php
                echo "</td>";
                $i++;
               }?>
            </tr>
            <tr>
                <th scope="col">mercredi</th>
                <?php
                $i=0;
                $j=0;
                $k=-1;
               while($i<4){
                echo "<td >";?>
                <div class='tous'>

                <div>
                <input  onchange='fofo(this)' placeholder="Entrer nom prof" id="<?= $i.' '.'3'?>" list="browsers" name="browser"
                    value="<?= $x[2][$j=$j+2]?>" />
                <datalist id="browsers">
                    <?php  
                
                $ress = $my_con->query("SELECT id_prof,nom_prof,prenom_prof  FROM professeur");
                   while($elemntt=$ress->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <option class="okok" id="<?= $elemntt['id_prof'];?>"
                        value="<?=$elemntt['prenom_prof'];?>">
                        <?php }?>
                </datalist>
                </div>
                <input id="<?= $i.' '.'3'?>" type="text" name="ok" value="<?= $x[2][$k=$k+2]?>" >
                </div>
                

                <?php
                echo "</td>";
                $i++;
               }?>
            </tr>
            <tr>
                <th scope="col">jeudi</th>
                <?php
                $i=0;
                $j=0;
                $k=-1;
               while($i<4){
                echo "<td  >";?>
                <div   class='tous'> 

                <div>
                <input onchange='fofo(this)' placeholder="Entrer nom prof" id="<?= $i.' '.'4'?>" list="browsers" name="browser"
                    value="<?= $x[3][$j=$j+2]?>" />
                <datalist id="browsers">
                    <?php  
                
                $ress = $my_con->query("SELECT id_prof,nom_prof,prenom_prof  FROM professeur");
                   while($elemntt=$ress->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <option class="okok" id="<?= $elemntt['id_prof'];?>"
                        value="<?= $elemntt['prenom_prof'];?>">
                        <?php }?>
                </datalist>
                </div>

                <input id="<?= $i.' '.'4'?>" type="text" value="<?= $x[3][$k=$k+2]?>" name="ok" >
                </div>
                

                <?php
               
                echo "</td>";
                $i++;
               }?>

            </tr>
            <tr>
                <th scope="col">vendredi</th>
                <?php
                $i=0;
                $j=0;$k=-1;
               while($i<4){
                echo "<td >";?>
                <div  class='tous'>   <div  >
                <input onchange='fofo(this)' placeholder="Entrer nom prof" id="<?= $i.' '.'5'?>" list="browsers" name="browser"
                    value="<?= $x[4][$j=$j+2]?>" />
                <datalist id=" browsers">
                    <?php  
                
                $ress = $my_con->query("SELECT id_prof,nom_prof,prenom_prof  FROM professeur");
                   while($elemntt=$ress->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <option class="okok" id="<?= $elemntt['id_prof'];?>"
                        value="<?= $elemntt['prenom_prof'];?>">
                        <?php }?>
                </datalist>
                </div>
                <input  id="<?= $i.' '.'5'?>" type="text" value="<?= $x[4][$k=$k+2]?>" name="ok" >
             </div>
                

                <?php
               
                echo "</td>";
                $i++;
               }?>

            </tr>
            <tr>
                <th scope="col">samedi</th>
                <?php
                $i=0;
                $j=0;$k=-1;
               while($i<4){
                echo "<td >";?>
                <div class='tous'>
                <div>
                <input onchange='fofo(this)' placeholder="Entrer nom prof" id="<?= $i.' '.'6'?>" list="browsers" name="browser"
                    value="<?= $x[5][$j=$j+2]?>" />
                <datalist id=" browsers">
                   
                    <?php  
                
                $ress = $my_con->query("SELECT id_prof,nom_prof,prenom_prof  FROM professeur");
                   while($elemntt=$ress->fetch(PDO::FETCH_ASSOC)){
                ?>
                    <option class="okok" id="<?= $elemntt['id_prof'];?>"
                        value="<?= $elemntt['prenom_prof'];?>">
                        <?php }?>
                </datalist>
                </div>
                <input  id="<?= $i.' '.'6'?>" type="text" name="ok" value="<?= $x[5][$k=$k+2]?>" >

                </div>
               

                <?php
               
                echo "</td>";
                $i++;
               }?>

            </tr>

        </tbody>
    </table>
    <br><br>
    <div align="center"> <input  onclick="ajoutertous()" style="margin: left 60px;" type="button" value="valider" class=" btn btn-info" >
    </div>
    

  
    <p id='kkk'></p>
</html>


<script>
        function fofo(x){
            const xhttpp = new XMLHttpRequest();
    xhttpp.onload = function() {
       if(this.responseText!=-1){

x.id=this.responseText;


       }
       else{
      x.value='';
      
       }
      

    }
    xhttpp.open("GET", "getCle.php?vale="+x.value);
    xhttpp.send();


}
</script>
    <script>
     
    function ajoutertous() {
      
       var tous = document.getElementsByClassName("tous");
       i=0;
      
    //  alert(tous.length);
     while(tous[i]){
       x=tous[i].childNodes[3].value;
      y=tous[i].childNodes[1].childNodes[1].id;
      z=tous[i].childNodes[3].id;
   i++;
   ajouterseance(y,x,1,z);
  } 
}

    function ajouterseance(id_prof,elemnt,date,x){
        
        const xhttpp = new XMLHttpRequest();
    xhttpp.onload = function() {
        
      
    }
    xhttpp.open("GET", "ajouter_seance.php?id_prof="+id_prof+"&elment="+elemnt+"&date="+date+'&ok='+x);
    xhttpp.send();


    }
    

    </script>
</body>

