<?php include_once'header.php' ?>

      <?php include_once'nav.php' ?>
    <div id="main">
		<?php
		
		if(isset($_SESSION['u_id'])){
			echo "You Are Logged In!";
		}
		?>
      <h1>Welcome to Tasty Recipe</h1>
      <h2>Your sceduled dinner</h2>
    </div> <!-- End of main-->
    <div class="footer">
      <p>Copyleft&copy; GurkrixloL 'n' teodustus yao</p>
    </div>
 </body>
</html>
