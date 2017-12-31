<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/Index.css">
 <link href='images/logo.jpg' rel='shortcut icon' type='image/ico'/>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Velammal Engineering College OPAC</title>
</head>
<body>
<div id="content">
 <div id="header">
    <div id="logo"> 
	</div>
	<div id="menu">
	<div id="navigation">
	<div id="li"></div>
	<ul style="list-style: none;">
    <li><a href="Index.php" class="nounderline"><strong>Home</a></li><br \>
    <li><a href="Aboutus.php" class="nounderline"><strong>About us</a></li><br \>
    <li><a href="Help.php" class="nounderline"><strong>Help</a></li>
    </ul>
</div>
</div>
</div>
<div id="body">
<div id="searchbar">
				<form method="post" action="Search.php">
          <input type="text" name="search" size="25" class="text1"/ placeholder="Search for Author, Title, Subject ">
        </form>
			</div>
	 <?php
	$servername = "localhost";
$username = "root";
$password = "kushalchand";
$dbname="DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}
	$s = "SELECT * FROM Library WHERE Accno=$Bookid ";
					$rs= $conn->query($s);
					echo "<table border='0' align='center'>";	
					while($row = $rs->fetch_assoc()) 
					{
					  
						echo "<tr><td>".$row["Accno"]."</td><td>".$row["Title"]."</td><td>".$row["Publisher"]."</td><td>".$row["Domain"]."</td><td>".$row["Year"]."</td><td>".$row["Price"]."</td></tr>";
					}
	echo "</table>";
	$conn->close();
	?>
	</div>

	<div id="footer">
	 <center>
      <span class="style5">
        <a href="Index.php" class="nounderline"><span style="color:white">Home</a><span class="styl">&nbsp;|&nbsp;</span>
	    <a href="Aboutus.php" class="nounderline"><span style="color:white">About Us</a><span class="style1">&nbsp;|&nbsp;</span>
	    <a href="Help.php" class="nounderline"><span style="color:white">Help</a><span class="style1"></span>
	  </span>
    </center>
	<br>
      <center>
	  <span class="yellobtm">© 2016 <a href="http://www.velammal.edu.in/" class="nounderline"><span style="color:white">Velammal Engineering College .</a> All Rights Reserved.</span>
    </center>
</div>
</div>
</body>
</html>
