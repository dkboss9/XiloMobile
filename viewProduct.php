

<?php
  require_once"connect.php";
    $selectsql="select * from tbl_product where c_id=1 order by price asc";
    $result=mysqli_query($conn,$selectsql);

     while($d=mysqli_fetch_array($result)) {?>
    

<div class="col-xs-12 col-md-4" style="margin-top: 15px; " >              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align: center">Samsung</h3>
                    </div>
                    <div class="panel-body" >
                      <center> 
                             <?php
                            echo '<img src="data:images/jpeg;base64,'.base64_encode($d['image']).'"height ="300" width="300">';
                          ?>
                <div class="caption">
                    

                    <h3 style="font-weight:bold; " class="text-primary"><?php echo $d['mobilename']; ?></h3>
                    <p style="font-weight:900; color:#1b6d85;">Rs <?php echo $d['price']; ?></p>
                    <table align="center">
                     <tr><td class="list-group-item text-info text-center"><b>Processor:</b> <?php echo $d["processor"];?></td></tr>
                     <tr><td class="list-group-item text-info text-center"><b>Camera:</b> <?php echo $d["camera"];?></td></tr>
                     <tr><td class="list-group-item text-info text-center"><b>Battery:</b> <?php echo $d["battery"];?></td></tr>

  <tr><td class="list-group-item text-info text-center"><b>RAM:</b> <?php echo $d["ram"];?></td></tr>
  <tr><td class="list-group-item text-info text-center"><b>ROM:</b> <?php echo $d["rom"];?></td></tr>
  <tr><td class="list-group-item text-info text-center"><b>Version:</b> <?php echo $d["version"];?></td></tr>
  <tr><td class="list-group-item text-info text-center"><b>Size: </b> <?php echo $d["size"];?></td></tr>
   <tr> <td class="list-group-item text-info text-center"><b>Color: </b> <?php echo $d["color"];?></td></tr>
    <tr>  <td class="list-group-item text-info text-center"><b>Description:</b> <?php echo $d["description"];?></td></tr>
      <tr>
      <td rowspan="2">
      <center>
                    <?php 
                    
                         
                    if(!isset($_SESSION['username'])){?>
                    <a href="login.php" data-toggle="modal" data-target="login.php"><button class="btn btn-primary btn-block">Order Now</button></a>
                    <?php } else{
                          $id=$d["id"];
                         $_SESSION['mb']=1;
                         
                         ?>
                    <a href="cart-add.php?id=<?php echo $id;?>" name="add" value="add" class="btn btn-primary btn-block" >
                    <?php ?> <button class="btn btn-primary btn-block">Add To Cart</button></a>
                    <?php
                    }
                    ?>
                  </center>
                  </td></tr>
                     
                    </div>
                    </div>
                    
            
                </div>
                </div>        
                
     
   
    </div>
  </div>
</div>
</table>
<br>
<br>
<?php  }
?>
</body>
</html>




