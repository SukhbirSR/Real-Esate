
<!DOCTYPE html>
<html>
<head>
	<title>User Management</title>
</head>
<body>
	<font face="sans-serif">
      <?php
      include 'connect.php';
      $sql="select * from registration";
      $result=mysqli_query($con,$sql);
      ?>
      <table border="5" cellpadding="10" cellspacing="10">
      <tr><th>Id</th>
            <th>Username</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Password</th>
            <th>Address</th>
            <th>Email</th>
            <th>State</th>
            <th>City</th>
            <th>Gender</th>
            <th>Delete</th>
      </tr>
      <?php
      while($row=mysqli_fetch_array($result))
      {
            ?>
            <tr>
                  <td align="center"><?php echo $row['uid'];?></td>
                  <td align="center"><?php echo $row['uname'];?></td>
                  <td align="center"><?php echo $row['name'];?></td>
                  <td align="center"><?php echo $row['contact'];?></td>
                  <td align="center"><?php echo $row['password'];?></td>
                  <td align="center"><?php echo $row['address'];?></td>
                  <td align="center"><?php echo $row['email'];?></td>
                  <td align="center"><?php echo $row['state'];?></td>
                  <td align="center"><?php echo $row['city'];?></td>
                  <td align="center"><?php echo $row['gender'];?></td>
                  <form action="delete.php" method="POST">
                  	<input type="hidden" name="id" value="<?php echo $row['uid']?>">
                  <td><input type="submit" name="delete" value="delete"></td>
                   </form>
                  </tr>
                  <?php 
                  }
                  ?>
      </table>
  </font>
</body>
</html>