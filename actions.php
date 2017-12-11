<?php

    include("functions.php");

     if ($_GET['action'] == "Login"){
         
              $error = "";
         
       if(!$_POST['username']){
              
               $error =  $error . "<p>Please enter a username</p>" ;

          }  
         
         if(!$_POST['password']){
              
               $error =  $error . "<p>Please enter a password</p>" ;

          }  
         
         if($error != ""){
              
              echo $error;
              exit();   
          }
         
         
         $query = " SELECT * FROM users WHERE username = '". mysqli_real_escape_string($link,$_POST['username'])."' LIMIT 1";
         $result = mysqli_query($link,$query);
         $row  = mysqli_fetch_assoc($result);
         if($row['password'] ==  md5(md5($row['id']).$_POST['password'])){
             
             echo "You have logged in succesfully";
             
              $_SESSION['id'] = $row['id'];
              $_SESSION['username'] = $_POST['username'];
             
             // set $_SESSION['id'] = $row['id'] becuase not inserting this time as in sign up this time already have an id existing just need to find it and set session variable equal to it.
             
             
         }else{
             
            $error =  $error . "<p>That username and password combination does not exist </p> <p> Please try again</p>" ;
         }     
         
        // print_r($_POST);
         
         if($error != ""){
              
              echo $error;
              exit();   
          }
     }

?>