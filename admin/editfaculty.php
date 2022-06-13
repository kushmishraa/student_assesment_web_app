<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adbms";

    $conn = mysqli_connect("$servername" , "$username" , "$password" , "$dbname");
    mysqli_error($conn);


    $facultyname=$_POST['facultyname'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $num=$_POST['num'];
    $id=$_POST['id'];

    $sql = "UPDATE faculty SET faculty_name = '$facultyname'  , faculty_password = ' $password ' , faculty_email = ' $email ' , faculty_mob_no = '$num' WHERE faculty_id = '$id' ";
    $result = mysqli_query($conn , $sql);

    if($result){

        echo '<script type="text/javascript">'; 
        echo 'alert("Updated Successfully");';
        echo 'window.location.href = "view_faculty.php";';
        echo '</script>';

    }
    else{

            die("error : ". mysqli_error($conn));
    }
    
    ?>

