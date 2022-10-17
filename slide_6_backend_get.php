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


/*
   $sql = 'SELECT firstName, lastName FROM student_info WHERE user="kdamav7949"';
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
*/

//$userName = $_POST["username"];
$userName = "ashahe8615";


//if(isset($_POST['username']))
if(true)
  {
    //Connect to student_info
    $s_sql = 'SELECT firstName, lastName, hrTeacher, newTeacher FROM student_info WHERE user="'.$userName.'"';   //The query sent to the SQL server (mySQL?)
    $s_result = mysqli_query($conn, $sql);   //Connects to the SQL server and sends the $s_sql query. The server responds with an object containing the result of the query.
    $s_var = mysqli_fetch_all($result, MYSQLI_ASSOC);   //Takes the result object from the server, and turns it into an associative array that is easy to reference in our code.
 
    
    if (count($s_var) != 1) { //Ensure that exactly one result was found
      echo 'Invalid SQL result: Number of results is '.count($s_var).' instead of 1!';
    } else {
      //These variables will be referenced by slide_6_home.php
      $first_name = $s_var[0]['firstName'];
      $last_name = $s_var[0]['lastName'];
      $hr_teacher = $s_var[0]['hrTeacher'];
      $new_teacher = $s_var[0]['newTeacher'];
     
      //Connect to teacher_info
      $t_sql = 'SELECT name, room FROM teacher_info WHERE id='.$hr_teacher;   //The query sent to the SQL server (mySQL?)
      $t_result = mysqli_query($conn, $sql);   //Connects to the SQL server and sends the $t_sql query. The server responds with an object containing the result of the query.
      $t_var = mysqli_fetch_all($result, MYSQLI_ASSOC);   //Takes the result object from the server, and turns it into an associative array that is easy to reference in our code.


      if (count($t_var) != 1) { //Ensure that exactly one result was found
        echo 'Invalid SQL result: Number of results is '.count($t_var).' instead of 1!';
      } else {
        //These variables will be referenced by slide_6_home.php
        $first_name = $s_var[0]['firstName'];
        $last_name = $s_var[0]['lastName'];

      }

  
  } else {
    echo "isset post username error";
  }



?>
