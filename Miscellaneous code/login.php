<?php
session_start();
   
   function valid_email($mail)
{
     if (empty($mail)) 
	 {
         echo "Email is required.";
     } 
	 else 
	 {
         $email = test_input($mail);
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		 {
           echo "Enter a valid email address."; 
     } 
	 $slquery = "SELECT 1 FROM register WHERE email = '$email'";
     $selectresult = mysql_query($slquery);
}
function valid_password($pass)
{
     if (empty($pass)) 
	 {
         echo "Password is required.";
     } 
}
   $db = mysqli_connect("localhost","root","");
   mysqli_select_db($db ,"personal") or die("error to select the db" . mysql_error());
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
      
      $username = $_POST['username'];
      $password = $_POST['password']; 
      
      $sql = "SELECT * FROM personal WHERE email = '$username' and pass= '$password'";
      $result = mysqli_query($db,$sql) or die("error in inserting data in db" . mysql_error());
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $count = mysqli_num_rows($result);
   }
	  if($count == 1) 
	  { 
         $_SESSION['login_user'] = $username;
         header("location: .html");  
         exit;
      }
	  else 
	  {
		  echo 'Your Email or Password is invalid';
      }
   
?>	  