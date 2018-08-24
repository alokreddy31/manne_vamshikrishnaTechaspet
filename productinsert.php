<?php



$host = "localhost";
$userName = "admin";
$password = "";
$dbName = "product";
$con=mysqli_connect($host,$username,$password,$dbName);
$ProductName=$_POST['Product Name'];
$Price=$_POST['Price'];
$Quantity=$_POST['Quantity'];
$Category=$_POST['Category'];
$Purchasedate=$_POST['Purchase Date'];
$Expirydate=$_POST['Expiry Date'];
$sql='INSERT INTO product  (Product Name,Price,Quantity,Category,Purchase Date,Expiry date)VALUES('.$ProductName.$Price.$Quantity.$Purchasedate.$Expirydate.')';
$result=mysqli_query($con,$sql);
if($result)
{echo '<h2>product inserted sucessfully</h2>';}



?>