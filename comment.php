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
        <div id="delete_btn"></div>
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
        document.location.reload(true); 
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
  
        }

      });


     
    
});

function delete_comment(cid){
        console.log("delete " + cid);

        $.ajax({
          url: "delete_comment.php",
          method: 'POST',
          data: {
            delete: 1,
            cidPHP: cid
          },
          success: function(response){
           document.location.reload(true);
            console.log("delete " + cid);
          }
        })
       
}

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
  $('#display_comment').empty();
$.ajax({ 
  url:"get_comment.php",
   method:"POST",
   data:{
        page: page_var
        },
        dataType: 'json',
        success: function(response){    
              
       $.each(response, function(i, j){
         
          if(j.user_id == sessionID){
            
        // $('#display_comment').append("<p>" + sessionID + "</p>");
        $('#display_comment').append("<br><p>" + "User ID: " + j.user_id + "</p>");
        $('#display_comment').append("<p>" + "Time: " + j.timestamp + "</p>");
        $('#display_comment').append("<p>" + "Comment: " + j.comment_text + "</p>");
        // $('#display_comment').append("<form class='delete-form' name='delete-form' method='POST' id='delete_btn'><input type='hidden' name='cid' value='" + j.comment_id + "'/><button type='submit'>Delete</button></form><br><br>");
        $('#display_comment').append("<button onclick='delete_comment(" + j.comment_id + ")' id='" + j.comment_id + "' >" + "Delete comment: "+ "</button>");
        // $('#display_comment').append("<p>" + j.user_id + "</p><br>");
        // $('#display_comment').append("<p>" + j.user_id + "</p><br>");
          }else{
        $('#display_comment').append("<br><p>" + "User ID: " + j.user_id + "</p>");
        $('#display_comment').append("<p>" + "Time: " + j.timestamp + "</p>");
        $('#display_comment').append("<p>" + "Comment: " + j.comment_text + "</p>");
          }
       
      
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