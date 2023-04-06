<?php
include ('connect.php');
$eu=$epass1="";
if(isset($_POST['s1']))
{
	session_start();
	$log=$_POST['u1'];
	$pass=$_POST['pass1'];
	$_SESSION['uname']="$log";
	$_SESSION['email']="$log";
	if (empty($_POST['u1']))
	{
		$eu="Username is required";
	}
	if (empty($_POST['pass1']))
	{
		$epass1="Password is required";
	}
    else{
    $sql="select * from registration where email='$log' and password='$pass'";
    $result=mysqli_query($con,$sql);
    if(!mysqli_num_rows($result)==true)
    {
    	echo "Invalid Email or Password";
    }
    else{
          header("Location: profile.php");
    }

    }

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
	<link rel="stylesheet" href="css2/style2.css">
</head>
<body>
	<form action="" method="POST">
		<section class="login-form">
		<h1>Login</h1>
		<div class="txtb">
			<input type="text" name="u1" placeholder="Email" class="txtb"><span class="error"> <?php echo $eu;?></span>
      <input type="Password" name="pass1" placeholder="Password" class="txtb"><span class="error"> <?php echo $epass1;?></span></td></tr>
		</div>
		<input type="submit" name="s1" value="Login" class="logbtn"><br>
		<input type="reset" name="w1" value="Cancel" class="logbtn2">
		</div>
		<div class="bottom-text">
		Don't have a account ?<a href="registration.php"> Sign Up</a>
		<p><a href="adminlogin.php">Admin</a>
		</p>
	</div>
  </section>
</form>
</body>
</html>
