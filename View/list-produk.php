<?php

include '../koneksi.php';
$data = mysqli_query($koneksi, "select * from user");
while ($d = mysqli_fetch_array($data)) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Rosella Aceh</title>

        <!-- Custom fonts for this template-->
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="../css/sb-admin-2.min.css" rel="stylesheet">
        <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav navbar-dark sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #cc0099;">

                <!-- Sidebar - Brand -->
                <br>
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
                    <div class="sidebar-brand-icon" style="margin-left: -10px;">
                        <img class="img-fluid" src="../img/logo.png" alt="..." width="50%">
                    </div>

                </a>

                <!-- Divider --> <br>
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>


                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Data Produk
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-fw fa-list"></i>
                        <span>List Produk</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="tambah-produk.php">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Tambah Produk </span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="settings.php">
                        <i class="fas fa-fw fa-sun"></i>
                        <span>Settings </span></a>
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
                    <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color: #990073">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 30px;">
                                    <span class="mr-2 d-none d-lg-inline text-white-600 large"><?php echo $d['username']; ?></span>
                                    <i class="fas fa-fw fa-user"></i>
                                <?php
                            }
                                ?>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown" style="margin-right: 15px;">
                                    <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
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
                            <h1 class="h3 mb-0 text-gray-800">List Produk Rosella Aceh</h1>

                        </div>


                        <div class="card-body">

                        </div>


                    </div>
                    <!-- /.container-fluid -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" style="margin: 45px;margin-top:-20px">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Produk Rosella</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Foto Produk</th>
                                            <th>Nama Produk</th>
                                            <th>Keterangan</th>
                                            <th>Harga</th>
                                            <th>Tanggal Inputan</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Foto Produk</th>
                                            <th>Nama Produk</th>
                                            <th>Keterangan</th>
                                            <th>Harga</th>
                                            <th>Tanggal Inputan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php
                                        include '../koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "select * from produk order by tgl_inputan");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><img src="aksi/file/<?= $d['foto'] ?>" alt="" class="" style="width: 300px;"></td>
                                                <td><?php echo $d['nama_produk']; ?></td>
                                                <td><?php echo $d['keterangan']; ?></td>
                                                <td><?php echo $d['harga']; ?></td>
                                                <td><?php echo $d['tgl_inputan']; ?></td>
                                                <td>
                                                    <a href="edit-produk.php?id=<?php echo $d['id']; ?>">EDIT ||</a>
                                                    <a href="aksi/hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>

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
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <a class="btn btn-primary" href="../login.php">Logout</a>
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

            <!-- Page level plugins -->
            <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="../js/demo/datatables-demo.js"></script>

    </body>

    </html>