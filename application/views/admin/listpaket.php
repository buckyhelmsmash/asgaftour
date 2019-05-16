<html>

<head>

  <?php $this->load->view('admin/_partials/head'); ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php $this->load->view('admin/_partials/sidebar'); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php $this->load->view('admin/_partials/topbar'); ?>


        <!-- Page Content -->
        <div class="container-fluid">
          <div class="card shadow mb-4">
            <div class="card-body">
              <form class="form-horizontal">
                <fieldset>
                  <h1 class="my-4 text-info"><strong>List Paket</strong>
                    <div class="text-right">
                      <!-- <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm3">Tambah</a> -->
                      <button type="button" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#tambahhotel">Tambah</button>
                    </div>
                  </h1>
                  <div class="row">

                      <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-50">
                          <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/furamahotel.jpg" alt=""></a>
                          <div class="card-body">
                          <h5 class="card-title">
                                <a href="#" class="text-info">Nama List Paket</a>
                              </h5>
                            <p class="card-text">Deskripsi.</p>
                          </div>
                          <div class="card-footer">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edithotel"><i class="fa fa-edit"></i>Edit</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Hapus</button>
                          </div>
                        </div>
                      </div>

                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php $this->load->view('admin/_partials/foot'); ?>
</body>

</html>