<?php echo "gerg12345" ?>


 
<?php
 require '/home4/ahsraid1/public_html/database/connect.php';
 require 'slide_2_log_in.php';
 
 
 
 if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 }
  
 
//  echo "<script type='text/javascript'>window.top.location='https://www.google.com//';
//  </script>"; exit;
//header("Location: https://www.google.com/");
//   foreach($var as $name)
//   {
//     echo $name['firstName'];
//     break;
       
//   }




//  if(isset($_POST["username"]))
//  {
//   echo "is set";
//   $username = $_POST["username"];
//   echo $username; 
 
  

  
// //   $sql = 'SELECT firstName FROM emails WHERE EXISTS schoolUser={$username}';
//   $result = mysqli_query($conn, $sql);



//   if ($result === TRUE)
//   {
//   echo "vihan";
//   $sql = 'SELECT firstName FROM studentInfo WHERE user={$userName}';
//   $result = mysqli_query($conn, $sql);
//   $var = mysqli_fetch_all($result, MYSQLI_ASSOC);
//   echo $result[0]['firstName'];
//   }
//  } 
// else {echo "did not work";}
//  if($result === FALSE)
//   {
//   echo "false";
//   } 




//  foreach($var as $name){
//      echo $name['First_Name'];
//  }
 
//  print_r($var);
// $names = 'SELECT First_Name FROM emails';
// $result = mysqli_query($conn, $names);
// $row = mysqli_fetch_assoc($result);
// echo $row;
// aaball6969
 
if(isset($_POST["username"]))
{
  $username = $_POST["username"];
  $sql = "SELECT firstName FROM studentInfo WHERE user = '{$username}'";
  $result = mysqli_query($conn, $sql);
  $var = mysqli_fetch_all($result, MYSQLI_ASSOC);
  if(count($var) != 0)
  {
//       echo "<script type='text/javascript'>window.top.location='https://www.google.com//';
//       </script>"; exit;
       header('Location: https://www.google.com//');
       die();
//      echo $var[0]['firstName'];
  }
  else
  {
    echo "invalid"; 
  }
}

?>


