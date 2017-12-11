
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous">

</script>

<script type="text/javascript">
    
    $("#signUpButton").click(function(){
      
    $.ajax({
        
        type: "POST",
        url:"actions-signup.php?action=Signup", //in the url //action is the get variable for this ajax 
        data:"email=" + $("#inputEmail").val() + "&username=" + $("#inputUsername").val() + "&password=" + $("#inputPassword").val() + "&confirmPassword=" + $("#inputConfirmPassword").val(),
        success:function(result){
                
              // alert(result);
            
            //javascript and jquery to set the Post Variables equal to html values 
            // then in php in actions.php actual validate Post variables 
            
            if(result != "You have signed up succesfully"){
                
               $('#display-success').html(result).hide();    
               $('#display-errors').html(result).show();    
                    
                
            }else{
                
                 $('#display-errors').html(result).hide(); 
                $('#display-success').html(result).show();  window.location.assign("http://yourblackbookclub.com/BookOfTheMonth/"); 
            }
        }
           
    })
    
    return false;
});
   
    
     $(function () {
    $("#inputPassword")
        .popover({ title: 'Please enter your password', content: "Password will contain a special character [\'^£$%&*()}{@!#~?><>,|=_+¬-]/ and be at least 8 characters" })
        .blur(function () {
            $(this).popover('hide');
        });
});
  
    
    
</script>    
    



    </body>
</html>