<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "tastyApplikationer";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (isset($_POST['comment'])){
  // $connection = new mysqli('localhost', 'root', 'root', 'tastyApplikationer');

   $texts = ($_POST['textPHP']);
  // $userID = $connection->real_escape_string($_POST['userIdPHP']);


  $timestamp = date("Y-m-d H:i:s");
  $sql = "INSERT INTO comments (comment_id, user_id, recipe, comment_text, timestamp) VALUES (NULL, '2', '2', '$texts', NOW())";
  
  if (mysqli_query($conn, $sql)) {
    exit("Commented!");
} else {
//   $message = "wrong answer";
// echo "<script type='text/javascript'>alert('$message');</script>";
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    exit(mysqli_error($conn));
}


mysqli_close($conn);
  
  
  
}
  
  ?>