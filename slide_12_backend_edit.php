<?php
    require '/home4/ahsraid1/public_html/database/connect.php';

    $teacher_id = 75;

    /*
    echo "<script>alert(\"backend edit\")</script>";
    if(isset($_POST['remove-0])) {
        echo "<script>alert(\"remove 0\")</script>";
    }
    */

    /*
    if(isset($_POST['1_k'])){
        $sql = 'UPDATE student_info SET newTeacher = 2 WHERE email = "habbah4377@inst.hcpss.org"';
        $result = mysqli_query($conn, $sql);
    } */
    
    echo "test: ".$_POST['room'];
    if(isset($_POST['room'])){
        $address = $_POST['room'];
        echo "test2: ".$address;
        $sql = 'UPDATE teacher_info SET room = ".$_POST['room']." WHERE id = '.$teacher_id;  //$teacher_id declared in slide_12_backend_get.php
        $result = mysqli_query($conn, $sql);
    }

?>
