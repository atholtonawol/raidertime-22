<?php 
require '/home4/ahsraid1/public_html/database/connect.php';
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
 	} 

$email = $_GET[‘email’];
$pass = $_GET[‘password’];
echo $pass;
echo "here";
echo $email;
echo "and now";
//isset($_POST[‘submit’])
// $sql = “UPDATE emails SET testing = $pass WHERE schoolUser = $email”;
// //$sql = "INSERT INTO emails (email, testing) values ($email, $pass);
// $update = mysqli_query($conn, $sql);
?>
