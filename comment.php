<?php 
include_once('dbh.inc.php');
include_once('header.php');
$id= $_SESSION['loggedIn'];
include_once('comment_handler.php');
?>

<form method='post' action="comment.php" name="commentForm">
  			<!-- <input type='hidden' name='uid' value='$_SESSION[u_uid]'> -->
  				<textarea id="text" name="text"></textarea><br>
  				<input type='button' value="Comment" id="comment"></button>
  			</form>
        <p id="commentstatus"></p>
<script type="text/javascript">

 $(document).ready(function () {
      console.log('page ready');
      $("#comment").on('click', function (){
        // var text = $("#text").val();
        var text = document.forms["commentForm"]["text"].value;
        var sessionID='<?php echo $id;?>';
        

        if(text == "")
        alert("No comment :>");

        else{
  $.ajax(
    {
      url: "comment.php",
      method: 'POST',
      data:{
        comment:1,
        textPHP: text,
        userIdPHP: sessionID
        },
        success: function(response){
          $("#commentstatus").html(response);
        },
        dataType: 'text'
    }
  )
        }

      });
});
</script>