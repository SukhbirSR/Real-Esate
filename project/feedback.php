<?php
include 'connect.php';
$ed=$en=$ee="";
if(isset($_POST['s1']))
{
  if(empty($_POST["d1"]))
  {
  	$ed="Description is required";
  }
    if(empty($_POST["n1"]))
  {
  	$en="Name is required";
  }
    if(empty($_POST["e1"]))
  {
  	$ee="Email is required";
  }
  else 
  {
  	$d=$_POST['d1'];
  	$n=$_POST['n1'];
  	$e=$_POST['e1'];
  	$sql="insert into feedback(des,name,email) value('$d','$n','$e')";
  	if(mysqli_query($con,$sql))
  	{
  		echo "Thanks for your feedback","<br>";
  	}
  }
}
?>
<!DOCTYPE html>
<html>
<head><style type="text/css">
	.abc{color: red}
</style>
<title>Feedback</title>
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
                <li class="current"><a href="about.php">About</a></li>
                <li><a href="show_property.php">Property</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
              </ul>
            </nav>
          </div>
        </header>
        <section class="feedback">
          <div class="feedback1">
	<center><h1>Feedback Form</h1></center>
		<center><p>We would love to hear your thoughts, concerns or problems with anything so we can improve!</center></p></div>
		<hr>
    <div class="feedback2">
	<form method="POST">
		<table>
			</p><tr><td>Description<span class="abc">*<?php echo $ed;?></span></td></tr>
			<tr><td><textarea name="d1" class="ta2"></textarea></td></tr>
			<tr><td>Name<span class="abc">*<?php echo $en;?></span></td></tr>
			<tr><td><input type="text" name="n1" class="ta1"></td></tr>
			<tr><td>Email<span class="abc">*<?php echo $ee;?></span></td></tr>
			<tr><td><input type="email" name="e1" class="ta1"></td></tr>
			<tr><td><br><input type="submit" name="s1" value="Submit Feedback" class="ba2"></td></tr>
		</table>
	</form>
</div>
</section>
     <footer>
      <p>MGM PROPERTIES<br>Copyright &copy; 2020</p>
    </footer>
</body>
</html>
