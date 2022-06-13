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

        $subject=$_POST['subject'];
        $details=$_POST['description'];
        $links=$_POST['linkURL'];
        $id=0;



        $sql = "INSERT INTO announcement VALUES ( '$id',NOW() , '$subject' , '$details' , '$links')";

        $result = mysqli_query($conn , $sql);

        if(!$result){


            die("error : ".mysqli_error($conn));

        }
        else{

            echo '<script type="text/javascript">'; 
            echo 'alert("Record Added Successfully");';
            echo 'window.location.href = "../faculty/add_announcement.php";';
            echo '</script>';

        }



    }



    ?>