
<script>
        
$(document).ready(function(){
 
    $("#lame").click(function(){
    
             $.ajax({

                type: "POST",
                url:"actions-BOTM.php?action=weighIn", //in the url //action is the get variable for this ajax 
                data:"content=" + $("#content").val(),
                success:function(result){

                      location.reload();

                    //javascript and jquery to set the Post Variables equal to html values 
                    // then in php in actions.php actual validate Post variables 

                   
                }

            })

            return false;
    
 })
 
 
});
        
        

//$("input").width(295);   
    
$(".target").upload({
    action: "upload.php"
});    
 
       

</script>
<footer>
        <p>&copy; Company 2017</p>
</footer>

  </body>
</html>