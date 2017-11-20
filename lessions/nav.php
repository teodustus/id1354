<header>
<a href="index.php"> <img src="logo.png" alt="My Logo"></a>
</header>
<div class="nav-login">


</div>
<div id="nav">
<div class="navbar">
	
		
	
  <?php
  if(isset($_SESSION['u_id'])){
    echo '<form action="includes/logout.inc.php" method="POST">
    <button type="submit" name="submit">Logout</button>
    </form>';
  } else {

    echo '<form action="includes/login.inc.php" method="POST">
      <input type="text" name="uid" placeholder="Username/e-mail">
      <input type="password" name="pwd" placeholder="password">
      <button type="submit" name="submit">Login</button>
    </form>
    <a href="signup.php">Sign up</a>';

  }

   ?>

  <a href="index.php">Start</a>
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
</div> <!-- End of navbar -->
</div>
