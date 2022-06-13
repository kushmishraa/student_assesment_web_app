<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adbms";

    $conn = mysqli_connect("$servername" , "$username" , "$password" , "$dbname");

    if(!$conn){

           echo "not connected";

    }

    $name = $_POST['facultyname'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $password = $_POST['password'];



    
    $sql="DELETE FROM faculty WHERE faculty_name= (   
        SELECT * FROM (
             SELECT faculty_name as t FROM faculty where faculty_email='$email' AND faculty_mob_no='$num' AND faculty_password='$password'
            ) AS deleter
             ); "; //**--imp--nested query used--//

    $result = mysqli_query($conn , $sql);
    echo '<script type="text/javascript">'; 
    echo 'alert("Record Deleted");';
    echo 'window.location.href = "view_faculty.php";';
    echo '</script>';
    mysqli_error($conn);

?>