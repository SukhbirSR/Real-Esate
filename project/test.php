<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
      <?php
      include 'connect.php';
      session_start();
      $id1=$_SESSION["sess_id"];
      $sql="select * from property where id='$id1'";
      $result=mysqli_query($con,$sql);
      if($result==true)
      {
        echo "<form method='post'>
        <img src='".$_SESSION["sess_img"]."'>
        Price : ".$_SESSION["sess_vl"]."
        Contact : ".$_SESSION["sess_cnt"]."
        </form>";
      }
      ?>
</body>
</html>