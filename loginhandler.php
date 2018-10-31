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