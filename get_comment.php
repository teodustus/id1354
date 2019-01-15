<?php
$connection = new mysqli('localhost', 'root', 'root', 'tastyApplikationer');
$page_num = ($_POST['page']);

//$row = mysqli_fetch_assoc($data);
// $output = '';


$sql = "SELECT * FROM comments where recipe='$page_num'";


$result = $connection->query($sql);

// $row = $result->fetch_assoc();
// $recipe_test = $row["recipe"];

$rows = array();
while(($row = $result->fetch_assoc()) ){
  $rows[] = $row;
  
}
echo json_encode($rows);


// if ($result->num_rows > 0) {
//   echo '<p>Comments';
//   while(($row = $result->fetch_assoc()) ){
//     echo '<div class="panel panel-default">';
//     echo '<div class="panel-heading">By <b>'.$row["user_id"].'</b> on <i>'.$row["timestamp"].'</i></div>';
//     echo '<div class="panel-body">'.$row["comment_text"].'</div>';
//     //+echo '<button type="delete" onclick="delete_("anyID"); id="delete">Delete</button>';
//     echo '<div onclick="delete_('.$row["user_id"].');"><button>Delete comment</div>';
//   }
// }

// foreach($row as $result)
// {
// //  $output .= '
//  echo '<div class="panel panel-default">';
//  echo '<div class="panel-heading">By <b>'.$row["user_id"].'</b> on <i>'.$row["timestamp"].'</i></div>';
//  echo '<div class="panel-body">'.$row["comment_text"].'</div>';

// }

?>
