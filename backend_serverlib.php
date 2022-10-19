<?php
//This is a mini library to be imported by the other php files, that handles accessing the database
//All SER functions are defined here

require '/home4/ahsraid1/public_html/database/connect.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

//======== STUDENT_INFO ========//
/*
/* SER_get_student
Get the information of one student
$username - The username of the student in the database
$column - Which column you want from the database (only one column!)
/*
function SER_get_student(int $username, String $column) {
    $sql = 'SELECT '.$column.' FROM student_info WHERE user="'.$username.'"';   //The query sent to the mySQL server
    $result = mysqli_query($conn, $sql);   //Connects to the SQL server and sends the $sql query. The server responds with an object containing the result of the query.
    $var = mysqli_fetch_all($result, MYSQLI_ASSOC);   //Takes the result object from the server, and turns it into an associative array that is easy to reference in our code.
    
    if (count($var) != 1) { //Ensure that exactly one result was found
        echo 'Invalid SQL result in get_student('.$username.'): Number of results is '.count($var).' instead of 1!';
    } else {
        return var[0][$column];
}
*/

//======== TEACHER_INFO ========//


/* SER_get_teacher()
Get the information of one teacher
$id - The ID of the teacher in the database
$column - Which column you want from the database (only one column!)
*/
function SER_get_teacher(int $id, String $column) {
    /*$sql = 'SELECT '.$column.' FROM teacher_info WHERE id='.$id;  //The query sent to the mySQL server
    $result = mysqli_query($conn, $sql);  //Connects to the SQL server and sends the $sql query. The server responds with an object containing the result of the query.
    print_r($sql);
    print_r($result);
    
    $var = mysqli_fetch_all($result, MYSQLI_ASSOC);  //Takes the result object from the server, and turns it into an associative array that is easy to reference in our code.
    print_r($var);
    */
    /*
    if (count($var) != 1) { //Ensure that exactly one result was found
        echo 'Invalid SQL result in get_teacher('.$id.'): Number of results is '.count($var).' instead of 1!';
    } else {
        //These variables will be referenced by slide_6_home.php
        return var[0][$column];
    }
    */
    print_r($id);
    $new_sql = 'SELECT name, room FROM teacher_info WHERE id=1';
        $new_result = mysqli_query($conn, $new_sql);
        $new_var = mysqli_fetch_all($new_result, MYSQLI_ASSOC);
           $print_r($new_result);
        if (count($new_var) != 1) { //Ensure that exactly one result was found
            echo 'Invalid SQL result for teacher_info in LIB: Number of results is '.count($new_var).' instead of 1!';
        } else {
            //These variables will be referenced by slide_6_home.php
            return $new_var[0]['name'];
        }
}


?>
