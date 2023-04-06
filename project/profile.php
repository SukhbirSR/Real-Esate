<!DOCTYPE html>
<html>
<head>
      <title>MGM PROPERTIES | User Profile</title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <style type="text/css">
            .list1 ul{
              margin-top: 15px;
              margin-bottom: 15px;
            }       
            .list1 li{
                  font-size: 20px;
                  list-style: none;
                  border-bottom: solid 1px grey;
                  margin-top: 10px;
                  margin-bottom: 10px;
                  padding-bottom: 10px;
            }
            .but p{
              margin-top: 30px;
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
                <li><a href="show_property.php">Property</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="current"><a href="login.php">Login</a></li>
              </ul>
            </nav>
          </div>
        </header>
        <section class="but">
        <div class="container">
            <div class="list1">
            <?php
            include 'connect.php';
            session_start();
            $uname=$_SESSION['uname'];
            $email=$_SESSION['email'];
            $sql1="select * from registration where uname='$uname' or email='$email'";
            $result2=mysqli_query($con,$sql1);
            while($row=mysqli_fetch_array($result2))
            {
                  ?>
                  <input type="hidden" name="name" value="<?php echo $row['name']?>">
                  <input type="hidden" name="contact" value="<?php echo $row['contact']?>">
                  <ul>
                  <li>ID : <?php echo $row['uid'];?></li>
                  <li>Name : <?php echo $row['name'];?></li>
                  <li>Username : <?php echo $row['uname'];?></li>
                  <li>Contact : <?php echo $row['contact'];?></li>
                  <li>Address : <?php echo $row['address'];?></li>
                  <li>Email : <?php echo $row['email'];?></li>
                  <li>State : <?php echo $row['state'];?></li>
                  <li>City : <?php echo $row['city'];?></li>
                  <li>Gender : <?php echo $row['gender'];?></li>
            </ul>
            <form action="updateuser.php" method="POST">
              <input type="hidden" name="uid" value="<?php echo $row['uid']?>">
              <input type="submit" name="edit" value="Edit">
            </form>
            <?php
              $_SESSION["name"]=$row['name'];
              $_SESSION["contact"]=$row['contact'];
            }
            ?>
      </div>

      <button class="ba2"><a href="property.php" class="ba2">Add Property</a></button>
        <button class="ba2"><a href="viewproperty.php" class="ba2">View Property</a></button></p>
      </div></section>
      <footer>
        <p>MGM PROPERTIES<br>Copyright &copy; 2020</p>
      </footer>
</body>
</html>