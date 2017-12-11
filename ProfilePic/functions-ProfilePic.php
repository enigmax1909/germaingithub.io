<?
//connection string for database

session_start();
//start a session 

$link = mysqli_connect("localhost","gevictor_members","@Pril2977" , "gevictor_members");

if(mysqli_connect_errno()){
    
    print_r(mysqli_connect_error());
    exit();
}

 if($_GET['function'] == "logout"){
     
     session_unset();
 }


?>