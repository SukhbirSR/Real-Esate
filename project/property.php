<?php
include 'connect.php';
if(isset($_POST['s1']))
{
 
  $p1=$_POST['prop1'];
  $p2=$_POST['prop2'];
  $p3=$_POST['prop3'];
  $p4=$_POST['prop4'];
  $p5=$_POST['prop5'];
  $p6=$_POST['prop6'];
  $p7=$_POST['prop7'];
  $p8=$_POST['prop8'];
  $p9=$_POST['prop9'];
  $p10=$_POST['prop10'];
  $p11=$_POST['prop11'];
  $p12=$_POST['prop12'];
  $c=$_POST['c1'];
  $t1=$_POST['typ1'];
  $t2=$_POST['typ2'];
  $image=$_FILES['image']['name'];
  
  $name = $_FILES['image']['name'];
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $extensions_arr = array("jpg","jpeg","png","gif");
  if( in_array($imageFileType,$extensions_arr) )
    {
  $sql="insert into property(description,name,available,state,size,rooms,address,images,type,value,city,area,bathroom,garage,details,contact) value('$p1','$p2','$t1','$p3','$p4','$p5','$p6','$target_file','$t2','$p7','$p8','$p9','$p10','$p11','$p12','$c')";
  move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$image);
  if (!mysqli_query($con,$sql)) {
    echo "Property Not Added";
  }
  else 
  {
  echo "Property Added" ;
  }
   }
   
  }

?>
<!DOCTYPE html>
<html>
<head>
<title>Add Property</title>
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
          <div class="propt1">
      <center><h1>Add Property</h1></center>
     <h3>Property Details</h3></div>
     <div class="propt2">
     <form method="POST" enctype="multipart/form-data">
        <table cellspacing="8" cellpadding="5" align="right">
          <tr><td>Property Type:</td><td><label><input type="radio" name="typ2" <?php if(isset($typ2) && $typ2=="Commercial") echo "checked";?> value="Commercial"/>
          	Commercial                                                                    <input type="radio" name="typ2" <?php if(isset($typ2) && $typ2=="Residential") echo "checked";?> value="Residential"/>Residential</label></td></tr>
          <tr><td>Value:</td><td><input type="text" name="prop7" class="ta1"></td></tr>
          <tr><td>City:</td><td><input type="text" name="prop8" class="ta1"></td></tr>
          <tr><td>Land Area(BHK):</td><td><input type="text" name="prop9" class="ta1"></td></tr>
          <tr><td>Bathroom:</td><td><input type="text" name="prop10" class="ta1"></td></tr>
           <tr><td>Garage:</td><td><input type="text" name="prop11" class="ta1"></td></tr>
          <tr><td>Details:</td><td><textarea name="prop12" class="ta2"></textarea></td></tr>
          <tr><td>Contact:</td><td><input type="number" name="c1" class="ta1"></td></tr>
      	</table>
      	
      	<table cellspacing="8" cellpadding="5" align="left">
          <tr><td>Property Description:</td><td><select name="prop1" id="prop1" class="ta1">
             <option value="">Select Property</option>
             <option value="House">House</option>
             <option value="Flat">Flat</option>
             <option value="Farmhouse">Farmhouse</option>
             <option value="Bungalow">Bungalow</option>
             <option value="Penthouse">Penthouse</option>
             <option value="Plot/Land">Plot/land</option>
          </select></td></tr>
          <tr><td>Owner Name:</td><td><input type="text" name="prop2" class="ta1"></td></tr>
      	  <tr><td>Availiable For:</td><td><label><input type="radio" name="typ1" <?php if(isset($typ1) && $typ1=="Sale") echo "checked";?> value="Sale"/>Sale
      			<input type="radio" name="typ1" <?php if(isset($typ1) && $typ1=="Rent") echo "checked";?> value="Rent"/>Rent</label></td></tr>
          <tr><td>State:</td><td><input type="text" name="prop3" class="ta1"></td></tr>
          <tr><td>Size(SqFT):</td><td><input type="text" name="prop4" class="ta1"></td></tr>
          <tr><td>Rooms:</td><td><input type="text" name="prop5" class="ta1"></td></tr>
          <tr><td>Address:</td><td><textarea name="prop6" class="ta2"></textarea></td></tr>
      	  <tr><td>Add Image:</td><td><input type="file" name="image" id="image"></td></tr>
      	  <tr><td><input type="submit" name="s1" value="Submit" class="ba3"> <input type="reset" name="w1" value="Cancel" class="ba3"></td></tr>
        </table>
    </form>
    </div>
    </section>  
</body>
</html>