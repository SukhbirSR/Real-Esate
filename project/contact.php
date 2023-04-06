<?php
$p="";
include 'connect.php';
if (isset($_POST['s1'])) 
{
	if (empty($_POST["n1"]) && empty($_POST["n2"]) && empty($_POST["n3"]) && empty($_POST["n4"])) {
		$p="*Field required";
     }
	else{
	$n1=$_POST['n1'];
	$n2=$_POST['n2'];
	$n3=$_POST['n3'];
	$n4=$_POST['n4'];
	$sql="insert into contact(name,email,subject,message) value('$n1','$n2','$n3','$n4')";
	if (mysqli_query($con,$sql)) 
	{
		echo "We will contact you soon";
	}
}

}
function xyz($x)
{
	$x=trim($x);
	$x=stripcslashes($x);
	$x=htmlspecialchars($x);
	return $x;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>MGM Properties | Contact Us</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
	.req{
		color: blue;
		font-family: sans-serif;
	}
</style>
</head>
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
                <li class="current"><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
              </ul>
            </nav>
          </div>
        </header>
<body>
	<section class="clr">
	<div class="heading"><center><h1>Contact Us</h1></center></div>
	<div class="a1">
	<form method="POST">
		<table align="right">
			<tr><td><h3>ALTERNATIVELY YOU CAN FILL THE<br> FOLLOWING CONTACT FORM:</h3></td></tr>
			<tr><td><span class="req">*<input type="text" name="n1" placeholder="Name" class="tb3"></td></tr>
			<tr><td><span class="req">*</span><input type="email" name="n2" placeholder="Email" class="tb3"></td></tr>
			<tr><td><span class="req">*</span><input type="text" name="n3" placeholder="Subject" class="tb3"></td></tr>
			<tr><td><span class="req">*</span><textarea name="n4" placeholder="Message" class="tb2"></textarea></td></tr>
			<tr><td align="right"><input type="submit" name="s1" value="Submit" class="ba3"></td></tr>
        </table>
     <div class="heading">   
     <h3>Address</h3>
     <p>Sector 17 Chandigarh Punjab</p>  
     <img src="image/map.jpg" width="500">
     <h3>TO SPEAK WITH AN AGENT,<br>PLEASE CALL OR EMAIL US</h3>
     <p>Email:mgmproperties@gamil.com</p>
     <p>Tel: 0183-456-7890</p>
     <span class="req"><?php echo $p;?></span>
    </div>
	</form></div></section>
	<footer>
        <p>MGM PROPERTIES<br>Copyright &copy; 2020</p>
    </footer>
</body>
</html>