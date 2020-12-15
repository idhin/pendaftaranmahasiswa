<?php $koneksi = mysqli_connect('localhost', 'root', '', 'ithb'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Penerimaan Mahasiswa | ITHB </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/favicon.ico" />

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/backend.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/@icon/dripicons/dripicons.css">

    <link rel='stylesheet' href='<?= base_url(); ?>/assets/vendor/fullcalendar/core/main.css' />
    <link rel='stylesheet' href='<?= base_url(); ?>/assets/vendor/fullcalendar/daygrid/main.css' />
    <link rel='stylesheet' href='<?= base_url(); ?>/assets/vendor/fullcalendar/timegrid/main.css' />
    <link rel='stylesheet' href='<?= base_url(); ?>/assets/vendor/fullcalendar/list/main.css' />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/mapbox/mapbox-gl.css">

</head>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript" src="<?= base_url(); ?>ajax_daerah.js"></script>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <img src="<?= base_url(); ?>/assets/images/login/02.png" class="lb-img" alt="">
            <img src="<?= base_url(); ?>/assets/images/login/03.png" class="rb-img" alt="">
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-lg-0 mb-4 mt-lg-0 mt-4">
                                <img src="<?= base_url(); ?>/assets/images/login/01.png" class="img-fluid w-80" alt="">
                            </div>
                            <div class="col-lg-6">
                                <h2 class="mb-2">Formulir Pendaftaran Online</h2>
                                <p>Silahkan masukkan informasi anda dengan benar.</p>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" name="nama" type="text" placeholder=" ">
                                                <label>Nama lengkap</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" name="email" type="email" placeholder=" ">
                                                <label>Email</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" name="password" type="password" placeholder=" ">
                                                <label>Password</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" name="password2" type="password" placeholder=" ">
                                                <label>Konfirmasi Password</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" name="tempat" type="text" placeholder=" ">
                                                <label>Tempat Lahir</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" name="tglLahir" type="date" placeholder=" ">
                                                <label>Tanggal Lahir</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" name="alamat" type="text" placeholder=" ">
                                                <label>Alamat</label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">

                                                <select name="prop" class="custom-select" id="prop" onchange="ajaxkota(this.value)">
                                                    <option value="">Pilih Provinsi</option>
                                                    <?php
                                                    foreach ($provinsi as $data) {
                                                        echo '<option value="' . $data->id_prov . '">' . $data->nama . '</option>';
                                                    }
                                                    ?>
                                                    <select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <td>
                                                    <select name="kota" class="custom-select" id="kota" onchange="ajaxkec(this.value)">
                                                        <option value="">Pilih Kota</option>
                                                    </select>
                                                </td>
                                                </tr>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <tr id='kec_box'>
                                                    <td>
                                                        <select name="kec" id="kec" class="custom-select" onchange="ajaxkel(this.value)">
                                                            <option value="">Pilih Kecamatan</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="floating-label form-group">
                                                <tr id='kel_box'>
                                                    <td>
                                                        <select name="kel" class="custom-select" id="kel">
                                                            <option value="">Pilih Kelurahan/Desa</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </div>
                                        </div>



                                        <div class="col-lg-12">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Saya menjamin bahwa data tersebut telah benar</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                    <p class="mt-3">
                                        Sudah punya akun? <a href="auth-sign-in.html" class="text-primary">Silahkan Masuk</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Backend Bundle JavaScript -->
    <script src="<?= base_url(); ?>/assets/js/backend-bundle.min.js"></script>

    <!-- Flextree Javascript-->
    <script src="<?= base_url(); ?>/assets/js/flex-tree.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/tree.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="<?= base_url(); ?>/assets/js/table-treeview.js"></script>

    <!-- Masonary Gallery Javascript -->
    <script src="<?= base_url(); ?>/assets/js/masonry.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/imagesloaded.pkgd.min.js"></script>

    <!-- Mapbox Javascript -->
    <script src="<?= base_url(); ?>/assets/js/mapbox-gl.js"></script>
    <script src="<?= base_url(); ?>/assets/js/mapbox.js"></script>

    <!-- Fullcalender Javascript -->
    <script src='<?= base_url(); ?>/assets/vendor/fullcalendar/core/main.js'></script>
    <script src='<?= base_url(); ?>/assets/vendor/fullcalendar/daygrid/main.js'></script>
    <script src='<?= base_url(); ?>/assets/vendor/fullcalendar/timegrid/main.js'></script>
    <script src='<?= base_url(); ?>/assets/vendor/fullcalendar/list/main.js'></script>

    <!-- SweetAlert JavaScript -->
    <script src="<?= base_url(); ?>/assets/js/sweetalert.js"></script>

    <!-- Vectoe Map JavaScript -->
    <script src="<?= base_url(); ?>/assets/js/vector-map-custom.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="<?= base_url(); ?>/assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="<?= base_url(); ?>/assets/js/chart-custom.js"></script>

    <!-- slider JavaScript -->
    <script src="<?= base_url(); ?>/assets/js/slider.js"></script>

    <!-- app JavaScript -->
    <script src="<?= base_url(); ?>/assets/js/app.js"></script>

    <!--  -->

</body>

</html>