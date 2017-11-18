<?php include_once'head.php' ?>
<?php include_once'nav.php' ?>

<form class="signup-form" nav="a" action="includes/signup.inc.php" method="POST">
  <input type="text" name="first" placeholder="Firstname">
  <input type="text" name="last" placeholder="Lastname">
  <input type="text" name="email" placeholder="Email">
  <input type="text" name="uid" placeholder="Username">
  <input type="password" name="pwd" placeholder="Password">
  <button type="submit" name="submit">Sign up</button>
</form>
