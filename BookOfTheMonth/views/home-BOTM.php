    <body>

   <?php if($_SESSION['id']){ ?> 
    
    <nav class="navbar navbar-dark bg-inverse wider-nav"> 
        <div class="container-fluid"> 
            <button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar2"> ☰ </button> 
            <a class="navbar-brand" href="#">YourBlackBookClub</a> 
            <div class="collapse navbar-toggleable-sm" id="collapsingNavbar2"> 
                <ul class="nav navbar-nav"> 
                    <li class="nav-item"> <a class="nav-link" href="?page=yourClubs">Your Book Clubs</a> </li> 
                    <li class="nav-item"> <a class="nav-link" href="?page=BOTM"> Book of The Month</a> </li>
                  
                </ul> 
                <ul class="nav navbar-nav pull-xs-right nvr "> 
                    <li class="nav-item "> <a class="nav-link" href="?page=upcoming">Upcoming Authors</a></li> 
                </ul> 
                
                <ul class="nav navbar-nav navbar-right logout">
                    <li><a class="navbar-brand" href = "?function=logout">Logout</a></li>
                 </ul>    
            </div> 
        </div> 
     </nav>
    
    <?php }else{ ?>
      
     <nav class="navbar navbar-dark bg-inverse"> 
        <div class="container-fluid"> 
            <button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar2"> ☰ </button> 
            <a class="navbar-brand" href="#">YourBlackBookClub</a> 
            <div class="collapse navbar-toggleable-sm" id="collapsingNavbar2"> 
                <ul class="nav navbar-nav"> 
                    <li class="nav-item"> <a class="nav-link" href="#"></a> </li> 
                    <li class="nav-item"> <a class="nav-link" href="#">Your BookClub </a> </li> 
                </ul> 
                <ul class="nav navbar-nav pull-xs-right nvr "> 
                     <li class="nav-item "> <a class="nav-link" href="#">BookOfTheMonth</a></li> 
                    <li class="nav-item "> <a class="nav-link" href="#">Upcoming Authors</a></li> 
                </ul> 
            </div> 
        </div> 
     </nav>
        

    
   <?php } ?>  
        
    
     <?php if($_SESSION['username']){ ?>     
        
            <div class="username">
              <p> Welcome,
              <?php echo $_SESSION['username'];?>
              </p>      
            </div>  

      <?php } ?>    
    
<div class="container-fluid">
  <div class="row">
    <div class = "bookTitle">
        <p>The Book of the Month for February</p>
        <p>is</p>
    </div>
      <div class = "bookTitleBot">
        <p>THE AUTOBIOGRAPHY OF MALCOLM X</p>
        <p> BY ALEX HALEY</p>
        <img src="X2.jpg" alt="Smiley face" class="photo" height = "200">  
    </div>
  </div>
</div>
 
<div class="container">
  <div class="row">
      <div class="passage">
      <p> " It seemed that the white boys felt that I being a Negro, just naturally knew more about "romance" or sex than they did that I instinctively knew more about what to do andsay with their own girls. I never did tell anybody that I really went for some of the white girls and some went for me too. They let me know in many ways. But anytime we found oursleves in close conversations or potentially intimate situations, alwasy there would come up between us some kind of a wall. The girls I really wanted to have were a couple of Negro girls whome Wilfred or Philbert had introduced me to in Lansing. But with these girls I somehow lacked the nerve"</p>
      <p>~ Autobiography of Malcolm X (Haley, Chapter 2)</p>      
      </div>
    </div>
</div> 
    
<div class="container">
  <div class="row">        
        <div class="col-sm-8">
         <p> In the above passage Haley describes Malcolm's experience in dating while attending a majority white high school in Lansing. Based on the above passage have you had any experiences with interracial dating and how does your experience compare with that of a young Malcolm X? </p>
        </div>
        <div class="col-sm-4">
            <h2> What do you think?</h2>
            <?php displayPostBox(); ?>  
        </div> 
    </div>
</div>    
        
<div class="container">
  <div class="row">        
        <div>
        <h4>Recent Posts</h4>      
        <?php displayPosts(); ?>         
        </div> 
    </div>
</div>            
        
        