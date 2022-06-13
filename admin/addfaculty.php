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

            $name=$_POST['facultyname'];
            $password=$_POST['password'];
            $number=$_POST['num'];
            $email=$_POST['email'];
            $id=0;



            $sql = "INSERT INTO faculty VALUES ( '$id','$name'   , '$password'  , '$email' , '$number')";

            $result = mysqli_query($conn , $sql);

            if(!$result){


                die("error : ".mysqli_error($conn));

            }
            else{

                echo '<script type="text/javascript">'; 
                echo 'alert("Record Added Successfully");';
                echo 'window.location.href = "view_faculty.php";';
                echo '</script>';

            }



    }



    ?>