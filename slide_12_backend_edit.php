<?php
    require '/home4/ahsraid1/public_html/database/connect.php';

    /*
    echo "<script>alert(\"backend edit\")</script>";
    if(isset($_POST['remove-0])) {
        echo "<script>alert(\"remove 0\")</script>";
    }
    */

if(isset($_POST['1_k'])){
    $sql = 'UPDATE student_info SET newTeacher = 2 WHERE email = "habbah4377@inst.hcpss.org"';
    $result = mysqli_query($conn, $sql);
} 

?>
