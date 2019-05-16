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
        <div class="container">

          <h1 class="my-4 text-info"><strong> List Negara</strong></h1>

          <div class="card-columns">
            <?php foreach ($list_negara as $list_negara) : ?>

              <div class="card h-70">
                <img src="<?php echo base_url('upload/negara/' . $list_negara->gambar_negara) ?>" height="200" />
                <div class="card-img-overlay">
                  <h4 class="card-title">
                    <a href="<?= base_url('admin/negara/detail/' . $list_negara->id_negara); ?>" class="btn btn-light">
                      <?php echo $list_negara->nama_negara ?>
                    </a>
                  </h4>
                </div>
              </div>

            <?php endforeach; ?>

          </div>
        </div>

      </div>
    </div>
  </div>

  <?php $this->load->view('admin/_partials/foot'); ?>
</body>

</html>