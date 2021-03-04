<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WEB API CORONA</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url();?>/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url();?>/template/dist/css/adminlte.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- laflet js -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="<?= base_url();?>/template/dist/img/AdminLTELogo.png" alt="Kawal Corona"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Web Api Corona</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/Home" class="nav-link fas fa-home "> Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://kawalcorona.com/api/" class="nav-link fas fa-fire"> API Untuk
                                developer</a>
                        </li>
                        <li>
                            <a href="/home/pemetaan_nasional" class="nav-link fas fa-map-marked-alt"> Peta Sebaran</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- isi konten -->
        <!-- <div class="container-fluid">
            
        </div> -->


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <?= $this->renderSection('pages'); ?>

                        </div>
                        <!-- /.card -->

                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- isi konten -->


    </div>
    <!-- ./wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">

        <!-- php timezone format -->
        <?php
            date_default_timezone_set("Asia/Jakarta");
            ?>
        <!-- php timezone format -->
        <!-- To the right -->
        <div class="text-left">
            <strong>Date & Time <?= date("d-m-Y");?></strong>
        </div>
    </footer>

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url();?>/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url();?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url();?>/template/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url();?>/template/dist/js/demo.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url();?>/template/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url();?>/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url();?>/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url();?>/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url();?>/template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url();?>/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url();?>/template/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url();?>/template/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url();?>/template/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url();?>/template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url();?>/template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url();?>/template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>