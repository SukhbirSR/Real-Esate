<!DOCTYPE html>
<html>
<head>
	<title>View Contact</title>
</head>
<body>
    <?php
    include 'connect.php';
    $sql="select * from contact";
    $result=mysqli_query($con,$sql);
    ?>
    <table border="3" cellpadding="10" cellspacing="10">
      <tr><th>Serial No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
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
                  <td align="center"><?php echo $row['subject'];?></td>
                  <td align="center"><?php echo $row['message'];?></td>
                <?php 
                        $sr++;
                  }
                  ?></tr>
                  </form>
            </tr>
      </table>
</body>
</html>