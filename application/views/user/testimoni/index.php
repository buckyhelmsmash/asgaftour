 <!-- Page Content -->
 <div class="container">

<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">Testimoni</h1>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="<?= base_url(); ?>">Home</a>
  </li>
  <li class="breadcrumb-item active">Testimoni</li>
</ol>

<div class="row">
  <div class="col">
    <form>
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" placeholder="Tulis nama anda">
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Tulis email anda">
        </div>
      </div>
      <div class="form-group row">
        <label for="kota" class="col-sm-2 col-form-label">Kota</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="kota" placeholder="Tulis kota anda">
        </div>
      </div>
      
      <div class="form-group">
        <label for="testimoni">Testimoni</label>
        <textarea class="form-control" id="testimoni" rows="3"placeholder="Tulis testimoni anda"></textarea>
      </div>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Rating</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1">
                <i class="fas fa-fw fa-star"></i></i>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1">
                <i class="fas fa-fw fa-star"></i> <i class="fas fa-fw fa-star"></i></i>
              </label>
            </div> 
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1">
                <i class="fas fa-fw fa-star"></i> <i class="fas fa-fw fa-star"></i> <i class="fas fa-fw fa-star"></i></i>
              </label>
            </div> 
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1">
                <i class="fas fa-fw fa-star"></i> <i class="fas fa-fw fa-star"></i> <i class="fas fa-fw fa-star"></i> <i class="fas fa-fw fa-star"></i></i>
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1">
                <i class="fas fa-fw fa-star"></i> <i class="fas fa-fw fa-star"></i> <i class="fas fa-fw fa-star"></i> <i class="fas fa-fw fa-star"></i> <i class="fas fa-fw fa-star"></i>
              </label>
            </div>    
          </div>
        </div>
      </fieldset>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn text-white" style="background-color:#33a0ae;">Submit Testimoni</button>
        </div>
      </div>
    </form>
  </div>
</div>

</div>
<!-- /.container -->
