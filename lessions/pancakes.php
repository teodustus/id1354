<?php include_once'head.php' ?>

  <?php include_once'nav.php' ?>
    <div id="main">
      <h2>American Pancakes</h2>
      <div id="text">
<p>"This is a great recipe that I found in my Grandma's recipe book. Judging from the weathered look of this recipe card, this was a family favorite."</p>
      </div>
      <img src="pancake.jpg" alt="This is a pancake">
      <div id="ingr">
        <h2>Ingredients:</h2>
        <ul>
          <li> 1 1/2 cups all-purpose flour</li>
          <li>3 1/2 teaspoons baking powder</li>
          <li>1 teaspoon salt</li>
          <li>1 tablespoon white sugar</li>
          <li> 1 1/4 cups milk</li>
          <li>1 egg</li>
          <li>3 tablespoons butter, melted</li>
        </ul>
<br>
        <ol>
          <li>In a large bowl, sift together the flour, baking powder, salt and sugar. Make a well in the center and pour in the milk, egg and melted butter; mix until smooth.</li>
          <li>Heat a lightly oiled griddle or frying pan over medium high heat. Pour or scoop the batter onto the griddle, using approximately 1/4 cup for each pancake. Brown on both sides and serve hot</li>
        </ol>
        <br>
        <h2>Comments for this dish</h2>
      </div>
  	<div class="comments">
  	<?php
	
  	if (isset($_SESSION['u_id'])){
  	echo	"<form method='POST' action='".setComments($conn)."'>
  				<input type='hidden' name='uid' value='".$_SESSION['u_uid']."'>
  				<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
  				<textarea name='message'></textarea><br>
  				<button type='submit' name='commentSubmit'>Comment</button>
  			</form>";
  	} else {
		
		
				
  	 echo "<h2> Login to comment</h2>";
  	}
	
  	getComments($conn). "<br>";
  	?>
  
  
    <div class="footer">
      <p>Copyleft&copy; GurkrixloL 'n' teodustus yao</p>
    </div>
 </body>
</html>
