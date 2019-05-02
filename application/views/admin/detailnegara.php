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


                <!-- Destinasi Wisata Content -->
                <div class="container-fluid">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <form class="form-horizontal">
                        <fieldset>
                          <h1 class="my-4 text-info"><strong> Destinasi Wisata</strong>
                            <div class="text-right">
                              <!-- <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Tambah</a> -->
                              <button type="button" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#tambahdestinasi">Tambah</button>
                            </div>
                          </h1>
                            <div class="row">
                              <div class="col-lg-4 col-sm-6 portfolio-item">
                                <div class="card h-100">
                                  <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/sin74.jpg" alt=""></a>
                                  <div class="card-body">
                                    <h5 class="card-title">
                                      <a href="#" class="text-info">Taman Merlion</a>
                                    </h5>
                                    <p class="card-text">Deskripsi.</p>
                                  </div>  
                                  <div class="card-footer">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editdestinasi"><i class="fa fa-edit"></i>Edit</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Hapus</button>
                                    
                                  </div>        
                                </div>
                              </div>
                              <div class="col-lg-4 col-sm-6 portfolio-item">
                                <div class="card h-100">
                                  <a href="#"><img class="card-img-top" src="<?= base_url('assets'); ?>\img\bot.jpg" alt=""></a>
                                  <div class="card-body">
                                    <h5 class="card-title">
                                      <a href="#" class="text-info">Singapore Botanic Gardens, Tanglin</a>
                                    </h5>
                                    <p class="card-text">Deskripsi.</p>
                                  </div>  
                                  <div class="card-footer">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editdestinasi"><i class="fa fa-edit"></i>Edit</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Hapus</button>
                                  </div>        
                                </div>
                              </div>
                              <div class="col-lg-4 col-sm-6 portfolio-item">
                                <div class="card h-100">
                                  <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/gardens.jpg" alt=""></a>
                                  <div class="card-body">
                                    <h5 class="card-title">
                                      <a href="#" class="text-info">Gardens by the Bay</a>
                                    </h5>
                                    <p class="card-text">Deskripsi.</p>
                                  </div>  
                                  <div class="card-footer">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editdestinasi"><i class="fa fa-edit"></i>Edit</button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Hapus</button>
                                  </div>        
                                </div>
                              </div>
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </div>

                <!-- Hotel Content -->
                <div class="container-fluid">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <form class="form-horizontal">
                        <fieldset>
                          <h1 class="my-4 text-info"><strong>Hotel</strong>
                          <div class="text-right">
                              <!-- <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm3">Tambah</a> -->
                              <button type="button" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#tambahhotel">Tambah</button>
                          </div>
                          </h1>
                            <div class="row">
                              <div class="col-lg-4 col-sm-6 portfolio-item">
                                <div class="card h-100">
                                  <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/furamahotel.jpg" alt=""></a>
                                    <div class="card-body">
                                      <h5 class="card-title">
                                        <a href="#" class="text-info">Furama City Centre</a>
                                      </h5>
                                      <p class="card-text">Deskripsi.</p>
                                    </div>  
                                    <div class="card-footer">
                                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edithotel"><i class="fa fa-edit"></i>Edit</button>
                                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Hapus</button>
                                    </div>        
                                </div>
                              </div>
                              <div class="col-lg-4 col-sm-6 portfolio-item">
                                <div class="card h-100">
                                  <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/relc.jpg" alt=""></a>
                                    <div class="card-body">
                                      <h5 class="card-title">
                                        <a href="#" class="text-info">RELC International Hotel</a>
                                      </h5>
                                      <p class="card-text">Deskripsi.</p>
                                    </div>  
                                    <div class="card-footer">
                                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edithotel"><i class="fa fa-edit"></i>Edit</button>
                                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Hapus</button>
                                    </div>        
                                </div>
                              </div>
                              <div class="col-lg-4 col-sm-6 portfolio-item">
                                <div class="card h-100">
                                  <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/swissotel.jpg" alt=""></a>
                                    <div class="card-body">
                                      <h5 class="card-title">
                                        <a href="#" class="text-info">Swissotel The Stamford, Singapore</a>
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

<!------------------------------------------------------------------------------------------------------------------->



<!-- Popup Tambah Destinasi Content -->
<div class="modal fade" id="tambahdestinasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Input Destinasi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
              
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="negara">Destinasi</label>  
          <div class="col-lg-10">
            <input id="negara" name="negara" type="text" placeholder="" class="form-control input-md">
          </div>
        </div>

        <!-- File Button --> 
        <div class="form-group">
          <label class="col-md-4 control-label" for="filebutton">Image</label>
          <div class="col-lg-10">
            <input id="filebutton" name="filebutton" class="input-file" type="file">
          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="deskripsi">Deskripsi</label>
          <div class="col-lg-10">                     
            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
          </div>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary btn-lg">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- Popup Edit Destinasi Content -->
