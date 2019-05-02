<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#detailpegawai<?= $pegawai->username ?>">Detail</button>
<!-- PopUp Detail Pegawai -->
<div class="modal fade" id="detailpegawai<?= $pegawai->username ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Detail Pegawai</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="<?= base_url('assets'); ?>/img/default.jpg" class="card-img img-thumbnail">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <p class="card-text">
                                        <small class="text-muted">Nama : <?= $pegawai->nama ?> </small>
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">Email : <?= $pegawai->email ?></small>
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">No.HP : <?= $pegawai->no_hp ?></small>
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">No.KTP : <?= $pegawai->no_ktp ?></small>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
        </div>
    </div>
</div>