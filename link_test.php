<?php
if(isset($_POST[‘submit’])){
	echo "this worked i think";
	$email = $_POST[‘email’];
	$pass = $_POST[‘password’];
}

require '/home4/ahsraid1/public_html/database/connect.php';
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 }
 echo "Connected successfully";  
//$sql = “UPDATE emails SET testing = $pass WHERE email = $email”;
$sql = "INSERT INTO emails (email, testing) values ($email, $pass);
$update = mysqli_query($conn, $sql);
?>
