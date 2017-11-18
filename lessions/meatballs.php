<?php include_once'head.php' ?>

<?php include_once'nav.php' ?>
<?php include 'comments.inc.php';
		  include 'dbh.inc.php';
 ?>

    <div id="main">
      <h2>Swedish Meatballs</h2>
      <div id="text">
      <p>Nothing beats homemade meatballs smothered in a creamy gravy sauce, and yes, they taste so much better than the IKEA version!</p>
      </div>

      <div id="recipepic">
        <img src="bollar.jpg" alt="meat balls balls balls">
      </div>

      <div id="ingr">
        <h2>Ingredients:</h2>
        <ul>
         <li> 2 tablespoons olive oil</li>
         <li>1 onion, diced</li>
         <li>1 pound ground beef</li>
         <li>1 pound ground pork</li>
         <li>1/2 cup Panko</li>
         <li>2 large egg yolks</li>
         <li>1/4 teaspoon ground allspice</li>
         <li>1/4 teaspoon ground nutmeg</li>
         <li>Kosher salt and freshly ground black pepper, to taste</li>
        </ul>
<br>
          <ol>
            <li>In a medium sized bowl combine ground beef, panko, parsley, allspice,
             nutmeg, onion, garlic powder, pepper, salt and egg. Mix until combined.</li>
            <li>Roll into 12 large meatballs or 20 small meatballs. In a large skillet heat olive oil
            and 1 Tablespoon butter. Add the meatballs and cook turning continuously until brown on each side and cooked throughout. Transfer to a plate and cover with foil.</li>
            <li>Add 4 Tablespoons butter and flour to skillet and whisk until it turns brown.
             Slowly stir in beef broth and heavy cream. Add worchestershire sauce and dijon mustard and bring to a simmer until sauce starts to thicken. Salt and pepper to taste. </li>
             <li>Add the meatballs back to the skillet and simmer for another 1-2 minutes. Serve with mashed potatoes, lingonberries and pickled cucumber-slices.</li>
          </ol>
        </div>
            <h2>Comments for this dish</h2>
    </div>
	<div class="comments">
	<?php
echo	"<form method='POST' action='".setComments($conn)."'>
		<input type='hidden' name='uid' value='Anonymous'>
		<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
		<textarea name='message'></textarea><br>
		<button type='submit' name='commentSubmit'>Comment</button>
	</form>";
	getComments($conn). "<br>";
	?>



    <div class="footer">
      <p>Copyleft&copy; GurkrixloL 'n' teodustus yao</p>
    </div>
 </body>
</html>
