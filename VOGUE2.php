


 
<?php
 require '/home4/ahsraid1/public_html/database/connect.php';
 require 'slide_2_log_in.php';
 
 
 
 if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 }
  echo "hi"; 
 
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


//SENDS USER TO NEXT PAGE IF THE USERNAME ENTERED IS CORRECT
if(isset($_POST["username"]) && isset($_POST["lname"]))
{
  $username = $_POST["username"];
  $password = $_POST['lname'];
  echo $username;
 echo $password;
  $sql = "SELECT firstName FROM studentInfo WHERE user = '{$username}'";
  $result = mysqli_query($conn, $sql);
  $var = mysqli_fetch_all($result, MYSQLI_ASSOC);
  if(count($var) != 0)
  {
   
    
//     echo "<script type='text/javascript'>window.top.location='slide_5_new_password.php';
//     </script>"; exit;
   $sql = "UPDATE studentInfo SET password = '{$password}' WHERE user = '{$username}'";
   $result = mysqli_query($conn, $sql);
       
//        header("Location: 'https://www.google.com//'");
//        exit;
//      echo $var[0]['firstName'];
   
  }
  else
  {
    echo "invalid"; 
  }
}

?>


