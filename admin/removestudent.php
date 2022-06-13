<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adbms";

    $conn = mysqli_connect("$servername" , "$username" , "$password" , "$dbname");
    mysqli_error($conn);

    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $lastname = $_POST['lastname'];
    $depart = $_POST['depart'];
    $password =$_POST['password'];
    $num = $_POST['num'];
    $id = $_POST['id'];


    
    $sql="DELETE FROM student WHERE first_name= (   
        SELECT * FROM (
             SELECT first_name as t FROM student where student_id='$id'
            ) AS deleter
    ); "; //**--imp--nested query used--//
        

    $result = mysqli_query($conn,$sql);
    echo '<script type="text/javascript">'; 
        echo 'alert("Record Deleted");';
        echo 'window.location.href = "view_students.php";';
        echo '</script>';
    mysqli_error($conn);

?>