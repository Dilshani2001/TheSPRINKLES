<?php

// Create connection
$conn = new mysqli('localhost','root','','project');

// Check connection
if($conn->connect_error) 
{
  die("Connection failed: ".$conn->connect_error);
}
//echo"Connected successfully";

//Login user

if(isset($_POST['login']))
{   
   if($Uname ="soheshi" && $Password1="abc@123")
   {
	 echo "<script>alert('Login Successfully')</script>";
     include('admin.php');}
}

elseif(isset($_POST['login'])){
	
	$Uname = $_POST['Uname'];
	$Password1 = $_POST['Password1'];
	
	
 
 
$sql = "select * from users where Uname='$Uname' and Password1='$Password1'";


$result = $conn->query($sql);

 if ($result->num_rows > 0) {
  // output data of each row
     while($row = $result->fetch_assoc()) {
	  
	 echo "<script>alert('Login Successfully')</script>";
	include('dash.php');
  }
 
} 
else {
  echo "<script>alert('Login Error')</script>";
}

 


}

mysqli_close($conn);
?>