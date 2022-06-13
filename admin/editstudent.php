<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adbms";

    $conn = mysqli_connect("$servername" , "$username" , "$password" , "$dbname");
    mysqli_error($conn);

    $id=$_POST['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $num=$_POST['num'];
    $password=$_POST['password'];
    $department=$_POST['department'];
    $dob=$_POST['dob'];
    $id=$_POST['id'];


    $sql = "UPDATE student SET first_name='$firstname' , last_name='$lastname' , dob='$dob' , department = '$department' , password='$password' , mob_no = '$num' , email = '$email' WHERE student_id = '$id'";
    $result=mysqli_query($conn,$sql);

    if($result){

        echo '<script type="text/javascript">'; 
        echo 'alert("Updated Successfully");';
        echo 'window.location.href = "view_students.php";';
        echo '</script>';
    }
    else{

        die("error" . mysqli_error($conn));
    }
          
    ?>