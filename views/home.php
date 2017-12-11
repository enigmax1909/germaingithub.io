

  <body>

    <nav class="navbar navbar-static-top navbar-dark bg-inverse">
      <a class="navbar-brand" href="http://yourblackbookclub.com/">Your Black Book Club</a>
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/signup">Signup<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron blackBrain">
      <div class="container">
        <center><h1 class="display-3 main-text">Let's Get Cracking</h1></center>
        <center><p class = "main-text"> Sign up or Log In to begin sharing your ideas</p></center>
        <center><a class="btn btn-warning btn-lg " href="/signup" role="button">Sign Up &raquo;</a></center>
      </div>
        
        
        
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
           <div class="col-md-4 background-logIn">
            <center><p class = "login-title"> Log In</p></center>
            <div id = "errors" class="alert alert-info hidden"> </div> 
            <div id = "success" class="alert alert-success hidden"> </div>   
           <form class="form-signin">
        <input type="username"  id="username" class="inside-input" placeholder="Username" data-toggle="popover" data-placement="top" required autofocus>
        <br>  
        <input type="password" id="password" class=" inside-input" placeholder="Password" data-toggle="popover" data-placement="top" maxlength='15' required autofocus>     
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me" > Remember me
          </label>
          <br>    
        <br>    
        </div>
        <button class="btn btn-warning " type="submit" id = "submitButton">Log In</button>
      </form>
        <br>
        <br>
        <br>    
        </div>
        <div class="col-md-4">
          <h2>Book of the Month</h2>
          <p>Each month share your thoughts on a different book by a black author and share your perspectives on this book and its relevance to todays society. Compare your thoughts and views with those of peoples around the world.</p>
        </div>
        <div class="col-md-4">
          <h2>Private Book Clubs</h2>
          <p>Create a private book club with your friends and family around a book of your choice or we can reccomend one. Share your thoughts and ideas privately. Invite other members to join whenever you want!</p>
       </div>
       
      </div>

      <hr>

      <footer>
        <p>&copy; YourBlackBookClub.com</p>
      </footer>
    </div> <!-- /container -->