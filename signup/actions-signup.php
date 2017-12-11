<?php

    include("functions-signup.php");

      if ($_GET['action'] == "Signup"){
          
          //print_r($_POST);
          
           $error = "";
         // print_r($_POST);
          
         if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) == false){
              
              
              $error = $error. "<p>Please enter a valid email address.</p>";
              
          } if(!$_POST['username']){
              
               $error =  $error . "<p>Please enter a username</p>" ;

          }  if(!$_POST['password']){
              
               $error =  $error . "<p>Please enter a password </p>" ;

          } if(!$_POST['confirmPassword']){
              
               $error =  $error . "<p>Please enter your password again in the confirm password field </p>" ;

          } if (strlen($_POST['password']) < 8){
             
              $error  =  $error . "<p>Password must be greater than  8 characters</p>" ;

         } if (!preg_match('/[\'^£$%&*()}{@!#~?><>,|=_+¬-]/', $_POST['password'] )){
             
              $error =  $error . "<p>Password must contain one of the special characters /[\'^£$%&*()}{@!#~?><>,|=_+¬-]/</p> " ;
                
    // one or more of the 'special characters' found in $string

          } if($_POST['confirmPassword'] != $_POST['password'] ){
              
               $error =  $error . "<p>Password and confirm password fields do not match</p>" ;

          }
           
          
          
           if($error != ""){
              
              echo $error;
              exit();   
              
          }
          
          //Begin MYSQL for adding username , password, and email to database 
          
          if( $error == ""){
              
              $query = "SELECT * FROM users WHERE email  = '". mysqli_real_escape_string($link,$_POST['email'])."'Limit 1";
              $result  = mysqli_query($link, $query);
             
              if(mysqli_num_rows($result) > 0 ){
             // echo "You have signed up succesfully";  
             $error  =  $error . "<p>That email address already exists </p>";
                   
                  
                    }else{
                  
                     $query = "SELECT * FROM users WHERE username  = '". mysqli_real_escape_string($link,$_POST['username'])."'Limit 1";
              $result  = mysqli_query($link, $query);
             
              if(mysqli_num_rows($result) > 0 ){
             // echo "You have signed up succesfully";  
             $error  =  $error . "<p>That username already exists </p>";
              
                    }else{
                  
                            $query = "INSERT INTO users (`email`,`username`,`password`) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."' , '".mysqli_real_escape_string($link,$_POST['username'])."', '".mysqli_real_escape_string($link,$_POST['password'])."')";
                          
                          
                       
                  
                          if(mysqli_query($link, $query)){
                              
                                $_SESSION['id'] = mysqli_insert_id($link);
                                $_SESSION['username'] = $_POST['username'];
                                // Set the $_SESSION variable of id to the id of the position in the table
                              
                              //Last query was insert so this is why use mysqli_insert_id($link) becuase inserting id of newly inserted row
                              
                                $query = "UPDATE users SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id =".mysqli_insert_id($link)." LIMIT 1"; 
                                echo "You have signed up succesfully";  
                                mysqli_query($link, $query);
                              
                              
                              
                          }else{
                              
                                $error = " Couldnt create user";
                          }
              
              
              
                  }
          
                  
                  
                  
                  
                  
                          
             }
              
              
              
          
     }
         
          if($error != ""){
              
              echo $error;
              exit();   
          }
          
      }

    

?>