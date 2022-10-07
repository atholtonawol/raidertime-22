<?php 
require 'slide_2_log_in.php';
require '/home4/ahsraid1/public_html/database/connect.php';
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
 	} 
$yes = $_POST['submit'];\
echo $yes;
isset($_POST[‘submit’]){
	$email = $_POST[‘username’];
	$pass = $_POST[‘password’];
	echo $pass;
	echo $email;
}

// $sql = “UPDATE emails SET testing = $pass WHERE schoolUser = $email”;
// //$sql = "INSERT INTO emails (email, testing) values ($email, $pass);
// $update = mysqli_query($conn, $sql);
?>
