<?php
  include_once'login-ajax.php'
?>
<html>
  <head>
  <title>jQuery </title>
  </head>

  <body>
    <form method="post" action="login.php">
    <input type="text" id="email" placeholder="Email"><br>
    <input type="password" id="password" placeholder="Password"><br>
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