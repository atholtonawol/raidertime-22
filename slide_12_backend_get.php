<?php
//echo("SLIDE 12 GET<br>");

require '/home4/ahsraid1/public_html/database/connect.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 



$teacher_id = 75;

  
//if(isset($_POST['username']))
if(true) {
    //==== Connect to teacher_info ====/
    $sql = 'SELECT name, room FROM `teacher_info` WHERE id='.$teacher_id;
    $result = mysqli_query($conn, $sql);
    $var = mysqli_fetch_all($result, MYSQLI_ASSOC); 
    
 
    if (count($var) != 1) { //Ensure that exactly one result was found
        echo 'Invalid SQL result for teacher_info: Number of results is '.count($var).' instead of 1!';
    } else {
        //These variables will be referenced by slide_12_teacher_home.php
        $teacher_name = $var[0]['name'];
        $teacher_room = $var[0]['room'];
    }
        
    //==== Connect to student_info ====/
    $sql = 'SELECT fullName FROM `student_info` WHERE newTeacher='.$teacher_id;
    $result = mysqli_query($conn, $sql);
    $var = mysqli_fetch_all($result, MYSQLI_ASSOC); 
    
 
    if (count($var) <= 0) { //Ensure that exactly one result was found
        echo 'Invalid SQL result for student_info: No students found!';
    } else {
        //These variables will be referenced by slide_12_teacher_home.php
        $student_list = array();
        foreach($var as $i) {
          $student_list[] = $i['fullName']; //Appends student name to the array, PHP syntax is weird
        }
    }

    
} else {
    echo "isset post username error";
}



?>
