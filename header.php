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
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
      <!-- <div class="dropdown">
        <button class="dropbtn">Recipes
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">  -->
          <a href="meatballs.php">Meatballs</a>
          <a href="pancakes.php">Pancakes</a>
          <a href="#">TBA</a>
      
        <?php
          if(isset($_SESSION['loggedIn'])){
            echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" id="logout" name="submit">Logout</button>
						</form>';
          } else {
            echo '<a href="signup.php">Become a member!<a/> <br>';
            readfile("/var/www/html/login.php");
          }
          ?>
      </div>
      <script type="text/javascript"> 

  $("#logout").click(function() {
            $.ajax({
                url: 'includes/logout.inc.php',
                success: function(data){
                    window.location.href = data;
                }
            });
        });
        </script>

     <!-- <button name="login" style="float:right;margin:16px;">Login</button> -->
      
    </div> <!-- End of navbar -->