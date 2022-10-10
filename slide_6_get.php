<?php
echo("SLIDE 6 GET<br>");

require '/home4/ahsraid1/public_html/database/connect.php';

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 

//$userName = $_POST["username"];
$userName = "ashahe8615";


   $sql = 'SELECT firstName FROM emails';
   $result = mysqli_query($conn, $sql);
   $var = mysqli_fetch_all($result, MYSQLI_ASSOC);

   echo "<br>var: ";
   print_r($var);
   echo "<br>sql: ";
   print_r($sql);
   echo "<br>result: ";
   print_r($result);

 echo $var[0]['firstName'];
   foreach($var as $name)
   {
     echo $name['firstName'];
     break;
      
   }


/*
 //if(isset($_POST['username']))
if(true)
 {
  $sql = 'IF EXISTS (SELECT firstName FROM emails WHERE schoolUser={$userName})';
  $result = mysqli_query($conn, $sql);
  echo mysqli_query($conn, $sql);
  echo "oxenberg\r\n$result\r\n";
  if($result)
  {
    $sql = 'SELECT firstName FROM emails WHERE schoolUser = {$userName}';
    $result = mysqli_query($conn, $sql);
    $var = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo $result[0]['firstName'];
  } else { echo "no valid result";}
  
 } else {echo "isset post username error";}

$first_name = "yesysgf";
*/


?>
