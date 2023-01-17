<?php include "../constante/bd.php";
session_start();
include "../constante/securiter.php";
if(isset($_POST["valider"])){
    if(!empty($_POST["Name"])&& !empty($_POST["last_Name"])&& !empty($_POST["email"])  && !empty($_POST["1Password"])&& !empty($_POST["2Password"]))
    {
       if($_POST["1Password"]==$_POST["2Password"]){
        $CNI=$_POST["CNI"];
        $username_admin=$_POST["Name"];
        $last_name_admin=$_POST["last_Name"];
        $email_admin=$_POST["email"];
       
        $Password1_admin=$_POST["1Password"];
        $sth =$my_con->prepare('INSERT INTO administrateur VALUES(?,?,?,?,?)');
        $sth->execute(array($CNI,$username_admin,$last_name_admin,$email_admin, $Password1_admin));
       
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