<?php session_start();
include "../constante/securiter.php";

?>

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


        <?php error_reporting(0);?>

  
<div class="row">

<div  class="col-md-3">
    <div class="filiere"> <h3>filiere </h3>
   <input  type="text" class="form-control" id="inputPassword2" placeholder=""></div>

</div>
<div  class="col-md-3">
    <div class='filiere'> <h3>niveau </h3>
    <input  type="text" class="form-control" id="inputPassword2" placeholder=""> </div>
  
</div>
<div class="col-md-5">
<h3>importation  </h3>
<?php include "importer_excel.php" ;

?>
</div>
</div> 


<br><br><br>
<table class="table">
  <thead>
    <tr>
     
      <th scope="col">cne</th>
      <th scope="col">nom_etud</th>
      <th scope="col">prenom_etud</th>
      <th scope="col">email_etud</th>
      
   
    </tr>
  </thead>

  <tbody id="too">
    
<?php 



if(isset($verif)){
     $i=0;
    foreach($reader as $key => $row){ 
        if($i!=0){
       ?>

<tr  class="xx"> 
 <th  scope="col">  <div  class="yy" class="col-auto">

<input    value="<?=$row[0]?>" type="text" class="form-control" id="inputPassword2" placeholder="" required>
</div >   </th>
<th  scope="col"> <div  class="yy" class="col-auto ">

<input  value="<?=$row[1]?>" type="text" class="form-control" id="inputPassword2" placeholder="" required>
</div></th>

<th  scope="col"> <div class="yy" class="col-auto">

<input  value="<?=$row[2]?>" type="text" class="form-control" id="inputPassword2" placeholder="" required>
</div></th>

<th   scope="col"> <div  class="yy" class="col-auto">

<input   value="<?=$row[1].'.'.$row[2].'@usms.as.ma';?>" type="text" class="form-control" id="inputPassword2" placeholder="" required>
</div></th>   </tr>
    
        <?php  }else{$i=1;} }?>
         




<?php }?>
    <tr  style="visibility:hidden" class="xx"> 
 <th  scope="col">  <div class="yy" class="col-auto">

<input  type="text" class="form-control" id="inputPassword2" placeholder="" required>
</div>   </th>
<th  scope="col"> <div class="yy" class="col-auto">

<input  type="text" class="form-control" id="inputPassword2" placeholder="" required>
</div></th>

<th  scope="col"> <div class="yy" class="col-auto">

<input   type="text" class="form-control" id="inputPassword2" placeholder="" required>
</div></th>

<th  scope="col"> <div  class="yy" class="col-auto">

<input   type="text" class="form-control" id="inputPassword2" placeholder="" required>
</div></th>   </tr>

 


   


 
    

  </tbody>
</table>



<div class="mx-auto row" style="width:30%;"> <input style="display:inline"  type="number" class="form-control" id="nbre_etud" placeholder="entrer le nombre des etudiants">
<button  onclick="ajouter_etudia()" type="button" class="btn btn-info">valider</button>
<button onclick="ajouter()">okok</button>
</div>

<script>
  
  
//    for(i=0;i<10;i++){
//        // ajouter(123,i,'salma','email');
//    }
function returnchain(){
    x=document.getElementsByClassName('yy');
    y=document.getElementsByClassName('filiere');

    s=y[0].childNodes[3].value+y[1].childNodes[3].value+" ";
    i=0;
    while(x[i]){
        s+=x[i].childNodes[1].value+' ';
        i++;
    }
   return s;

}

    function ajouter(){
        ok=returnchain();
 ajouter_filiere();
     const xhttpp = new XMLHttpRequest();
    xhttpp.onload = function() {
     if(this.responseText==1){

    }
    else{
        alert("765");
    }}

    xhttpp.open("GET", "ajouter_etudiant.php?ok="+ok);
    xhttpp.send();


}


</script>

     






       

      

        
        

       
       

      


</body>


</html>

<script>

 
function  ajouter_etudia(){

nbre_etud=document.getElementById('nbre_etud').value;
if(nbre_etud!=0){
    i=1;
    while(i<=nbre_etud){

         x=document.getElementsByClassName('xx')[0].cloneNode(true);
         x.style.visibility='visible';
document.getElementById('too').appendChild(x);

i++;
}
}
else if(nbre_etud<0){
  //  document.getElementById('too').removeChild(document.getElementById('too').lastChild.previousSibling);
}}

//  }


</script>

<script>
    function ajouter_filiere(){
    x=document.getElementsByClassName('filiere');
    
    const xhttpp = new XMLHttpRequest();
    xhttpp.onload = function() {
alert(x[0].childNodes[3].value);

    }

    xhttpp.open("GET", "ajouter_filere.php?filier="+x[0].childNodes[3].value+"&niveau="+x[1].childNodes[3].value);
    xhttpp.send();

}
</script>