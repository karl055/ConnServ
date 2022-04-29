<?php 

session_start();
include './hostcon.php';
if(!isset($_SESSION['admin'])){
    header("Location: ../login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ConnServ Admin Confirmation</title>
    <link rel="icon" href="../assets/img/tab_icon.png">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar" style="position: fixed;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-lock"></i>                </div>
                <div class="sidebar-brand-text mx-2">ConnServ Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="./index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="./admin_create.php">
                    <i class="fas fa-fw fas fa-user-alt"></i>
                    <span>Accounts</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Approvals</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Approvals:</h6>
                        <a class="collapse-item" href="./client_approval.php">Client List</a>
                        <a class="collapse-item" href="./business_list.php">Active Merchants</a>
                        <a class="collapse-item" href="./business_approval.php">Merchants Approvals</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>

                <!-- Begin Page Content -->

                
                <div class="container-fluid" style="padding-top: 2rem; margin-left: 250px;">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Add Admin Account</h1>
                    <p class="mb-4">This registration will register the account in database.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">

                            <form action="./includes/createacc.inc.php" method="post" style="display: flex;">
                                <div class="col-4">
                                    <div class="col-12">
                                        <input class="form-control" type="text" name="fname" placeholder="Firstname" required>
                                    </div><br>
                                    <div class="col-12">
                                        <input class="form-control" type="text" name="lname" placeholder="Lastname" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    
                                    <div class="col-12">
                                        <input class="form-control" type="text" name="username" placeholder="Username" required>
                                    </div><br>
                                    <div class="col-12">
                                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="col-12">
                                        <select class="form-control" name="role">
                                            <option value="Admin">Admin</option>
                                            <option value="Moderator">Moderator</option>
                                        </select>
                                    </div><br>
                                    <div class="col-12">
                                        <button type="submit" class="form-control" name="addAdmin" style="background-color: #5e0cc4; color: white;">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Admin Table</h1>
                    <p class="mb-4">This table inlude all the admin registered in database.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Admin ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Admin ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                                $userTblSql = "SELECT * FROM admin_tb ";
                                                if ($userResult = mysqli_query($connect, $userTblSql)) {
                                                    foreach ($userResult as $userRow) {
                                                        ?>

                                            <tr>
                                                <td><?php echo $userRow['adminId'];?></td>
                                                <td><?php echo $userRow['admin_firstname'];?></td>
                                                <td><?php echo $userRow['admin_lastname'];?></td>
                                                <td><?php echo $userRow['admin_username'];?></td>
                                                <td><?php echo $userRow['admin_role'];?></td>
                                                
                                                
                                            </tr>
                                                        <?php

                                                    }
                                                }
                                            ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright @ 2019 All Rights Reserved. Connserv Philippines Corporation</span>
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


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>