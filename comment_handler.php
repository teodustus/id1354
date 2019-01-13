<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "loginTutorial";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (isset($_POST['comment'])){
  // $connection = new mysqli('localhost', 'root', 'root', 'loginTutorial');

   $text = $conn->real_escape_string($_POST['textPHP']);
  // $userID = $connection->real_escape_string($_POST['userIdPHP']);

  // $data = "INSERT INTO `comments` (`comment_id`, `user_id`, `recipe`, `text`, `timestamp`) VALUES (NULL, '2', '2', 'hej', NULL)";
  $timestamp = date("Y-m-d H:i:s");
  $sql = "INSERT INTO comments (comment_id, user_id, recipe, text, timestamp) VALUES (NULL, '2', '2', $text, NOW())";
  
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
  $message = "wrong answer";
echo "<script type='text/javascript'>alert('$message');</script>";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
  
  
  
}
  
  ?>