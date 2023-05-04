
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dinsos Kab Garut</title>
        <link rel="icon" type="image/x-icon" href="<?= base_url() ?>public/image/logogarut.png">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="<?= base_url() ?>public/adminlte/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>public/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>public/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>public/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>public/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>public/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>public/adminlte/plugins/jqvmap/jqvmap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>public/adminlte/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>public/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>public/adminlte/plugins/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" href="<?= base_url() ?>public/adminlte/plugins/summernote/summernote-bs4.min.css">
    </head>
    <body class="hold-transition skin-primary-light fixed sidebar-mini">
        <div class="wrapper">
            <div class="preloader flex-column justify-content-center align-items-center ">
                <img class="animation__shake" src="<?= base_url() ?>public/image/logogarut.png" alt="AdminLTELogo" height="60" width="60">
            </div>

            <nav class="main-header navbar navbar-expand navbar-light bg-danger">
                <?php include "v_head.php" ?>
            </nav>

            <aside class="main-sidebar sidebar-light-danger elevation-4">
                <a href="index3.html" class="brand-link bg-danger text-center">
                <span class="brand-text font-weight-light"><b>DINSOS KAB GARUT</b></span>
                </a>
                
                <?php include "v_sidebar.php" ?>
            </aside>

            <div class="content-wrapper">
                <?php include 'v_content.php'; ?>
            </div>

            <footer class="main-footer">
                <?php include "v_footer.php" ?>
            </footer>
        
        </div>


        <script src="<?= base_url() ?>public/adminlte/plugins/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <script src="<?= base_url() ?>public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/jszip/jszip.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/chart.js/Chart.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/sparklines/sparkline.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/moment/moment.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="<?= base_url() ?>public/adminlte/dist/js/adminlte.js"></script>
        <script src="<?= base_url() ?>public/adminlte/dist/js/pages/dashboard.js"></script>
        <script src="<?= base_url() ?>public/adminlte/plugins/sweetalert2/sweetalert.min.js"></script>
         <script type="text/javascript">
		    $(".alert-dismissible").alert().delay(3000).slideUp('slow');
        </script>

        <?php include 'v_ajax.php'; ?>

</body>
</html>
