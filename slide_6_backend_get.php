<?php
//echo("SLIDE 6 GET<br>");

require '/home4/ahsraid1/public_html/database/connect.php';
//require 'backend_serverlib.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 



//$userName = $_POST["username"];
$userName = "ashahe8615";
//$userName = "kdamav7949";
//$userName = "aaball6969";


//if(isset($_POST['username']))
if(true) {
    //==== Connect to student_info ====/
    $s_sql = 'SELECT firstName, lastName, hrTeacher, newTeacher FROM student_info WHERE user="'.$userName.'"';   //The query sent to the SQL server (mySQL?)
    $s_result = mysqli_query($conn, $s_sql);   //Connects to the SQL server and sends the $s_sql query. The server responds with an object containing the result of the query.
    $s_var = mysqli_fetch_all($s_result, MYSQLI_ASSOC);   //Takes the result object from the server, and turns it into an associative array that is easy to reference in our code.
    
 
    if (count($s_var) != 1) { //Ensure that exactly one result was found
        echo 'Invalid SQL result for student_info: Number of results is '.count($s_var).' instead of 1!';
    } else {
        //These variables will be referenced by slide_6_home.php
        $first_name = $s_var[0]['firstName'];
        $last_name = $s_var[0]['lastName'];
        
        $hr_id = $s_var[0]['hrTeacher'];
        $new_id = $s_var[0]['newTeacher'];
        
        
        //==== Connect to teacher_info to grab Homeroom teacher info ====//
        
        $hr_sql = 'SELECT name FROM teacher_info WHERE id='.$hr_id;
        $hr_result = mysqli_query($conn, $hr_sql);
        $hr_var = mysqli_fetch_all($hr_result, MYSQLI_ASSOC);

        if (count($hr_var) != 1) { //Ensure that exactly one result was found
            echo 'Invalid SQL result for teacher_info: Number of results is '.count($hr_var).' instead of 1!';
        } else {
            //These variables will be referenced by slide_6_home.php
            $hr_name = $hr_var[0]['name'];
        }
        
        
        //==== Connect to teacher_info to grab New teacher info ====//
        
        $new_sql = 'SELECT name, room FROM teacher_info WHERE id='.$new_id;
        $new_result = mysqli_query($conn, $new_sql);
        $new_var = mysqli_fetch_all($new_result, MYSQLI_ASSOC);

        if (count($new_var) != 1) { //Ensure that exactly one result was found
            echo 'Invalid SQL result for teacher_info: Number of results is '.count($new_var).' instead of 1!';
        } else {
            //These variables will be referenced by slide_6_home.php
            $new_name = $new_var[0]['name'];
            $new_room = $new_var[0]['room'];
        }
        
        
        //$hr_name = SER_get_teacher($hr_id, 'name');
        // $new_name = SER_get_teacher($new_id, 'name');
        // $new_room = SER_get_teacher($new_id, 'room');
        
        //==== Connect to teacher_info to grab list of teachers ====//
        $list_sql = 'SELECT name, room FROM teacher_info;
        $list_result = mysqli_query($conn, $list_sql);
        $list_var = mysqli_fetch_all($list_result, MYSQLI_ASSOC);
        
        $list_teacher = array(); //2D array: [name, room]
        
        if (count($new_var) != 1) { //Ensure that exactly one result was found
            echo 'Invalid SQL result for teacher_info: Number of results is '.count($new_var).' instead of 1!';
        } else {
            while($row = mysqli_fetch_array($result)){ //Iterates through table
                //FRONT END FIGURE OUT FORMATTING. ALIGN THE ROOM NUMBER TO THE RIGHT
                //echo "<option>". $row['teachers'].$row['room']."</option>";
                $list_teacher[] = array($row['name'], $row['room']); //Appends student name to the array, PHP syntax is weird
            }
        }

        
    } //if one result was found
    
} else { //if isset username
    echo "isset post username error";
}



?>
