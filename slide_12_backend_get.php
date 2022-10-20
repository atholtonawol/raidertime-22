<?php
echo("SLIDE 12 GET<br>");

require '/home4/ahsraid1/public_html/database/connect.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 



//$userName = $_POST["username"];
$userName = "ashahe8615";
//$userName = "kdamav7949";
//$userName = "aaball6969";

$teacher_id = 75;

$arr = array("hello", "world", "yes");
  
//if(isset($_POST['username']))
if(true) {
    //==== Connect to teacher_info ====/
    $sql = 'SELECT name, room FROM `teacher_info` WHERE id='.$teacher_id;
    $result = mysqli_query($conn, $sql);
    $var = mysqli_fetch_all($result, MYSQLI_ASSOC); 
    
 
    if (count($var) != 1) { //Ensure that exactly one result was found
        echo 'Invalid SQL result for student_info: Number of results is '.count($var).' instead of 1!';
    } else {
        //These variables will be referenced by slide_12_teacher_home.php
        $teacher_name = $var[0]['name'];
        $teacher_room = $var[0]['room'];
    }
        
    //==== Connect to student_info ====/
    $sql = 'SELECT fullName FROM `student_info` WHERE newTeacher='.$teacher_id;
    $result = mysqli_query($conn, $sql);
    $var = mysqli_fetch_all($result, MYSQLI_ASSOC); 
    
 
    if (count($var) != 1) { //Ensure that exactly one result was found
        echo 'Invalid SQL result for student_info: Number of results is '.count($var).' instead of 1!';
    } else {
        //These variables will be referenced by slide_12_teacher_home.php
        foreach($var as $i) {
          print_r($i['fullName']);
          }
        
    }

    
} else {
    echo "isset post username error";
}



?>
