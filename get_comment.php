<?php
$connection = new mysqli('localhost', 'root', 'root', 'tastyApplikationer');

//$data = $connection->query("SELECT * FROM comments");
//$row = mysqli_fetch_assoc($data);
// $output = '';

$sql = "SELECT * FROM comments";

$result = $connection->query($sql);


// echo "<p>hi";

if ($result->num_rows > 0) {
  echo '<p>Comments';
  while($row = $result->fetch_assoc()){
    echo '<div class="panel panel-default">';
    echo '<div class="panel-heading">By <b>'.$row["user_id"].'</b> on <i>'.$row["timestamp"].'</i></div>';
    echo '<div class="panel-body">'.$row["comment_text"].'</div>';
  }
}

// foreach($row as $result)
// {
// //  $output .= '
//  echo '<div class="panel panel-default">';
//  echo '<div class="panel-heading">By <b>'.$row["user_id"].'</b> on <i>'.$row["timestamp"].'</i></div>';
//  echo '<div class="panel-body">'.$row["comment_text"].'</div>';

// }

?>
