<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adbms";
    $conn = mysqli_connect("$servername" , "$username" , "$password" , "$dbname" ) ;
  



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Faculty</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin_dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                   
                </div>
                <div class="sidebar-brand-text mx-3">FACULTY</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="faculty_dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

             <!-- Heading -->
             <div class="sidebar-heading">
                MENU
            </div>

             <!-- Nav Item - users -->
             <li class="nav-item ">
                <a class="nav-link" href="list_students.php">
                <i class="fa fa-user"></i>

                    <span>Task & Feedback</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add_assessment.php">
                <i class="fa fa-star"></i>

                    <span>Assessments</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="add_announcement.php">
                <i class="fa fa-bullhorn"></i>

                    <span>Announcements</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="add_tasks.php">
                <i class="fa fa-tasks"></i>
                    <span>Assign Tasks</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add_feedback.php">
                <i class="fa fa-comment" ></i>
                    <span>Give Feedback</span></a>
            </li> -->
            <br><br>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <div>WELCOME BACK!</div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                          

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                            </a>
                            <!-- Dropdown - Alerts -->
                           

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                            </a>
                            
                            
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                <?php 
                                     $sql = " SELECT faculty_name  FROM `faculty` where faculty_email = '" . $_SESSION['fac_email'] . "' ";
                                    $result = mysqli_query($conn,$sql);
                                    if($result){
                                    while($row = mysqli_fetch_array($result)){ 
                                            $fac_name= $row['faculty_name'] ;                                         
                                            echo $fac_name;
                                            $_SESSION['fac_name']=$fac_name;
                                        }
                                    }
                                    else{ die("error".mysqli_error($conn));    }
                                ?>
                                </span>
                                <i class="fa fa-user-circle"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Make an Announcement:</h1>
                    </div> 
                    <form class="form-horizontal" role="form" method="post" action="announcement.php">
 
                    <div class="form-group" >
								<label class="col-md-3 control-label" for="subject">Announcement For: </label>
								 <div class="col-md-8">
				                  <input class="form-control" type="text" id="subject" name="subject" required>
				               	 </div><br>
	          				 
					            <label class="col-lg-3 control-label"> Details:</label>
					            <div class="col-lg-8">
					              <textarea class="form-control" onkeyup="textCounter(this,'counter',250);" type="text" id="description" name="description" rows="5" required></textarea><br>
					              <input disabled maxlength="3" size="3" value="250" id="counter">
						      		<small>Characters remaining.</small>
						      		<script>
										function textCounter(field,field2,maxlimit)
										{
										 	var countfield = document.getElementById(field2);
										 	if ( field.value.length > maxlimit ) {
										  		field.value = field.value.substring( 0, maxlimit );
										  		return false;
										 	} else {
										  		countfield.value = maxlimit - field.value.length;
										 	}
										}
							  		</script>
				            	</div><br>
					       

                            
								<label class="col-md-3 control-label" for="linkURL">Link URL: </label>
								 <div class="col-md-8">
				                  <input class="form-control" type="text" id="linkURL" name="linkURL" required>
				               	 </div>
	          				  </div><br>

                                <hr>&nbsp;&nbsp;
					              <input type="submit" name="submit" class="btn btn-primary" value="submit">
					              <span></span>
					              <input type="reset" class="btn btn-default" value="Cancel" onclick="goBack()">
                    </div>  
                                    </form>  
                    <script>
		    function goBack() {
			window.location.href = '../faculty/add_announcement.php';
		}
	</script>
                <!-- /.container-fluid -->
                
            </div>
            <!-- End of Main Content -->

          

        </div>
        <!-- End of Content Wrapper -->
      
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../login/facultyLogin.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

     <!-- Page level custom scripts -->
     <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
</body>

</html>