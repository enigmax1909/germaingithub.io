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


function displayPosts(){
    
    function time_since($since) {
    $chunks = array(
        array(60 * 60 * 24 * 365 , 'year'),
        array(60 * 60 * 24 * 30 , 'month'),
        array(60 * 60 * 24 * 7, 'week'),
        array(60 * 60 * 24 , 'day'),
        array(60 * 60 , 'hour'),
        array(60 , 'min'),
        array(1 , 'sec')
    );

    for ($i = 0, $j = count($chunks); $i < $j; $i++) {
        $seconds = $chunks[$i][0];
        $name = $chunks[$i][1];
        if (($count = floor($since / $seconds)) != 0) {
            break;
        }
    }

    $print = ($count == 1) ? '1 '.$name : "$count {$name}s";
    return $print;
}
    global $link;
    
    $whereClause = "";
    
    $query = "SELECT * FROM posts ".$whereClause." ORDER BY `datetime` DESC LIMIT 10";
        
    $result = mysqli_query($link, $query);    
    
  
    
    if(mysqli_num_rows($result) == 0){
        
        echo "Sorry nobody has weighed in on this question yet";
    }else{
        
        while($row = mysqli_fetch_assoc($result)){
            
            // $row is the entire resulting row of the result so it includes every column of the result thats why you need a loop to loop through every row in the entire database and $row['post'] or $row['userid'] gets that single column from that single row and you continue to loop through the entire database basically saying while row is equal to the next row in the database 
            //print_r($row) will print every array element in the row 
            
            $userQuery = "SELECT * FROM users WHERE id = ".mysqli_real_escape_string($link,$row['userid'])." LIMIT 1";
            $userQueryResult = mysqli_query($link,$userQuery);
            $user = mysqli_fetch_assoc($userQueryResult);
            
            // in this case $user is equivalent to $row in the previous query
            
            // YOU MUST PUT QUOTES AROUND THE HTML
            //NO QUOTES AROUND PHP
            // SINGLE QUOTES CAN BE USED SO COMPUTER DOESNT THINK YOUR ENDING THE ACTUAL DOUBLE QUOTES
            //MUST END QUOTES AND USE DOTS TO APPEND EACH TIME GO FROM PHP TO HTML AND VICE VERSA
            
             echo "<div class = 'response'><p>".$user['username']." <span class = 'time''>".time_since(time() - strtotime($row['datetime']))."</span>:</p>";
            
            
            echo "<p>".$row['post']."</p>";
            
            echo "<p>Follow</p></div>";
    
        }
    }
}

function displaySearch(){
    echo'<form class="form-inline">
  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Search">
  <button class = "form control">Submit</button>
</form>';
 
    
}

function displayPostBox(){
    
   if($_SESSION['id'] > 0){
       
       echo '<div class = "form"> 
       <div class="form-group">
    <textarea class="form-control" id="content"></textarea>
       </div>
    <button id = "lame">Submit</button>
  </div>';
   }
}

?>