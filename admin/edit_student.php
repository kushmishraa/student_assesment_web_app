<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adbms";

    $conn = mysqli_connect("$servername" , "$username" , "$password" , "$dbname");

    if(!$conn){

           echo 'not connected';

    }

           $id=$_GET['id'];
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

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
                <div class="sidebar-brand-text mx-3">ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="admin_dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                VIEW 
            </div>

             <!-- Nav Item - users -->
             <li class="nav-item active">
                <a class="nav-link" href="view_students.php">
                <i class="fa fa-graduation-cap"></i>

                    <span>Students</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="view_faculty.php">
                <i class="fa fa-user"></i>
                    <span>Faculty</span></a>
            </li>
           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               MENU
            </div>

            <li class="nav-item">
                <a class="nav-link" href="add_user.php">
                <i class="fa fa-plus"></i>

                    <span>NEW USER</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="assign_student.php">
                <i class="fa fa-arrow-right"></i>


                    <span>ASSIGN STUDENT</span></a>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin 01</span>
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
                                <a class="dropdown-item" href="adminLogin.php" data-toggle="modal" data-target="#logoutModal">
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
                        <h1 class="h3 mb-0 text-gray-800">Edit Student Information</h1>
                    </div>

                     <!-- Collapsable Card  1 Example -->
                     <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Account Details:</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                   
				        <form class="form-horizontal" role="form" method="post" action="editstudent.php">
                        <div class="form-group">
				            <label class="col-lg-3 control-label">Student Id:</label>
				            <div class="col-lg-8">
                            <input type="text" 
                            value="<?php $sql = "SELECT student_id  FROM student WHERE student_id = '$id' ";
                                        $result = mysqli_query($conn,$sql);
                                        if($result)
                                        { 
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                echo $row['student_id'];                                              
                                            }
                                        }
                                  ?>" class="form-control" name="id" readonly>
				            </div>
				          </div>
				          <div class="form-group">
				            <label class="col-lg-3 control-label">First name:</label> 
				            <div class="col-lg-8">
				              <input class="form-control" type="text" name="firstname" value="<?php $sql = "SELECT first_name  FROM student WHERE student_id = '$id' ";
                                        $result = mysqli_query($conn,$sql);
                                        if($result)
                                        { 
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                echo $row['first_name'];                                              
                                            }
                                        }
                                  ?>" required>
				            </div>
				          </div>
				          <div class="form-group">
				            <label class="col-lg-3 control-label">Last Name</label>
				            <div class="col-lg-8">
				              <input class="form-control" type="text" name="lastname"
                              value="<?php $sql = "SELECT last_name  FROM student WHERE student_id = '$id' ";
                                        $result = mysqli_query($conn,$sql);
                                        if($result)
                                        { 
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                echo $row['last_name'];                                              
                                            }
                                        }
                                  ?>"
                              required>
				            </div>
				          </div>
                          <div class="form-group">
				            <label class="col-lg-3 control-label">Date of Birth</label>
				            <div class="col-lg-8">
				              <input class="form-control" type="date" name="dob" 
                              value="<?php $sql = "SELECT dob  FROM student WHERE student_id = '$id' ";
                                        $result = mysqli_query($conn,$sql);
                                        if($result)
                                        { 
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                echo $row['dob'];                                              
                                            }
                                        }
                                  ?>"
                              required>
				            </div>
				          </div>
                          <div class="form-group">
				            <label class="col-lg-3 control-label">Department</label>
				            <div class="col-lg-8">
				              <input class="form-control" type="text" name="department"  
                              value="<?php $sql = "SELECT department  FROM student WHERE student_id = '$id' ";
                                        $result = mysqli_query($conn,$sql);
                                        if($result)
                                        { 
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                echo $row['department'];                                              
                                            }
                                        }
                                  ?>"
                              required>
				            </div>
				          </div>
                          <div class="form-group">
				            <label class="col-md-3 control-label">Password:</label>
				            <div class="col-md-8">
				              <input class="form-control" type="password" id="password" name="password" 
                              value="<?php $sql = "SELECT password  FROM student WHERE student_id = '$id' ";
                                        $result = mysqli_query($conn,$sql);
                                        if($result)
                                        { 
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                echo $row['password'];                                              
                                            }
                                        }
                                  ?>"
                              required>
				            </div>
				          </div>
                          <div class="form-group">
				            <label class="col-lg-3 control-label">Mobile No.</label>
				            <div class="col-lg-8">
				              <input class="form-control" type="text" name="num" maxlength=10 
                              value="<?php $sql = "SELECT mob_no  FROM student WHERE student_id = '$id' ";
                                        $result = mysqli_query($conn,$sql);
                                        if($result)
                                        { 
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                echo $row['mob_no'];                                              
                                            }
                                        }
                                  ?>"
                              required>
				            </div>
				          </div>
				          <div class="form-group">
				            <label class="col-lg-3 control-label">Email:</label>
				            <div class="col-lg-8">
				              <input class="form-control" type="email" name="email"  
                              value="<?php $sql = "SELECT email  FROM student WHERE student_id = '$id' ";
                                        $result = mysqli_query($conn,$sql);
                                        if($result)
                                        { 
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                echo $row['email'];                                              
                                            }
                                        }
                                  ?>"
                              required>
				            </div>
				          </div>
				          <div class="form-group">
				            <label class="col-md-3 control-label"></label>
				            <div class="col-md-8">
				              <input type="submit" name="submit" class="btn btn-primary" value="Save Changes">
				              <span></span>
				              <input type="reset" class="btn btn-default" value="Cancel" onclick="goBack()">
				            </div>
				          </div>
                   
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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
                    <a class="btn btn-primary" href="../login/adminLogin.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>