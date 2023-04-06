<?php
include 'connect.php';
$en1=$eun1=$epass1=$epass2=$ec1=$ea1=$ee1=$est1=$ect1="";
$er1=$eun2=$eun3="";
$eml="";
if(isset($_POST['s1']))
{
	if(empty($_POST["n1"]))
	{
		$en1="Name is required";
	}
	if(empty($_POST["un1"]))
	{
		$eun1="Username is required";
	}
	if(empty($_POST["pass1"]))
	{
		$epass1="Password is required";
	}
	if(empty($_POST["pass2"]))
	{
		$epass2="Password is required";
	}
	if(empty($_POST["c1"]))
	{
		$ec1="Contact is required";
	}
	if(empty($_POST["a1"]))
	{
		$ea1="Address is required";
	}
	if(empty($_POST["e1"]))
	{
		$ee1="Email is required";
	}
	else 
	{
        $eml=xyz($_POST["e1"]);
       if(!filter_var($eml, FILTER_VALIDATE_EMAIL))
        {
        	$ee1="Invalid email format";
        }
	}
	if(empty($_POST["st1"]))
	{
		$est1="State Name is required";
	}
	if(empty($_POST["ct1"]))
	{
		$ect1="City Name is required";
	}
	
	else
	{
		$n=$_POST['n1'];
		$un=$_POST['un1'];
		$p1=$_POST['pass1'];
		$p2=$_POST['pass2'];
		$c=$_POST['c1'];
		$a=$_POST['a1'];
		$e=$_POST['e1'];
		$st=$_POST['st1'];
		$ct=$_POST['ct1'];
		$g=$_POST['gender'];
		if($p1!=$p2)
		{
			$er1="Password does not match";
		}
		else
		{
		$sql1="select * from registration where email ='$e'";
		$y=mysqli_query($con,$sql1);
        $z=mysqli_num_rows($y);
        if($z==true)
        {
        	$eun2="Email already exists";
        }
        $sql2="select * from registration where uname='$un'";
        $a=mysqli_query($con,$sql2);
        $b=mysqli_num_rows($a);
        if ($b==true) {
        	$eun3="Username already exists";
        }
        else
        {
		$sql="insert into registration(name,uname,password,contact,address,email,state,city,gender) value('$n','$un','$p1',$c','$a','$e','$st','$ct','$g')";
		
		if(mysqli_query($con,$sql))
		{
			echo "Thank You For Registration","<br>";
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
<head><style type="text/css">
	.abc{color: blue;
	     font-family: sans-serif;
	}
	.abc2{color: blue;
	     font-family: sans-serif;
	     padding-left: 20px;
	}
	.error{color: red;
		font-family: sans-serif;}
</style>
	<title>Registration</title>
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
<section>
<div class="regis1">       
	<h1>Registration Form</h1>
	</div> 
	<span class="abc2">*required field</span>
	
			<script language="JavaScript">
		function xyz(evt) 
		{
			var e = event || evt;
			var charcode = e.which || e.keycode;
			if (charcode>31 && (charcode<48 || charcode>57)) 
			{
				return false;
			}
			return true;
		}
	</script>
	<div class="regis2">
	<form method="POST">
		<table cellspacing="5" cellpadding="5">
			<tr><td>Name</td><td><input type="text" name="n1" class="ta1"><span class="abc">*<?php echo $en1;?></span></td></tr>
			
			<tr><td>Username</td><td><input type="text" name="un1" class="ta1"><span class="abc">*<?php echo $eun1;?></span><span class="error"><?php echo $eun3;?></span></td></tr>
			
			<tr><td>Password</td><td><input type="password" name="pass1" class="ta1"><span class="abc">*<?php echo $epass1;?></span></td></tr>
			
			<tr><td>Confirm Password</td><td><input type="password" name="pass2" class="ta1"><span class="abc">*<?php echo $epass2;?></span><span class="error"><?php echo $er1;?></span></td></tr>
			
			<tr><td>Contact</td><td><input type="text" name="c1" class="ta1" onkeypress="return xyz();"><span class="abc">*<?php echo $ec1;?></span></td></tr>
			
			<tr><td>Address</td><td><textarea name="a1" class="ta2"></textarea><span class="abc">*<?php echo $ea1;?></span></td></tr>
			
			<tr><td>Email</td><td><input type="text" name="e1" class="ta1"><span class="abc">*<?php echo $ee1;?></span><span class="error"><?php echo $eun2;?></span></td></tr>
			
			<tr><td>State</td><td><input type="text" name="st1" class="ta1"><span class="abc">*<?php echo $est1;?></span></td></tr>
			
			<tr><td>City</td><td><input type="text" name="ct1" class="ta1">
				<span class="abc">*<?php echo $ect1;?></span></td></tr>
			
			<tr><td>Gender</td>
			<td><label><input type="radio" name="gender" <?php if(isset($gender) && $gender=="Male") echo "checked";?> value="Male"/>Male
			<input type="radio" name="gender" <?php if(isset($gender) && $gender=="Female") echo "checked";?> value="Female"/>Female
		    </label></td></tr>
			
			<tr><td><input type="submit" name="s1" value="Submit" class="ba3"> <input type="reset" name="Cancel" class="ba3"></td></tr>
		</table>
	</form>
</div>
</section>
<footer>
        <p>MGM PROPERTIES<br>Copyright &copy; 2020</p>
        </footer>
</body>
</html>