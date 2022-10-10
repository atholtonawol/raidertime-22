<?php
echo("SLIDE 6 GET\n");

require '/home4/ahsraid1/public_html/database/connect.php';

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 

//$userName = $_POST["username"];
$userName = "ashahe8615";


 //if(isset($_POST['username']))
if(true)
 {
  $sql = 'IF EXISTS (SELECT firstName FROM emails WHERE schoolUser={$userName})';
  $result = mysqli_query($conn, $sql);
  echo "oxenberg";
  if($result)
  {
    $sql = 'SELECT firstName FROM emails WHERE schoolUser = {$userName}';
    $result = mysqli_query($conn, $sql);
    $var = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo $result[0]['firstName'];
  }
 } else {echo "did not work";}

$first_name = "yesysgf";

?>
