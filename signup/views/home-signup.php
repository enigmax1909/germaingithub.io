

   <nav class="navbar navbar-static-top navbar-dark bg-inverse">
      <a class="navbar-brand" href="http://yourblackbookclub.com/">Your Black Book Club</a>
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/signup">Signup<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </nav>

    <div class="container">
        
        <br>
        <br>
        <br>
        
        <center> <h2 class="form-signin-heading header-color">Please sign up</h2></center>
        <div id = "display-errors" class="alert alert-info hidden"> </div> 
        <div id = "display-success" class="alert alert-success hidden"> </div> 
        
      <form class="form-signin">
        <input type="email"  id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <br>  
        <input type="username" id="inputUsername" class="form-control" placeholder="Username"  maxlength='15' required autofocus>  
        <br>    
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" data-toggle="popover" data-placement="top"  required autofocus>
        <br>    
        <input type="password" id="inputConfirmPassword" class="form-control" placeholder=" Confirm Password" required autofocus>  
        
        <?php print_r($_SESSION); ?>     
        <button class="btn btn-lg btn-primary btn-block" type="submit" id = "signUpButton">Sign in</button>
          
      </form>
        
    </div> <!-- /container -->
