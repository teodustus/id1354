<?php
	//We need to have a session started on ALL pages
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>Tasty Recipes - Start</title>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type ="text/css" href="Style2.css"/>
    <script type="text/javascript" src="main.js"></script>
     <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
  </script>
  </head>
<body>
    <div id="nav">
    <div class="navbar">
      <a href="index.php">Home</a>
      <a href="kal1.php">Calendar</a>
      <div class="dropdown">
        <button class="dropbtn">Recipes
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="meatballs.php">Meatballs</a>
          <a href="pancakes.php">Pancakes</a>
          <a href="#">TBA</a>
        </div>
      </div>
      <div class="loginhandler">
        <?php
          if(isset($_SESSION['loggedIn'])){
            echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						</form>';
          } else {
            echo '<a href="signup.php">Become a member!<a/> <br>
            <a href="login.php">Login!<a/>';
            
          }
          ?>
      </div>


     <!-- <button name="login" style="float:right;margin:16px;">Login</button> -->
      
    </div> <!-- End of navbar -->