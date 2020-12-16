<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | Institut Teknologi Harapan Bangsa</title>

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

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

        <div class="iq-sidebar  sidebar-default ">
            <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                <a href="index.html" class="header-logo">
                    <img src="<?= base_url(); ?>assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                </a>
                <div class="iq-menu-bt-sidebar">
                    <i class="las la-bars wrapper-menu"></i>
                </div>
            </div>
            <div class="data-scrollbar" data-scroll="1">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li>
                            <a href="<?= base_url(); ?>akun/kontrol" class="">
                                <i class="las la-home iq-arrow-left"></i><span>Dashboard</span>
                            </a>
                            <ul id="home" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>akun/kontrolMahasiswa" class="">
                                <i class="las la-university iq-arrow-left"></i><span>Mahasiswa</span>
                            </a>
                            <ul id="home" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="p-3"></div>
            </div>
        </div>
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                        <i class="ri-menu-line wrapper-menu"></i>
                        <a href="index.html" class="header-logo">
                            <img src="<?= base_url(); ?>assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                        </a>
                    </div>
                    <div class="iq-search-bar device-search">
                        <form action="#" class="searchbox">
                            <input type="text" class="text search-input" placeholder="Type here to search...">
                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        </form>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="change-mode">
                            <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                                <div class="custom-switch-inner">
                                    <p class="mb-0"> </p>
                                    <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                    <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                        <span class="switch-icon-left"><i class="a-left"></i></span>
                                        <span class="switch-icon-right"><i class="a-right"></i></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                            <i class="ri-menu-3-line"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                <li class="nav-item nav-icon search-content">
                                    <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                        <form action="#" class="searchbox p-2">
                                            <div class="form-group mb-0 position-relative">
                                                <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                                <a href="#" class="search-link"><i class="las la-search"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </li>

                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-mail-line"></i>
                                        <span class="bg-primary count-mail"></span>
                                    </a>

                                </li>
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-notification-line"></i>
                                        <span class="bg-primary dots"></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">

                                    </div>
                                </li>

                                <li class="nav-item iq-full-screen"><a href="#" class="" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
                                <li class="caption-content">
                                    <a href="#" class="iq-user-toggle">
                                        <img src="<?= base_url(); ?>assets/images/user/1.jpg" class="img-fluid rounded" alt="user">
                                    </a>
                                    <div class="iq-user-dropdown">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between align-items-center mb-0">
                                                <div class="header-title">
                                                    <h4 class="card-title mb-0">Profil Admin</h4>
                                                </div>
                                                <div class="close-data text-right badge badge-primary cursor-pointer"><i class="ri-close-fill"></i></div>
                                            </div>
                                            <div class="data-scrollbar" data-scroll="2">
                                                <div class="card-body">
                                                    <div class="profile-header">
                                                        <div class="cover-container text-center">
                                                            <img src="<?= base_url(); ?>assets/images/user/1.jpg" alt="profile-bg" class="rounded img-fluid avatar-80">
                                                            <div class="profile-detail mt-3">
                                                                <h3>Admin ITHB</h3>
                                                                <p class="mb-1">Institut Teknologi Harapan Bangsa</p>
                                                            </div>
                                                            <a href="<?= base_url(); ?>akun/keluar" class="btn btn-primary">Keluar</a>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="p-3"></div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                        </li>
                        </ul>
                    </div>
            </div>
            </nav>
        </div>
    </div>