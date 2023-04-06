<?php
include 'connect.php';
$sql="SELECT * from property";
$result=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>MGM Property  | Welcome</title>
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
      body{
        background-color: #f4f4f4;
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
                <li class="current"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="show_property.php">Property</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
              </ul>
            </nav>
          </div>
        </header>
        <section id="showcase">
          <div class="container">
            <h1>The Simplest<br>Way to Find Property</h1>
            <p>Buy and sell real estate properties</p>
          </div>
        </section>
        <section id="intro">
          <div class="highlight">
                <h2>Find The Best Property For You</h2>
          </div>
        </section>
        <section id="search">
             <div class="container">
               <form action="search.php" method="POST">
                <center>
            <select name="city" id="city" class="tb1">
            	<option value="">Location</option>
              <?php
              for($i=1;$i<=$rowcount;$i++) { 
                $row=mysqli_fetch_array($result);
              ?>
              <option value="<?php echo $row['city']?>"><?php echo $row['city']?></option>
              <?php
            }
            ?>
            </select>
            
            <select name="property" id="property" class="tb1">
            	<option value="">Property Type</option>
              <option value="House">House</option>
              <option value="Flat">Flat</option>
              <option value="Farmhouse">Farmhouse</option>
              <option value="Bungalow">Bungalow</option>
              <option value="Penthouse">Penthouse</option>
              <option value="Plot/Land">Plot/land</option>
            </select>
            <select name="price" id="price" class="tb1">
              <option value="">Price</option>
            </select>
            <select name="available" id="available" class="tb1">
            	<option value="">Available For</option>
              <option value="Sale">Buy</option>
              <option value="Rent">Rent</option>
            </select>
            <select name="area" id="area" class="tb1">
            	<option value="">Area(SqFt)</option>
            </select>
            <button value="submit" class="ba1" name="s1">Search</button>
            </center></form></div>
        </section>
        
        <section id="boxes">
          <div class="container">
          <div class="box">
            <img src="image/flats.jpeg" alt="" width="300" height="170">
             <a href="flats.php"><h3>Flats</h3></a>
             <p>Buy The Best Flats Available</p>
          </div>
          <div class="box">
            <img src="image/2.jpg" alt="" width="300" height="170">
             <a href="house.php"><h3>House</h3></a>
             <p>Buy The Best Houses Available</p>
          </div>
          <div class="box">
            <img src="image/house.jpg" alt="" width="300" height="170">
             <a href="bungalow.php"><h3>Bungalow</h3></a>
             <p>Buy The Best Bungalow Available</p>
          </div>
          </div>
        </section>
        <footer>
        <p>MGM PROPERTIES<br>Copyright &copy; 2020</p>
        </footer>
  </body>
</html>