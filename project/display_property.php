<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
  	body{
  		background-color: #f4f4f4;
  	}
  </style>
</head>
<body>
<header>
        <div class="container">
            <div id="branding">
              <h1>MGM PROPERTIES</h1>
            </div>
            <nav>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li class="current"><a href="show_property.php">Property</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
              </ul>
            </nav>
          </div>
        </header>	
      <?php
      include 'connect.php';
      session_start();
      $id1=$_SESSION["sess_id"];
      $sql="select * from property where id='$id1'";
      $result=mysqli_query($con,$sql);
      if($result==true)
      {
       ?><section class="show2">
       	<div class="container">
        <form method="post">
        <div class="imgbox2"><img src='<?php echo $_SESSION["sess_img"];?>'/></div>
        <div class="list"><ul> 	
        <li>Description: <?php echo $_SESSION["sess_des"];?></li>
        <li>Owner: <?php echo $_SESSION["sess_nm"];?></li>
        <li>Available For : <?php echo $_SESSION["sess_ava"];?></li>
        <li>Price: <?php echo $_SESSION["sess_vl"];?></li> 
        <li>Contact : <?php echo $_SESSION["sess_cnt"];?></li>
        <li>Address : <?php echo $_SESSION["sess_add"];?></li> 
        <li>City : <?php echo $_SESSION["sess_ct"];?></li> 
        <li>State : <?php echo $_SESSION["sess_st"];?></li>
        <li>Size : <?php echo $_SESSION["sess_sz"];?></li> 
        <li>Area : <?php echo $_SESSION["sess_ar"];?></li> 
        <li>Room : <?php echo $_SESSION["sess_rm"];?></li> 
        <li>Bathroom : <?php echo $_SESSION["sess_bth"];?></li> 
        <li>Garage : <?php echo $_SESSION["sess_grg"];?></li>
        <li>Type : <?php echo $_SESSION["sess_tp"];?></li>
        <li>Detail : <?php echo $_SESSION["sess_det"];?></li>
        <div></ul>  
        </form></div></section>
       <?php
      }
      ?>
    <footer>
        <p>MGM PROPERTIES<br>Copyright &copy; 2020</p>
    </footer>      
</body>
</html>
