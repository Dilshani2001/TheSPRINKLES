<?php
// Create connection
$conn = new mysqli('localhost','root','','project');

// Check connection
if($conn->connect_error) 
{
  die("Connection failed: ".$conn->connect_error);
}
echo"Connected successfully";

//add produc['addproduct']))
{
	$Productid = $_POST['Productid'];
	$Productname = $_POST['Productname'];
	$Price = $_POST['Price'];
	$Category = $_POST['Category'];
	
}

$sql = "INSERT INTO products(Productid,Productname,Price,Category)
VALUES ('$Productid','$Productname','$Price','$Category')";

if (mysqli_query($conn, $sql)) {
  echo " <script>alert('A new product was added to the database')</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>