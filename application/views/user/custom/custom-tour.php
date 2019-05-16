
 <!-- Page Content -->
 <div class="container">

<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">Buat Tripmu
  <small>Sekarang</small>
</h1>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?= base_url(); ?>">Home</a>
  </li>
  <li class="breadcrumb-item">
    <a href="<?= base_url('custom'); ?>">Custom Tour</a>
  </li>
  <li class="breadcrumb-item active">Booking Sekarang</li>
</ol>

<!-- Intro Content -->
<div class="row">
  <div class="col-lg-6">
    <img class="img-fluid rounded mb-4" src="<?= base_url(); ?>assets/img/sin3.jpg" alt="">
  </div>
  <div class="col-lg-6">
    <h2>Trip To Kuala Lumpur</h2>
    <div class="row">
        <div class="col-3">
            <p><i class="fas fa-map-marker-alt"></i> Malaysia</p>
        </div>
        <div class="col">
            <p> </p>
        </div>
    </div>
    
    <!-- form -->
    <form>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="formGroupExampleInput">Tanggal Berangkat</label>
                <input type="date" class="form-control" id="formGroupExampleInput" placeholder="Tanggal Perjalanan">
            </div>            
        </div>
        <div class="col">
            <div class="form-group">
                <label for="formGroupExampleInput">Tanggal Pulang</label>
                <input type="date" class="form-control" id="formGroupExampleInput" placeholder="Tanggal Perjalanan">
            </div>            
        </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="formGroupExampleInput">Jumlah Peserata</label>
            <input type="number" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>            
      </div>
    </div>
    </form>
    <div class="row">
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target=".bd-example-modal-xl"><i class="fas fa-check"></i> Pesan Sekarang!</button>
            
        </div>
        <div class="col">
          <p> </p>
        </div>
    </div>
  <!-- / form -->
    
  </div>
</div>
<!-- /.row -->

<!-- Team Members -->
    <div class="row">
      <div class="col-sm-2">
        <p>
          <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#tourLainnya" aria-expanded="false" aria-controls="tourLainnya">
            Tour Lainnya
          </button>
        </p>  
      </div>
      <div class="col-sm-3">
        <p>
          <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#syaratKetentuan" aria-expanded="false" aria-controls="syaratKetentuan">
            Syarat & Ketentuan
          </button>
        </p>    
      </div>
      <div class="col-sm-4">
        <p>
          <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#itinerary" aria-expanded="false" aria-controls="syaratKetentuan">
            Itinerary
          </button>
        </p>    
      </div>
    </div>
 

<!-- itinerary -->
<div class="row">
  <div class="col">
    <div class="collapse" id="itinerary">
      <div class="card card-body">
        <h6 class="text-info"><strong>Itinerary</strong></h6>
        <p>isi disini</p>
      </div>
    </div>
  </div>
</div>
<!-- akhir itinerary -->

<!-- syarat dan ketentuan -->
<div class="row">
  <div class="col">
    <div class="collapse" id="syaratKetentuan">
      <div class="card card-body">
      <h6 class="text-info"><strong>Syarat & Ketentuan</strong></h6>
        <p>isi disini</p>
      </div>
    </div>
  </div>
</div>
<!-- akhir syarat dan ketentuan -->

<!-- tour lainnya -->
<div class="row collapse" id="tourLainnya">
      <div class="col-lg-4 col-sm-6 portfolio-item" >
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/kl.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#" class="text-info">Trip To Kuala Lumpur 4D3N</a>
            </h4>
            <p class="card-text">Penjelasan</p>
          </div>
          <div class="card-footer">
              <a href="#" class="btn btn-info">Lihat Detail</a>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/sin2.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#" class="text-info">Backpacking To Singapore</a>
            </h4>
            <p class="card-text">Penjelasan</p>
          </div>
          <div class="card-footer">
              <a href="#" class="btn btn-info">Lihat Detail</a>
            </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?= base_url(); ?>assets/img/bkk3.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" class="text-info">Trip To Bangkok 5D4N</a>
              </h4>
              <p class="card-text">Penjelasan</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-info">Lihat Detail</a>
              </div>
          </div>
      </div>     
</div>
<!-- /.row -->



</div>
<!-- /.container -->


<!-- Modal -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel"><i class="far fa-check-circle"></i>Checkout Pemesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <!-- form -->
        <form>
            <div class="row">
                <!-- col 1 -->
                <div class="col-8">
                    <!-- detail Pemesanan -->
                    <div class="row">
                        <div class="col">
                            <h6><strong class="text-info">1. Detail Pemesanan</strong></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Titile</label>
                                <select class="form-control" id="exampleFormControlSelect1" >
                                    <option>Pilih</option>
                                    <option>Tuan</option>
                                    <option>Nyonya</option>
                                    <option>Nona</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">                
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Depan</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Depan">
                            </div>
                        </div>
                        <div class="col">                
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Belakang</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Belakang">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nomor Telpon/HP</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nomor Telpon/HP">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Alamat Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Email">
                            </div>
                        </div>
                    </div>
                    <!-- akhir detail pemesanan -->
                    <hr>
                    <!-- detail tamu -->
                    <div class="row">
                        <div class="col">
                            <h6><strong class="text-info">2. Detail Tamu</strong></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Titile</label>
                                <select class="form-control" id="exampleFormControlSelect1" >
                                    <option>Pilih</option>
                                    <option>Tuan</option>
                                    <option>Nyonya</option>
                                    <option>Nona</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">                
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Depan</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Depan">
                            </div>
                        </div>
                        <div class="col">                
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Belakang</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Belakang">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nomor Passpor</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nomor Passpor">
                            </div>
                        </div>
                    </div>
                    <!-- akhir detail tamu -->
                </div>
                <!-- col 2 -->
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <h6><strong class="text-info">Detail Tour</strong></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid rounded mb-4" src="<?= base_url(); ?>assets/img/sin3.jpg" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6><strong class="text-info">Trip To Singapore 4D3N</strong></h6>
                        </div>
                    </div>
                    <div class="row text-info">
                        <div class="col">
                            <p><i class="fas fa-map-marker-alt"></i> Singapore</p>
                        </div>
                        <div class="col">
                            <p><i class="far fa-clock"></i> 4 Day 3 Night</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <p><strong>Berangkat</strong></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>Tamu</strong></p>
                        </div>                        
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <p><strong>Harga</strong></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <p><strong>Total</strong> Rp.</p>
                        </div>
                    </div>
                    
                </div>
                <!-- akhir col 2 -->
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info"><i class="fas fa-check" ></i> Pesan Sekarang!</button>
      </div>
    </div>
  </div>
</div>

