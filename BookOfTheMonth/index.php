<?php

include("functions-BOTM.php");

include("views/header-BOTM.php");

if ($_GET['page'] == 'yourClubs'){
    
    include("views/PrivateClubs.php");
    
}else if ($_GET['page'] == 'createClub') {

    include("views/createClub.php");

}else{

    include("views/home-BOTM.php");

}
    
    
include("views/footer-BOTM.php");

  


?>