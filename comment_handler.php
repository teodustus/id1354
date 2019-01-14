<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "tastyApplikationer";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (isset($_POST['comment'])){
  $user_id = $_POST['userIdPHP'];
  // $connection = new mysqli('localhost', 'root', 'root', 'tastyApplikationer');
  // $session_uid = $_SESSION['loggedIn'];
  $texts = ($_POST['textPHP']);
  // $userID = $connection->real_escape_string($_POST['userIdPHP']);
  $page = ($_POST['page']);
  

  $timestamp = date("Y-m-d H:i:s");
  $sql = "INSERT INTO comments (comment_id, user_id, recipe, comment_text, timestamp) VALUES (NULL, '$user_id', $page, '$texts', NOW())";
  
  if (mysqli_query($conn, $sql)) {
    exit("");
} else {
//   $message = "wrong answer";
// echo "<script type='text/javascript'>alert('$message');</script>";
    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    exit(mysqli_error($conn));
}


mysqli_close($conn);
  
}
?>