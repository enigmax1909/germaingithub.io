<? 

include("functions-BOTM.php");


if($_GET['action'] == 'weighIn'){
    
   
    
    if(!$_POST['content']){
        
        echo "Please enter some content before posting";
    }else if(strlen($_POST['content']) > 250){
        
        echo "You have exceeded the maximum amount for one sentiment";
    }else{
        
       $query = "INSERT INTO posts (`post`,`userid`,`datetime`) VALUES ('".mysqli_real_escape_string($link,$_POST['content'])."' , '".mysqli_real_escape_string($link,$_SESSION['id'])."', NOW())";
        
        if(mysqli_query($link, $query)){
            
          echo "1";  
            
        }
        
        
                          
        
    }
    
    
    
    
}

?>