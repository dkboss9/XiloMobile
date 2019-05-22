<?php
session_start();
$id=$_SESSION['id'];
require_once "connect.php";

if(!empty($_POST['user_comm']))
{

  $comment=$_POST['user_comm'];
  $product=$_POST['p_id'];
  $select=mysqli_query($conn,"select name from tbl_user where id=$id");
  $data=mysqli_fetch_array($select);
  $name=$data['name'];
  $date=date('Y-m-d H:i:s');
  mysqli_query($conn,"insert into tbl_comment(comment,id,p_id,name,date) values ('$comment','$id','$product','$name','$date')");
  
  
  
  

  $select=mysqli_query($conn,"select name,comment,date from tbl_comment where name='$name' and comment='$comment'");
  
  $row=mysqli_fetch_array($select);
        {
      	  $name=$row['name'];
      	  $comment=$row['comment'];
            $time=$row['date'];
           
        ?>
      <div id="hang"> 
 <p class="name"><strong>commented by <?php echo $name;?> on <?php echo date("j-M-Y g:ia", strtotime($time)) ?>:</span></strong> 
      <?php echo $comment;?></p>  
    
  </div>
        <?php
 

}
}

?>