<?php
include 'connect.php';
$name="";
$contact="";
$address="";
$email="";
$state="";
$city="";
$row="";
if (isset($_REQUEST["edit"])) {
	 $uid=$_POST['uid'];
	 $sql="select * from registration where uid='$uid'";
	 $query=mysqli_query($con,$sql);
	 $row=mysqli_fetch_array($query);

if (isset($_POST['modify'])) {
	$name=$_POST['n1'];
	$contact=$_POST['c1'];
	$address=$_POST['a1'];
    $email=$_POST['e1'];
    $state=$_POST['st1'];
    $city=$_POST['ct1'];
    $sql="update registration set name='$name',contact='$contact',email='$email',
    state='$state',city='$city' where uid='$uid'";
    $result=mysqli_query($con,$sql);
    if ($result==true) {
    	echo "Record Updated";
    }
    else{
    	echo "Not Updated";
    }
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>MGM Properties | Update</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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

        <form method="POST">
        	<input type="hidden" name="uid" value="<?php echo $row['uid']?>">
		<table cellspacing="5" cellpadding="5">
			<tr><td>Name</td><td><input type="text" name="n1" value="<?php echo $row["name"];?>" class="ta1"></td></tr>
			
            <tr><td>Contact</td><td><input type="text" name="c1"value="<?php echo $row["contact"];?>" class="ta1"></td></tr>
			
			<tr><td>Address</td><td><textarea name="a1" value="<?php echo $row["address"];?>" class="ta2"></textarea></td></tr>
			
			<tr><td>Email</td><td><input type="text" name="e1" value="<?php echo $row["email"];?>" class="ta1"></td></tr>
			
			<tr><td>State</td><td><input type="text" name="st1" value="<?php echo $row["state"];?>" class="ta1"></td></tr>
			
			<tr><td>City</td><td><input type="text" name="ct1" value="<?php echo $row["city"];?>" class="ta1"></td></tr>
			
			
			<tr><td><input type="Submit" name="modify" value="Modify" class="ba3"> <input type="reset" name="Cancel" value="Cancel" class="ba3"></td></tr>
		</table>
	</form>       			
      <footer>
        <p>MGM PROPERTIES<br>Copyright &copy; 2020</p>
      </footer>        
</body>
</html>