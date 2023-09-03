<?php
// Create connection
$conn = new mysqli('localhost','root','','project');

// Check connection
if($conn->connect_error) 
{
  die("Connection failed: ".$conn->connect_error);
}
echo"Connected successfully";

//register user
if(isset($_POST['register']))
{
	$Fname = $_POST['Fname'];
	$Lname = $_POST['Lname'];
	$Uname = $_POST['Uname'];
	$Email = $_POST['Email'];
	$Password1 = $_POST['Password1'];
	$Password2 = $_POST['Password2'];
}

$sql = "INSERT INTO users(Fname,Lname,Uname,Email,Password1,Password2)
VALUES ('$Fname','$Lname','$Uname','$Email','$Password1','$Password2')";

if (mysqli_query($conn, $sql)) {
  echo " <script>alert('Registration Successfully')</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>