<?php declare(strict_types=1);
//This is a mini library to be imported by the other php files, that handles accessing the database


//======== STUDENT_INFO ========//


//======== TEACHER_INFO ========//


/*
Get the information of one teacher
$id - The ID of the teacher in the database
$column - Which column you want from the database (only one column!)
*/
function beser_get_teacher(int $id, String $column) {
    $sql = 'SELECT '.$column.' FROM teacher_info WHERE id='.$new_id;  //The query sent to the mySQL server
    $result = mysqli_query($conn, $sql);  //Connects to the SQL server and sends the $sql query. The server responds with an object containing the result of the query.
    $var = mysqli_fetch_all($result, MYSQLI_ASSOC);  //Takes the result object from the server, and turns it into an associative array that is easy to reference in our code.

    if (count($var) != 1) { //Ensure that exactly one result was found
        echo 'Invalid SQL result in get_teacher('.$id.'): Number of results is '.count($var).' instead of 1!';
    } else {
        //These variables will be referenced by slide_6_home.php
        return var[0][$column];
    }
}


?>
