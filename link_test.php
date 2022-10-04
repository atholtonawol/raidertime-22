<?php
if(isset($_POST[‘submit’])){
	$email = $_POST[‘email’];
	$pass = $_POST[‘password’];
}

require connect.php
$sql = “UPDATE emails SET password = $pass WHERE email = $email”;
$update = mysqli_query($conn, $sql);
?>
