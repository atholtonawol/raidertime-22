<?php echo "new test" ?>


 
<?php
 require '/home4/ahsraid1/public_html/database/connect.php';
 require 'slide_2_log_in.php';
 
 
 
 if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 }
 else{echo "Connected successfully";}  
 
//  echo "<script type='text/javascript'>window.top.location='https://www.google.com//';
//  </script>"; exit;
//header("Location: https://www.google.com/");
 
 
//   $sql = 'SELECT firstName FROM emails';
//   $result = mysqli_query($conn, $sql);
//   $var = mysqli_fetch_all($result, MYSQLI_ASSOC);
//   print_r($var);
   
//   print_r($sql);
//   print_r($result);
//   print_r($var);
// echo $var[0]['firstName'];
//   foreach($var as $name)
//   {
//     echo $name['firstName'];
//     break;
       
//   }

$username = $_POST["username"];
//echo $userName;


 
//  if($result)
//  {
//   $sql = 'SELECT firstName FROM emails WHERE schoolUser = {$userName}';
//   $result = mysqli_query($conn, $sql);
//   $var = mysqli_fetch_all($result, MYSQLI_ASSOC);
//   echo $result[0]['firstName'];
//  } else {
//   echo "didnt wrk";
//    }

 if(isset($_POST["username"]))
 {
  $sql = 'IF EXISTS (SELECT firstName FROM emails WHERE schoolUser={$userName})';
  $result = mysqli_query($conn, $sql);
  echo gettype($result);
  echo gettype(5);
  if($result)
  {
  $sql = 'SELECT firstName FROM emails WHERE schoolUser = {$userName}';
  $result = mysqli_query($conn, $sql);
  $var = mysqli_fetch_all($result, MYSQLI_ASSOC);
  echo $result[0]['firstName'];
  }
 } else {echo "did not work";}


   
//  foreach($var as $name){
//      echo $name['First_Name'];
//  }
 
//  print_r($var);
// $names = 'SELECT First_Name FROM emails';
// $result = mysqli_query($conn, $names);
// $row = mysqli_fetch_assoc($result);
// echo $row;
?>


