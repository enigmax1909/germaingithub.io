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

<br>
    
<div class="container">
  <div class="row">        
        <div >
         <a href="?page=createClub" class = "button">+ Add a Book Club</a>
        </div>
    </div>
    

   <br>
   <br> 
<div class="container">
  <div class="row">        
        <div class="col-sm-8">
         <h4>Book Clubs You Are a Member Of</h4>
         <hr>
        </div>
        
        <div class="col-sm-4">
         <h4>Pending Invitations</h4>
         <hr>
        </div>
    </div>
    
</div>            