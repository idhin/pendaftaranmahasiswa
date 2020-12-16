<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Daftar Mahasiswa</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table data-table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Tempat, Tanggal Lahir</th>
                                        <th>Asal Sekolah</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $x = 1;
                                    foreach ($mahasiswa as $mhs) { ?>
                                        <tr>
                                            <td><?= $x++; ?></td>
                                            <td><?= $mhs->nama ?></td>
                                            <td><?= $mhs->email ?></td>
                                            <td><?= $mhs->alamat ?><span>
                                                    <p><?= $mhs->kelurahan ?>,<?= $mhs->kecamatan ?>,<?= $mhs->kota ?>,<?= $mhs->provinsi ?></p>
                                                </span></td>
                                            <td><?= $mhs->tempat ?>,<?= $mhs->tglLahir ?></td>
                                            <td><?= $mhs->asalSekolah ?></td>
                                            <td><?= $mhs->status ?></td>
                                        </tr>
                                    <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>