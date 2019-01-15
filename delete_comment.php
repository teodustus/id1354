<?php 

if(isset($_POST['delete'])){

  $cid = $_POST['cidPHP'];

  $connection = new mysqli('localhost', 'root', 'root', 'tastyApplikationer');

  $data = $connection->query("DELETE FROM comments WHERE comment_id='$cid'");
  

  echo "Deleted";
}


?>