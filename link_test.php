<?php 
require 'link_test.html';
require '/home4/ahsraid1/public_html/database/connect.php';
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
 	} 
$yes = $_POST['submit'];\
echo $yes;
isset($_POST[‘submit’]){
	$email = $_POST[‘username’];
	$pass = $_POST[‘lname’];
	echo $pass;
	echo "here";
	echo $email;
	echo "and now";
}

// $sql = “UPDATE emails SET testing = $pass WHERE schoolUser = $email”;
// //$sql = "INSERT INTO emails (email, testing) values ($email, $pass);
// $update = mysqli_query($conn, $sql);
?>
