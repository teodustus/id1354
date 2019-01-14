<?php
    session_start();

    if(isset($_SESSION['loggedIn'])){
      header('Location: index.php');
      exit();
    }
  if (isset($_POST['login'])){
    $connection = new mysqli('localhost', 'root', 'root', 'tastyApplikationer');
    
    
    $email = $connection->real_escape_string($_POST['emailPHP']);
    $password = $connection->real_escape_string($_POST['passwordPHP']);

    $data = $connection->query("SELECT id FROM users WHERE email='$email' AND password='$password'");
    $row = mysqli_fetch_assoc($data);
    // $hashedPwdCheck = password_verify($password, $row['password']);
    // if($hashedPwdCheck == false){
    //   header("Location: ../index.php?login=error");
    // }
    if($data->num_rows > 0){
      $_SESSION['loggedIn'] = $row['id'];
      $_SESSION['email'] = $row['email'];
      exit($_SESSION['loggedIn']);
    } else
      exit('Failed, check your inputs');

    exit($email . " = " . $password);
  }
  include_once'header.php'
?>