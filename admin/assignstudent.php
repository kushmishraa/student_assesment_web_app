<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adbms";

    $conn = mysqli_connect("$servername" , "$username" , "$password" , "$dbname");
    mysqli_error($conn);

    $stud_id=$_POST['stud_id'];
    $faculty_id=$_POST['faculty_id'];
    $facultyname=$_POST['facultyname'];
    $department=$_POST['department'];

    $id=NULL;

    
    
    $sql = "INSERT INTO assign_student VALUES ( '$id','$stud_id'   , '$department'  , '$faculty_id' , '$facultyname')";
    $result = mysqli_query($conn , $sql);
    if($result){

        echo '<script type="text/javascript">'; 
        echo 'alert("Student Assigned Successfully");';
        echo 'window.location.href = "assign_students.php";';
        echo '</script>';

    }
    else{

        die("error : " .mysqli_error($conn));
    }
    

?>