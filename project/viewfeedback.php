<!DOCTYPE html>
<html>
<head>
	<title>View Feedback</title>
</head>
<body>
    <?php
    include 'connect.php';
    $sql="select * from feedback";
    $result=mysqli_query($con,$sql);
    ?>
    <table border="3" cellpadding="10" cellspacing="10">
      <tr><th>Serial No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Description</th>
      </tr>
      <?php
      $sr=1;
      while($row=mysqli_fetch_array($result))
      {
            ?>
            <tr>
            <form action="" method="POST" role="form">
                  <td align="center"><?php echo $sr;?></td>
                  <td align="center"><?php echo $row['name'];?></td>
                  <td align="center"><?php echo $row['email'];?></td>
                  <td align="center"><?php echo $row['des'];?></td>
                <?php 
                        $sr++;
                  }
                  ?></tr>
                  </form>
            </tr>
      </table>
</body>
</html>