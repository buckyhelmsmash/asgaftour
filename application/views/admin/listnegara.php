<html>

<head>

<<<<<<< HEAD
  <?php $this->load->view('admin/_partials/head'); ?>
=======
    <?php $this->load->view('admin/_partials/head'); ?>
>>>>>>> 6e888abf136d047df3d185605fa9cb3d0ef7f31c

</head>

<body id="page-top">

<<<<<<< HEAD
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
                    <a href="<?= base_url('admin/negara/' . $list_negara->id_negara); ?>" class="btn btn-light">
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
=======
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
                      <div class="card h-70">
                        <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/sin74.jpg" alt=""></a>
                        <div class="card-img-overlay">
                          <h4 class="card-title">
                            <button type="button" onclick="location.href='<?= base_url('admin/detailnegara'); ?>'" class="btn btn-light">Singapore</button>
                          </h4>
                        </div>        
                      </div>
                      
                      <div class="card h-70">
                        <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/bkk4.jpg" alt=""></a>
                        <div class="card-img-overlay">
                          <h4 class="card-title">
                            <button type="button" onclick="location.href='<?= base_url('admin/listnegara'); ?>'" class="btn btn-light">Bangkok</button>
                          </h4>
                        </div>
                      </div>
                      
                      <div class="card h-70">
                        <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/kl.jpg" alt=""></a>
                        <div class="card-img-overlay">
                          <h4 class="card-title">
                            <button type="button" onclick="location.href='<?= base_url('admin/listnegara'); ?>'" class="btn btn-light">Kuala Lumpur</button>
                          </h4>
                        </div>
                      </div>

                    </div>       
                </div>

            </div>
        </div>
    </div>

    <?php $this->load->view('admin/_partials/foot'); ?>
</body>

</html>


>>>>>>> 6e888abf136d047df3d185605fa9cb3d0ef7f31c
