<?php include "../constante/bd.php";
session_start();
include "../constante/securiter.php";

if(isset($_POST["valider"])){
    if(!empty($_POST["Name"])&& !empty($_POST["last_Name"])&& !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["1Password"])&& !empty($_POST["2Password"]))
    {
       if($_POST["1Password"]==$_POST["2Password"]){

        $username_prof=$_POST["Name"];
        $last_name_prof=$_POST["last_Name"];
        $email_prof=$_POST["email"];
        $phone_prof=$_POST["phone"]; 
        $Password1_prof=$_POST["1Password"];
        $sth =$my_con->prepare('INSERT INTO professeur(nom_prof,prenom_prof,mot_pass,email_prof,phone_prof) VALUES(?,?,?,?,?)');
    $sth->execute(array($username_prof,$last_name_prof,$Password1_prof,$email_prof,$phone_prof));
    if($sth->rowCount()>0){
      echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>successfully created
         </strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';

   
    
    }else{
       
    
    
    }

       }
       
     }

    else{
    
    }
    
     }else{
    
     }