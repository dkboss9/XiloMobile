<?php
include("check_session.php");
include("connection.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')


{




$a_id=$_GET['a_id'];

/*this is delet quer*/
mysqli_query($conn,"delete from tbl_message where m_id=$a_id");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<style>
#TAB1 { border:solid 7px;
    border-color:#B22222 #FEB9B9 #FEB9B9 #B22222;
    height: 200px;
    width: 80%;
    background-color: #c4e17f ;}

  /* OUTSET STYLE */
  #TAB2 { border:solid 7px;
    border-top-color:#FEB9B9;
    border-right-color:#B22222;
    border-bottom-color:#B22222;
    border-left-color:#FEB9B9;
    height: 200px;
    width: 80%;
    background-color: #c4e17f ;
     }
    
  #TAB1 td, #TAB2 td { border:inset 1px #000; }
  </style>
<body>
<?php include("include/header.php"); ?>

<div class="container-fluid">

<?php include("include/side_bar.php"); ?>
<?php
        require_once "connection.php";
        $idmm=$_GET['idmm'];
        $sql="select * from tbl_message where m_id=$idmm";
        $result=mysqli_query($conn,$sql);
        while($d=mysqli_fetch_array($result))
            { ?>
<div class="col-sm-9" style="margin-left:10px"> 
<div class="panel-heading" style="background-color:#c4e17f">
    <h1><h3 class="modal-title text-center text-capitalize text-primary" id="exampleModalLabel " style="font-weight: bold;">Message From <?php echo $d['name'];?></h3></div><br>
        <table id="TAB1" border="2px" >
        <h3 font-size="18px" text-align="center" style="font-weight: bold;"><tr><td>&nbsp&nbsp&nbsp<b>Email:</b></td><td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $d['email'];?></td></tr></h3>
        <h3 font-size="18px" style="font-weight: bold;"><tr><td>&nbsp&nbsp&nbsp<b>Subject:</b></td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $d['subject'];?></td></tr></h3>
        <h3 font-size="18px" style="font-weight: bold;"><tr><td>&nbsp&nbsp&nbsp<b>Date:</b></td><td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $d['date'];?></td></tr></h3>
        </table>
        <br>
        <table id="TAB2" border="2px">
        <h3 font-size:"15px">Message
        </h3>
        <tr><td>&nbsp&nbsp&nbsp<?php echo $d['message'];?></td></tr>
        <?php } ?>
        <br>
        </table>
            </div></div>
            <?php include("include/js.php"); ?>
            </body>
            </html>

