<?php
include 'connect.php';
session_start();
if (isset($_POST['id']) && $_POST['id']!=""){
    $id = $_POST['id'];
    $result = mysqli_query($con,"SELECT * FROM property WHERE `id`='$id'");
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $name = $row['name'];
    $price = $row['value'];
    $image = $row['images'];
    $available = $row['available'];
    $city = $row['city'];
    $state = $row['state'];
    $size = $row['size'];
}
if (isset($_POST['a1']))
  {         
    $_SESSION["sess_id"]=$row['id'];
    $_SESSION["sess_des"]=$row['description'];
    $_SESSION["sess_nm"]=$row['name'];
    $_SESSION["sess_ava"]=$row['available'];
    $_SESSION["sess_st"]=$row['state'];
    $_SESSION["sess_sz"]=$row['size'];
    $_SESSION["sess_rm"]=$row['rooms'];
    $_SESSION["sess_add"]=$row['address'];
    $_SESSION["sess_img"]=$row['images'];
    $_SESSION["sess_tp"]=$row['type'];
    $_SESSION["sess_vl"]=$row['value'];
    $_SESSION["sess_ct"]=$row['city'];
    $_SESSION["sess_ar"]=$row['area'];
    $_SESSION["sess_bth"]=$row['bathroom'];
    $_SESSION["sess_grg"]=$row['garage'];
    $_SESSION["sess_det"]=$row['details'];
    $_SESSION["sess_cnt"]=$row['contact'];
    header("location:display_property.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>MGM Properties | Bungalow</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		body{
			background-color: #f4f4f4;
		}
		.search{
			text-align: center;
			font-size: 30px;
			margin-top: 25px;
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
                <li><a href="login.php">Login</a></li>
              </ul>
            </nav>
          </div>
        </header>	
    <?php
    include 'connect.php';
		$prop="Bungalow";
	    $sql1="select * from property where description='$prop' ";
	    $result=mysqli_query($con,$sql1);
	    $queryresult=mysqli_num_rows($result);
	    if ($queryresult==true) {
	    	echo "<div class='search'>There are ".$queryresult." results!</div>";
            while($row = mysqli_fetch_assoc($result))
            {
	        ?>
	 <div class="box">
	 	<form method="POST">
		<div class="show">
			<input type="hidden" name="id" value="<?php echo $row['id']?>">
			<div class="imgbox"><img src='<?php echo $row["images"]; ?>'/></div>
		<div class="detail1">
	    <div class="display"><ul><li>Price : <?php echo $row['value'];?></li>
	    <li>Available : <?php echo $row['available'];?></li>
	    <li></li>City : <?php echo $row['city'];?></ul></div>	
	    <div class="display"><ul><li>State : <?php echo $row['state'];?></li>	
	    <li>Size(Sqft) : <?php echo $row['size'];?></li>	
	    <li>Area : <?php echo $row['area'];?></li></ul></div>	
	    <div class="display"><ul><li>Type : <?php echo $row['description'];?></li>
      <li>Rooms : <?php echo $row['rooms'];?></li>
	    <li>Bathrooms : <?php echo $row['bathroom'];?></li>	
	    <li>Garage : <?php echo $row['garage'];?></li></ul></div>
	    </div>
      <button type="submit" name="a1" class="botton">View property</button>
	    </div></form>	
  <?php  
    }
   ?>
 </div>
<?php 
} 
?>
<footer>
        <p>MGM PROPERTIES<br>Copyright &copy; 2020</p>
        </footer>
</body>
</html>