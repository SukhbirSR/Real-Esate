<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
     .list1 li{
                  font-size: 20px;
                  list-style: none;
                  border-bottom: solid 1px grey;
                  margin-top: 10px;
                  padding-bottom: 10px;
            }
     .h h1{
      color: navy;
      font-size: 35px;
     }     
     .space{
      margin-top: 20px;
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
        <section>
          <div class="h"><center><h1>Welcome Admin</h1></center></div>
          <div class="container">
            <div class="list1">
            <?php
            include 'connect.php';
            session_start();
            $email=$_SESSION['email'];
            $sql1="select * from admin where email='$email'";
            $result2=mysqli_query($con,$sql1);
            while($row=mysqli_fetch_array($result2))
            {
                  ?>
                  <ul>
                  <li>ID : <?php echo $row['id'];?></li>
                  <li>Name : <?php echo $row['name'];?></li>
                  <li>Username : <?php echo $row['uname'];?></li>
                  <li>Contact : <?php echo $row['contact'];?></li>
                  <li>Password : <?php echo $row['password'];?></li>
                  <li>Email : <?php echo $row['email'];?></li>
                  <li>Gender : <?php echo $row['gender'];?></li>
            </ul>
            <?php
            }
            ?>
       <div class="space">           
      <button class="ba2"><a href="adminsignup.php" class="ba2">Add Admin</a></button>
      <button class="ba2"><a href="usermanagement.php" class="ba2">View User</a></button>
      <button class="ba2"><a href="viewfeedback.php" class="ba2">View Feedback</a></button>
      <button class="ba2"><a href="viewcontact.php" class="ba2">View Contact</a></button></div>
    </div>
      </section> 
     <footer>
        <p>MGM PROPERTIES<br>Copyright &copy; 2020</p>
      </footer>
</body>
</html>