<div class="modal fade" id="editdestinasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Destinasi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
              
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="negara">Destinasi</label>  
          <div class="col-lg-10">
            <input id="negara" name="negara" type="text" placeholder="" class="form-control input-md">
          </div>
        </div>

        <!-- File Button --> 
        <div class="form-group">
          <label class="col-md-4 control-label" for="filebutton">Image</label>
          <div class="col-lg-10">
            <input id="filebutton" name="filebutton" class="input-file" type="file">
          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="deskripsi">Deskripsi</label>
          <div class="col-lg-10">                     
            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
          </div>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success btn-lg" onclick="location.href=''">Edit</button>
      </div>
    </div>
  </div>
</div>


<!-- Popup Modal Tambah Hotel -->
<div class="modal fade" id="tambahhotel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Input Hotel</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
                    
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="hotel">Nama Hotel</label>  
          <div class="col-lg-10">
            <input id="hotel" name="hotel" type="text" placeholder="" class="form-control input-md" required="">
          </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="bintang">Bintang</label>
          <div class="col-lg-10"> 
            <label class="radio-inline" for="bintang-0">
            <input type="radio" name="bintang" id="bintang-0" value="1" checked="checked">
            1
            </label> 
            <label class="radio-inline" for="bintang-1">
            <input type="radio" name="bintang" id="bintang-1" value="2">
            2
            </label> 
            <label class="radio-inline" for="bintang-2">
            <input type="radio" name="bintang" id="bintang-2" value="3">
            3
            </label> 
            <label class="radio-inline" for="bintang-3">
            <input type="radio" name="bintang" id="bintang-3" value="4">
            4
            </label> 
            <label class="radio-inline" for="bintang-4">
            <input type="radio" name="bintang" id="bintang-4" value="5">
            5
            </label>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="harga">Harga</label>  
          <div class="col-lg-10">
            <input id="harga" name="harga" type="text" placeholder="" class="form-control input-md" required="">
          </div>
        </div>

        <!-- File Button --> 
        <div class="form-group">
          <label class="col-md-4 control-label" for="image">Gambar</label>
          <div class="col-lg-10">
            <input id="image" name="image" class="input-file" type="file">
          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="deskripsi">Deskripsi</label>
          <div class="col-lg-10">                     
            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
          </div>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary btn-lg">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- Popup Modal Edit Hotel -->
<div class="modal fade" id="edithotel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit Hotel</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
                    
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="hotel">Nama Hotel</label>  
          <div class="col-lg-10">
            <input id="hotel" name="hotel" type="text" placeholder="" class="form-control input-md" required="">
          </div>
        </div>

        <!-- Multiple Radios (inline) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="bintang">Bintang</label>
          <div class="col-lg-10"> 
            <label class="radio-inline" for="bintang-0">
            <input type="radio" name="bintang" id="bintang-0" value="1" checked="checked">
            1
            </label> 
            <label class="radio-inline" for="bintang-1">
            <input type="radio" name="bintang" id="bintang-1" value="2">
            2
            </label> 
            <label class="radio-inline" for="bintang-2">
            <input type="radio" name="bintang" id="bintang-2" value="3">
            3
            </label> 
            <label class="radio-inline" for="bintang-3">
            <input type="radio" name="bintang" id="bintang-3" value="4">
            4
            </label> 
            <label class="radio-inline" for="bintang-4">
            <input type="radio" name="bintang" id="bintang-4" value="5">
            5
            </label>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="harga">Harga</label>  
          <div class="col-lg-10">
            <input id="harga" name="harga" type="text" placeholder="" class="form-control input-md" required="">
          </div>
        </div>

        <!-- File Button --> 
        <div class="form-group">
          <label class="col-md-4 control-label" for="image">Gambar</label>
          <div class="col-lg-10">
            <input id="image" name="image" class="input-file" type="file">
          </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="deskripsi">Deskripsi</label>
          <div class="col-lg-10">                     
            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
          </div>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
      <button class="btn btn-success btn-lg" onclick="location.href=''">Edit</button>
      </div>
    </div>
  </div>
</div>

<!-- Popup Delete -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Hapus</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p class="alert alert-danger"><i class="fa fa-warning"></i>Yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</a>
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>

            </div>
        </div>
    </div>
</div>

</html>