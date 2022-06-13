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
        $fname=$_POST['title'];
        $pos=$_POST['positive_description'];
        $neg=$_POST['negative_description'];


        $id=0;



        $sql = "INSERT INTO feedback VALUES ( '$id','$sid', '$fname' , '$pos' , '$neg',NOW())";

        $result = mysqli_query($conn , $sql);

        if(!$result){


            die("error : ".mysqli_error($conn));

        }
        else{

            echo '<script type="text/javascript">'; 
            echo 'alert("Feedback Added Successfully");';
            echo 'window.location.href = "../faculty/add_feed.php";';
            echo '</script>';

        }



    }



    ?>