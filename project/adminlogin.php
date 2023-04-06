<?php
include ('connect.php');
$eu=$epass1="";
if(isset($_POST['s1']))
{
	session_start();
	$log1=$_POST['u1'];
	$pass=$_POST['pass1'];
	$_SESSION['email']="$log1";
	if (empty($_POST['u1']))
	{
		$eu="Username is required";
	}
	if (empty($_POST['pass1']))
	{
		$epass1="Password is required";
	}
    else{
    $sql="select * from admin where email='$log1' and password='$pass'";
    $result=mysqli_query($con,$sql);
    if(!mysqli_num_rows($result)==true)
    {
    	echo "Invalid Username or Password";
    }
    else{
          header("location:adminpanel.php");
    }

    }

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
	<link rel="stylesheet" href="css2/style2.css"
</head>
<body>
	<form action="" method="POST">
		<section class="login-form">
		<h1>Admin Login</h1>
		<div class="txtb">
			<input type="text" name="u1" placeholder="Email" class="txtb"><span class="error"> <?php echo $eu;?></span>
            <input type="Password" name="pass1" placeholder="Password" class="txtb"><span class="error"> <?php echo $epass1;?></span></td></tr>
		</div>
		<input type="submit" name="s1" value="Login" class="logbtn">
		<input type="reset" name="w1" value="Cancel" class="logbtn2">
		</div>
  </section>


	</form>
</body>
</html>
