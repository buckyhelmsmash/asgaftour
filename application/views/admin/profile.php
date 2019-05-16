    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <div class="card mb-3" style="max-width: 540px;" >
        <div class="row no-gutters">
            <div class="col-md-6">
            <img src="<?= base_url('assets'); ?>/img/default.jpg" class="card-img">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['nama']; ?></h5>
                    <p class="card-text"><small class="text-muted">No. HP : <?= $user['hp']; ?></small></p>
                    <p class="card-text"><small class="text-muted">No KTP : <?= $user['ktp']; ?></small></p>
                    <p class="card-text"><small class="text-muted">Email : <?= $user['email']; ?></small></p>
                    <p class="card-text"><small class="text-muted">No Passpor : <?= $user['passpor']; ?></small></p>
                    <p class="card-text"><small class="text-muted">Tgl Lahir : <?= $user['tgl_lahir']; ?></small></p>
                    <p class="card-text"><small class="text-muted">Member sejak <?= date('d F Y', $user['date_created']) ?></small></p>
                </div>
            </div>
        </div>
    </div>

    </div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

