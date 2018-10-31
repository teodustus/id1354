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
          if(isset($_SESSION['u_id'])){
            echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						</form>';
          } else {
						echo '<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/e-mail" required>
							<input type="password" name="pwd" placeholder="password" required	>
              <button type="submit" name="submit">Login</button>
              
            </form>
              <form>
                <button style="float:right;" formaction="signup.php">Sign up!</button>
              </form>';
          }
          ?>
      </div>


     <!-- <button name="login" style="float:right;margin:16px;">Login</button> -->
      
    </div> <!-- End of navbar -->