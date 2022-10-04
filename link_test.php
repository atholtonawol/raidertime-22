<?php
if(isset($_POST[‘submit’])){
	$email = $_POST[‘email’];
	$pass = $_POST[‘password’];
}

require '/home4/ahsraid1/public_html/database/connect.php';
$sql = “UPDATE emails SET testing = $pass WHERE email = $email”;
$update = mysqli_query($conn, $sql);
?>
