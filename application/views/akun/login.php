<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Institut Teknologi Harapan Bangsa</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/favicon.ico" />

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/backend.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/@icon/dripicons/dripicons.css">

    <link rel='stylesheet' href='<?= base_url(); ?>assets/vendor/fullcalendar/core/main.css' />
    <link rel='stylesheet' href='<?= base_url(); ?>assets/vendor/fullcalendar/daygrid/main.css' />
    <link rel='stylesheet' href='<?= base_url(); ?>assets/vendor/fullcalendar/timegrid/main.css' />
    <link rel='stylesheet' href='<?= base_url(); ?>assets/vendor/fullcalendar/list/main.css' />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/mapbox/mapbox-gl.css">
</head>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <img src="<?= base_url(); ?>assets/images/login/02.png" class="lb-img" alt="">
            <img src="<?= base_url(); ?>assets/images/login/03.png" class="rb-img" alt="">
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-lg-0 mb-4 mt-lg-0 mt-4">
                                <img src="<?= base_url(); ?>assets/images/login/01.png" class="img-fluid w-80" alt="">
                            </div>
                            <div class="col-lg-6">
                                <h2 class="mb-2">Silahkan Masuk</h2>
                                <p>Untuk bisa terkoneksi silahkan masukkan informasi anda.</p>
                                <form action="<?php echo base_url() . 'akun/prosesMasuk'; ?>" method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" name="email" type="email" placeholder=" ">
                                                <label>Email</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" name="password" passwor="password" type="password" placeholder=" ">
                                                <label>Password</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Ingat Saya</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Masuk</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Backend Bundle JavaScript -->
    <script src="<?= base_url(); ?>assets/js/backend-bundle.min.js"></script>

    <!-- Flextree Javascript-->
    <script src="<?= base_url(); ?>assets/js/flex-tree.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/tree.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="<?= base_url(); ?>assets/js/table-treeview.js"></script>

    <!-- Masonary Gallery Javascript -->
    <script src="<?= base_url(); ?>assets/js/masonry.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/imagesloaded.pkgd.min.js"></script>

    <!-- Mapbox Javascript -->
    <script src="<?= base_url(); ?>assets/js/mapbox-gl.js"></script>
    <script src="<?= base_url(); ?>assets/js/mapbox.js"></script>

    <!-- Fullcalender Javascript -->
    <script src='<?= base_url(); ?>assets/vendor/fullcalendar/core/main.js'></script>
    <script src='<?= base_url(); ?>assets/vendor/fullcalendar/daygrid/main.js'></script>
    <script src='<?= base_url(); ?>assets/vendor/fullcalendar/timegrid/main.js'></script>
    <script src='<?= base_url(); ?>assets/vendor/fullcalendar/list/main.js'></script>

    <!-- SweetAlert JavaScript -->
    <script src="<?= base_url(); ?>assets/js/sweetalert.js"></script>

    <!-- Vectoe Map JavaScript -->
    <script src="<?= base_url(); ?>assets/js/vector-map-custom.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="<?= base_url(); ?>assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="<?= base_url(); ?>assets/js/chart-custom.js"></script>

    <!-- slider JavaScript -->
    <script src="<?= base_url(); ?>assets/js/slider.js"></script>

    <!-- app JavaScript -->
    <script src="<?= base_url(); ?>assets/js/app.js"></script>
</body>

</html>