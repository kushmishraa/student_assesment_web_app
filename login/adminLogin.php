<!-- Login Page for Admin -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
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


<script>
		function validate(){
		var username=document.admin.adminname.value;
		var password=document.admin.password.value;
		if(username =="admin" && password =="admin123"){
            alert("Successful Login.");

				window.open('../admin/admin_dashboard.php');
		}

		else{
				alert("Incorrect Credentials. Please Try Again.");
		}
		}
		</script>

</head>
<body><br><br><br>
<div class="login-form">    
    <form onsubmit="validate()" method="post" name="admin">
		<div class="avatar"> <img src="../img/images.png"></div>
       
    	<h4 class="modal-title">ADMIN LOGIN</h4>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required" name="adminname" value="" >
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password"  required="required" name="password" value="" >
        </div>
       
        <input type="submit" class="btn btn-primary btn-block btn-lg" name="login" value="Sign in"><br> <hr>  
        <div class="text-center small">Authorized Only :<a href="../login/facultyLogin.php">&nbsp;FACULTY LOGIN</a></div>
        <div class="text-center small">Are you a Student? <a href="../login/studentLogin.php">STUDENT LOGIN</a></div>
 
    </form>			
    
   
   
</div>
</body>
</html>   
