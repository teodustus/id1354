<?php
$host="localhost";
$username="root";
$password="root";
$databasename="tastyApplikationer";

$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
  $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];
  $insert=mysql_query("insert into commentfield values('','$user_textid','$',CURRENT_TIMESTAMP)");
  
  $id=mysql_insert_id($insert);

  $select=mysql_query("select user_id,text,timestamp from commentfield where user_id='$name' and text='$comment'");
  
  if($row=mysql_fetch_array($select))
  {
	  $name=$row['user_id'];
	  $comment=$row['text'];
      $time=$row['timestamp'];
  ?>
      <div class="comment_div"> 
	    <p class="name"><?php echo $name;?></p>
        <p class="comment"><?php echo $text;?></p>	
	    <p class="time"><?php echo $timestamp;?></p>
	  </div>
  <?php
  }
exit;
}

?>