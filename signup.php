<?php
	include_once 'header.php';
?>
	<div id="main">
        <div class="signup-form">
		<h2>Signup</h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="first" placeholder="Firstname" required>
			<input type="text" name="last" placeholder="Lastname" required>
			<input type="text" name="email" placeholder="E-mail" required>
			<input type="text" name="uid" placeholder="Username" required>
			<input type="password" name="pwd" placeholder="Password" required>
			<button type="submit" name="submit">Sign up</button>
        </form>
</div>
	</div>

<?php
	include_once 'footer.php';
?>  