<?php
echo("SLIDE 6 GET<br>");

$servername = "50.87.190.153";
 $username = "ahsraid1_awol23";
 $password = "12345";

 // Create connection
 $conn = mysqli_connect($servername, $username, $password, "ahsraid1_awol23");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 



   $sql = 'SELECT firstName, lastName FROM studentInfo WHERE user="kdamav7949"';
   $result = mysqli_query($conn, $sql);
   $var = mysqli_fetch_all($result, MYSQLI_ASSOC);

   echo "<br>var: ";
   print_r($var);
   echo "<br>sql: ";
   print_r($sql);
   echo "<br>result: ";
   print_r($result);


if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

 echo $var[0]['firstName'];
   foreach($var as $name)
   {
     echo $name['firstName'];
     break;
      
   }

/*

//$userName = $_POST["username"];
$userName = "ashahe8615";


//if(isset($_POST['username']))
if(true)
  {
    $sql = "SELECT firstName, lastName FROM studentInfo WHERE user={$userName}";
    $result = mysqli_query($conn, $sql);
    $var = mysqli_fetch_all($result, MYSQLI_ASSOC);
 
  echo "<br>var: ";
   print_r($var);
   echo "<br>sql: ";
   print_r($sql);
   echo "<br>result: ";
   print_r($result);
 echo "<br>result 0: ";
    print_r($result[0]['firstName']);
  
  } else {
    echo "isset post username error";
  }

$first_name = "yesysgf";


*/
?>
