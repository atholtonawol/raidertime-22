<?php 
require '/home4/ahsraid1/public_html/database/connect.php';
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
 	}
 	echo "Connected successfully"; 
if(1==1){
	$email = $_POST[‘email’];
	$pass = $_POST[‘password’];
	echo $pass;
	echo $email;
}
//isset($_POST[‘submit’])
// $sql = “UPDATE emails SET testing = $pass WHERE schoolUser = $email”;
// //$sql = "INSERT INTO emails (email, testing) values ($email, $pass);
// $update = mysqli_query($conn, $sql);
?>
