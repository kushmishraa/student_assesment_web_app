<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adbms";

    $conn = mysqli_connect("$servername" , "$username" , "$password" , "$dbname");

    if(!$conn){

           echo 'not connected';

    }
    else{

        $sid=$_POST['stud_id'];
        $tname=$_POST['title'];
        $tdescription=$_POST['task_description'];
        $tdate=$_POST['due'];

        $id=0;



        $sql = "INSERT INTO task VALUES ( '$id','$sid', '$tname' , '$tdescription' , '$tdate')";

        $result = mysqli_query($conn , $sql);

        if(!$result){


            die("error : ".mysqli_error($conn));

        }
        else{

            echo '<script type="text/javascript">'; 
            echo 'alert("Task Added Successfully");';
            echo 'window.location.href = "../faculty/add_task.php";';
            echo '</script>';

        }



    }



    ?>