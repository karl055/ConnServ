
<?php include './hostcon.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ConnServ Business Approval</title>
    <link rel="icon" href="/assets/img/tab_icon.png">

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

        <?php include './navbar.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Business Approval Page</h1>
                    <p class="mb-4">This table where the admins will manually accept and review  newly 
                        registered business.
                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">New Clients</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="./includes/business_approval.inc.php" method="post">
                                 
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Business ID</th>
                                                <th>Business Name</th>
                                                <th>Owner Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Business ID</th>
                                                <th>Business Name</th>
                                                <th>Owner Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                                $businessTblSql = "SELECT * FROM business_tb WHERE business_status = 'active' ";
                                                $businessOwnerTblSql = "SELECT business_tb.*, user_tb.*
                                                FROM user_tb
                                                RIGHT JOIN business_tb ON business_tb.ownerId = user_tb.user_identity
                                                WHERE business_tb.business_approval = 'pending' ";
                                                if ($businessResult = mysqli_query($connect, $businessOwnerTblSql)) {
                                                    foreach ($businessResult as $businessRow) {
                                                        ?>

                                            <tr>
                                                <td><?php echo $businessRow['business_id'];?></td>
                                                <td><?php echo $businessRow['business_name'];?></td>
                                                <td><?php echo $businessRow['user_firstname'] .' '. $businessRow['user_lastname'];?></td>
                                                <td><?php echo $businessRow['business_email'];?></td>
                                                <td><?php echo $businessRow['business_mobile'];?></td>
                                                <td><?php echo $businessRow['house_no'] .' '. $businessRow['business_street'] .' '. 
                                                $businessRow['business_barangay'];?></td>
                                                
                                                <td><a href="./includes/business_approval.inc.php?cancel=<?php echo $businessRow['business_id']; ?>" name="approvebtn" type="submit" class="btn-sm btn-primary btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                    <span class="text">Approve</span>
                                                    </a></td>
                                            </tr>
                                                        <?php

                                                    }
                                                }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </form>
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

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