<?php
include 'connect.php';
$en1=$eu1=$ep1=$ec1=$ere1="";
$perror=$eun2="";
$eml="";
if (isset($_POST['s1'])) {
	if (empty($_POST["n1"])) {
		$en1="Name is required";
	}
	if (empty($_POST["u1"])) {
		$eu1="Username is required";
	}
	if (empty($_POST["p1"])) {
		$ep1="Password is required";
	}
	if (empty($_POST["e1"])) {
		$ere1="Email is required";
	}
	else 
	{
        $eml=xyz($_POST["e1"]);
       if(!filter_var($eml, FILTER_VALIDATE_EMAIL))
        {
        	$ee1="Invalid email format";
        }
    }
	if (empty($_POST["c1"])) {
		$ec1="Contact is required";
	}

    else{
        $n=$_POST['n1'];
        $un=$_POST['u1'];
        $p1=$_POST['p1'];
        $p2=$_POST['p2'];
        $c=$_POST['c1'];
        $e=$_POST['e1'];
        $g=$_POST['gender'];
        if ($p1!=$p2) {
        	$perror="Password does not match";
        } else {
        	$sql1="select * from admin where email='$e'";
        	$sql1="select * from registration where email ='$e'";
		    $y=mysqli_query($con,$sql1);
            $z=mysqli_num_rows($y);
            if($z==true)
        {
        	$eun2="Email already exists";
        } 
        else
        {
		$sql="insert into admin(name,uname,password,contact,email,gender) value('$n','$un','$p1','$c','$e','$g')";
		
		if(mysqli_query($con,$sql))
		{
			echo "Admin Added","<br>";
		}
		else
		{
			echo "Record not saved","<br>";
		}


	    }
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
	<title>Admin Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		.req{
			color: blue;
			font-family: sans-serif;
		}
		.req2{
			padding-left: 20px;
			color: blue;
			font-family: sans-serif;			
		}
		.error{
			color: red;
			font-family: sans-serif;
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
		<div class="regis1">
	<h1>Admin Registration</h1>
	<span class="req2">*required field</span></div>
      <div class="regis2">
      <form method="POST">
      	<table cellspacing="5" cellpadding="5">
      		<tr><td>Name:</td><td><input type="text" name="n1" class="ta1"><span class="req">*<?php echo $en1;?></span></td></tr>
      		<tr><td>Username:</td><td><input type="text" name="u1" class="ta1"><span class="req">*<?php echo $eu1;?></span></td></tr>
      		<tr><td>Password:</td><td><input type="password" name="p1" class="ta1"><span class="req">*<?php echo $ep1;?></span></td></tr>
      		<tr><td>Confirm Password:</td><td><input type="password" name="p2" class="ta1"><span class="req">*<?php echo $ep1;?></span><span class="error"><?php echo 
      		$perror;?></span></td></tr>
      		<tr><td>Contact:</td><td><input type="number" name="c1" class="ta1"><span class="req">*<?php echo $ec1;?></span></td></tr>
      		<tr><td>Email:</td><td><input type="text" name="e1" class="ta1"><span class="req">*<?php echo $ere1;?></span></td></tr>
      		<tr><td>Gender</td>
			<td><label><input type="radio" name="gender" <?php if(isset($gender) && $gender=="Male") echo "checked";?> value="Male"/>Male
			<input type="radio" name="gender" <?php if(isset($gender) && $gender=="Female") echo "checked";?> value="Female"/>Female
		    </label></td></tr>
      		<tr><td><input type="submit" name="s1" value="Submit" class="ba3"> <input type="submit" name="" value="Cancel" class="ba3"></td></tr>
      	</table>
      </form>
      </div>
      </section>
    <footer>
      <p>MGM PROPERTIES<br>Copyright &copy; 2020</p>
    </footer>
</body>
</html>