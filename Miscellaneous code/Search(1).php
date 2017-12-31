<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/Index.css">
 <link href='images/logo.jpg' rel='shortcut icon' type='image/ico'/>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Velammal Engineering College OPAC</title>
	<style>
table {
     border: 1px solid black;
	border-collapse: collapse;	
}
th
{
  border: 1px solid black;
  border-collapse: collapse;
}
td
{
  border: 1px solid black;
  border-collapse: collapse;
}	
tr:nth-child(even) 
{
 background-color: #e5e5ff
}
			
</style>
</head>
<body>
<div id="content">
 <div id="header">
    <div id="logo"> 
	</div>
	<div id="menu">
	<div id="li"></div>
	<ul style="list-style: none;">
    <li><a href="Index.php" class="nounderline"><strong>Home</strong></a></li>
    <li><a href="Aboutus.php" class="nounderline"><strong>About us</strong></a></li>
    <li><a href="Help.php" class="nounderline"><strong>Help</strong></a></li>
    </ul>
</div>
</div>
<div id="body">
<div id="searchbar">
				<form method="GET" action="Search.php">
          <input type="text" name="search" size="25"  placeholder="Search for Acc no, Title, Subject">					
        </form>
			</div>
	
	
<div id= "scroll">
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
		
	if(isset($_GET['search'])){
		
		    $accno= $_GET['search'];
			$title= $_GET['search'];
			$publisher= $_GET['search'];
			$domain= $_GET['search'];
			$year= $_GET['search'];
			$price= $_GET['search'];
		
		   

$sql = "SELECT * FROM Library WHERE Title LIKE '%$title%' OR Accno LIKE '%$accno%' OR Publisher LIKE '%$publisher%' OR Domain LIKE '%$domain%' OR Price LIKE '%$price%' OR Year LIKE '%$year'" ;

$rsl= $conn->query($sql);

		if (mysqli_num_rows($rsl) > 0) 
		{
			$rowcount=mysqli_num_rows($rsl);
			printf("Number of matching results %d",$rowcount);
    // output data of each 
			
			echo "<table><tr><th>Acc No.</th><th>Title</th><th>Publisher</th><th>Domain</th><th>Price</th><th>Year</th></tr>";
    while($row = $rsl->fetch_assoc()) 
	{
			$acc=$row["Accno"];
			$title1=$row["Title"];
			$publisher1=$row["Publisher"];
			$domain1=$row["Domain"];
			$year1=$row["Year"];
			$price1=$row["Price"];
		echo "<tr><td>".$acc."</td><td>".$title1."</td><td>".$publisher1."</td><td>".$domain1."</td><td>".$price1."</td><td>".$year1."</td></tr>";
       } 
		echo "</table>";
		}
		else
		{
			echo "No match found, try again or use the help section";
		}
	}
	$conn->close();
?> 
	</div>
	</div>
	
	<div id="footer">
	 <center>
		 <a href="Index.php" class="nounderline"><span style="color:white">Home</span></a>&nbsp;|&nbsp;
		 <a href="Aboutus.php" class="nounderline"><span style="color:white">About Us</span></a>&nbsp;|&nbsp;
		 <a href="Help.php" class="nounderline"><span style="color:white">Help</span></a>
    </center>
	<br>
      <center>
	  <span class="yellobtm">© 2016 <a href="http://www.velammal.edu.in/" class="nounderline"><span style="color:white">Velammal Engineering College .</span></a> All Rights Reserved.</span>
    </center>
</div>
</div>
</body>
</html>
