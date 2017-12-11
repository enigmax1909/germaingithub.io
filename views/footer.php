
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>


<script type="text/javascript">
    
    $("#submitButton").click(function(){
      
    $.ajax({
        
        type: "POST",
        url:"actions.php?action=Login", //in the url //action is the get variable for this ajax 
        data:"username=" + $("#username").val() + "&password=" + $("#password").val(),
        success:function(result){
                
            
            if(result != "You have logged in succesfully"){
                
               $('#success').html(result).hide();    
               $('#errors').html(result).show();
                  
                    
                
            }else{
                
                 $('#errors').html(result).hide(); 
                $('#success').html(result).show(); 
                window.location.assign("http://yourblackbookclub.com/BookOfTheMonth/"); 
                
            }
            
            //javascript and jquery to set the Post Variables equal to html values 
            // then in php in actions.php actual validate Post variables 
            
          
        }
           
    })
    
    return false;
});
    
    /*
    $(function () {
    $("#username")
        .popover({ title: 'Username', content: "Enter your username" })
        .blur(function () {
            $(this).popover('hide');
        });
});
    
    $(function () {
    $("#password")
        .popover({ title: 'Password', content: "Password must contain a special character and is longer than 8 characters" })
        .blur(function () {
            $(this).popover('hide');
        });
});

  */
    
    $(function () {
    $("#username")
        .popover({ title: 'Username', content: "Please enter your username" })
        .blur(function () {
            $(this).popover('hide');
        });
});
    
     $(function () {
    $("#password")
        .popover({ title: 'Please enter your password', content: "Password will contain a special character [\'^£$%&*()}{@!#~?><>,|=_+¬-]/ and be at least 8 characters" })
        .blur(function () {
            $(this).popover('hide');
        });
});
  
  
    
</script>    

    </body>
</html>