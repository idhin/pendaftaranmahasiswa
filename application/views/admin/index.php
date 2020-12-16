<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="d-flex align-items-center justify-content-between welcome-content">
                    <div class="navbar-breadcrumb">
                        <h5 class="mb-0">Selamat Datang di Dashboard</h5>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ul>
                        </nav>
                    </div>
                    <div class="btn-group btn-group-toggle">
                        <a class="button btn btn-warning mr-2 button-icon rounded-small" target="_blank" href="#"><i class="ri-download-2-line m-0"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body iq-total-content">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <p class="mb-1">Total Mahasiswa</p>
                        </div>
                        <h4><span class="counter"><?= $totalMhs; ?></span><i class="ri-add-line text-danger"></i></h4>
                        <div class="d-flex align-items-center justify-content-between mt-3 position-relative">
                            <!-- <div class="iq-progress-bar bg-danger-light mt-3 iq-progress-bar-icon">
                                    <span class="bg-danger iq-progress progress-1" data-percent="1">
                                        <span class="progress-text text-danger">1%</span>
                                    </span>
                                </div> -->
                            <div id="total-chart-01" class="ml-4"></div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-lg-12 col-xl-8">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Pendaftar Terakhir</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <span class="dropdown-toggle" id="dropdownMenuButton7" data-toggle="dropdown">
                                    <i class="ri-more-2-fill"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton7">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 table-borderless tbl-server-info">
                                <thead>
                                    <tr class="text-primary">
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Asal Daerah</th>
                                        <th scope="col">Tanggal Mendaftar</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $x = 1;
                                    foreach ($mahasiswa as $mhs) { ?>
                                        <tr>
                                            <td><?= $x++; ?></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="<?= base_url(); ?>assets/images/user/02.jpg" alt="profile" class="img-fluid rounded avatar-40 text-center">
                                                    <div class="pl-3">
                                                        <h6><?= $mhs->nama; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?= $mhs->kota ?> <span>
                                                    <p><?= $mhs->provinsi ?></p>
                                                </span></td>
                                            <td><?= $mhs->createdAt; ?></td>
                                            <td><?= $mhs->email ?></td>
                                            <td>
                                                <div class="badge badge-warning"><?= $mhs->status; ?></div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>