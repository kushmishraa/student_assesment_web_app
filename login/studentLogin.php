<?php
session_start();
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"adbms");
if(isset($_REQUEST["submit"])){

  $email=$_REQUEST["email_id"];
  $pass=$_REQUEST["password"];
  $query=mysqli_query($link,"select * from student where email='$email' && password='$pass'");
  $rowcount=mysqli_num_rows($query);
  if($rowcount==true){
    $_SESSION['s_email']=$email;
    //$_SESSION['id']=$row['student_id'];
    //$id= $row['student_id'];
    
    
    echo '<script>alert("Login Successful!")</script>';
    header("refresh:1; url=../student/student_dashboard.php");
}
else{
       echo '<script>alert("invalid credentials!")</script>';
}

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Login</title>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
 <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

<link rel="stylesheet" href="../css/login.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body><br><br><br>
<div class="login-form">    
    <form action="studentLogin.php" method="post">
    <div class="avatar"> <img src="../img/images.png"></div>
    	<h4 class="modal-title">Login to Your Account</h4>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email-id" required="required" name="email_id" >
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password"  required="required" name="password" >
        </div>
        
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Submit" name="submit"> <hr>  
        <div class="text-center small">Authorized Only :&nbsp;<a href="../login/facultyLogin.php">FACULTY</a>&nbsp;|&nbsp;<a href="../login/adminLogin.php">&nbsp;ADMIN</a> </div>
    
    </form>			
    
</div>
</body>
</html>   
