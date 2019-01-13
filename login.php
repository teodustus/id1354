<?php
    session_start();

    if(isset($_SESSION['loggedIn'])){
      header('Location: index.php');
      exit();
    }
  if (isset($_POST['login'])){
    $connection = new mysqli('localhost', 'root', 'root', 'loginTutorial');
    
    
    $email = $connection->real_escape_string($_POST['emailPHP']);
    $password = $connection->real_escape_string($_POST['passwordPHP']);

    $data = $connection->query("SELECT id FROM users WHERE email='$email' AND password='$password'");
    $row = mysqli_fetch_assoc($data);
    $hashedPwdCheck = password_verify($password, $row['password']);
    if($hashedPwdCheck == false){
      header("Location: ../index.php?login=error");
    }
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
<html>
  <head>
  <title>jQuery </title>
  </head>

  <body>
    <form method="post" action="login.php">
    <input type="text" id="email" placeholder="Email"><br>
    <input type="passoword" id="password" placeholder="Password"><br>
    <input type="button" value="Log in" id="login">
    </form>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
  </script>

  <p id="response"></p>

  <script> type="text/javascript"
    $(document).ready(function () {
      console.log('page ready');
      $("#login").on('click', function() {
        var email = $("#email").val();
        var password = $("#password").val();

        if(email == "" || password == "")
          alert('Check inputs!');

          else{
   $.ajax(
         {
           url: "login.php",
           method: 'POST', 
           data: {
             login:1,
             emailPHP: email,
             passwordPHP: password
           },
           //Response from function
           success: function(response){
             $("#response").html(response);

             if (response.indexOf('success') >= 0)
             window.location = 'index.php';
           },
           dataType: 'text'
         }
        )
          }
    
      });
    });
  </script>

  </body>
</html>