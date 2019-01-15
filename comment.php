<?php 
include_once('dbh.inc.php');
$id= $_SESSION['loggedIn'];
include_once('comment_handler.php');
?>



<form method='post' action="comment.php" name="commentForm">
  			<!-- <input type='hidden' name='uid' value='$_SESSION[u_uid]'> -->
  				<textarea id="text" name="text"></textarea><br>
  				<input type='button' value="Comment" id="comment"></button>
  			</form>
        <p id="commentstatus"></p>
        <div id="display_comment"></div>
<script type="text/javascript">

 $(document).ready(function () {
      console.log('page ready');
      
      var x = location;
      if(x == "http://localhost/pancakes.php"){
        page_var = 2;
      }else{
        page_var = 1;
      }
      loadComment(page_var);
      
      $("#comment").on('click', function (){
        // var text = $("#text").val();
        var text = document.forms["commentForm"]["text"].value;
        var sessionID='<?php echo $id;?>';

        if(text == "")
        alert("No comment :>");
        
        else{
  $.ajax(
    {
      url: "comment_handler.php",
      method: 'POST',
      data:{
        comment:1,
        textPHP: text,
        userIdPHP: sessionID,
        page: page_var
        },
        success: function(response){
          $("#commentstatus").html(response);
        },
        dataType: 'text'
    }
  )
  $(document.forms["commentForm"]["text"]).val('');
  loadComment(page_var);
        }

      });
});

function delete_(pid){
  $.ajax({ 

    type: "POST",
  //  url: "include/post.delete.php",
   data: "pid="+pid,
   success: function(){
   $("#comment-"+pid).remove();
   }

  });
}
  //  for(i=0; i<data.length; i++) {
  //   $('#display_comment').append(data[i]);                      
  //       }
// $('#display_comment').append(data);
//  $('#display_comment').append(data);
          //  $.each(data,function(i,o){
          //   $('#display_comment').append(o.recipe);
          // });
function loadComment(page_var){
  var sessionID='<?php echo $id;?>';
$.ajax({ 
  url:"get_comment.php",
   method:"POST",
   data:{
        page: page_var
        },
        dataType: 'json',
        success: function(response){          
       $.each(response, function(i, j){
        $('#display_comment').append("<p>" + j.user_id + "</p>");
        $('#display_comment').append("<p>" + j.timestamp + "</p>");
        $('#display_comment').append("<p>" + j.comment_text + "</p><br><br>");
        // $('#display_comment').append("<p>" + j.user_id + "</p><br>");
        // $('#display_comment').append("<p>" + j.user_id + "</p><br>");
        
       });

        
        }
  }
 )}


// var isActive = true;

// $().ready(function () {
//     //EITHER USE A GLOBAL VAR OR PLACE VAR IN HIDDEN FIELD
//     //IF FOR WHATEVER REASON YOU WANT TO STOP POLLING
//     pollServer();
// });

// function pollServer()
// {
//     if (isActive)
//     {
//         window.setTimeout(function () {
//             $.ajax({
//               url:"get_comment.php",
//               method:"POST",
//               success:function(respons){
//             $('#display_comment').html(respons);
//             pollServer();
//                 },
//                 error: function () {
//                     //ERROR HANDLING
//                     pollServer();
//                 }});
//         }, 2500);
//     }
// }

</script>

<div id="all_comments">
	<div class="comment_div"> 
	  <p class="name"><?php echo $name;?></p>
      <p class="comment"><?php echo $comment;?></p>	
	  <p class="time"><?php echo $time;?></p>
	</div>
    </div>