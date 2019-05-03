

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">                
                <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukan Nama Lengkap Anda" value="<?= set_value('nama'); ?>">
                  <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                <label for="hp">No. HP</label>
                  <input type="text" class="form-control form-control-user" id="hp" name="hp" placeholder="Masukan Nomor HP Anda" value="<?= set_value('hp'); ?>">
                  <?= form_error('hp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                <label for="ktp">No. KTP</label>
                  <input type="text" class="form-control form-control-user" id="ktp" name="ktp" placeholder="Masukan Nomor KTP Anda" value="<?= set_value('ktp'); ?>">
                  <?= form_error('ktp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                <label for="passpor">No. Passpor</label>
                  <input type="text" class="form-control form-control-user" id="passpor" name="passpor" placeholder="Masukan Nomor passpor Anda" value="<?= set_value('passpor'); ?>">
                  <?= form_error('passpor', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                  <input type="date" class="form-control form-control-user" id="tgl_lahir" name="tgl_lahir" value="<?= set_value('tgl_lahir'); ?>">
                  <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukan Email Anda" value="<?= set_value('email'); ?>">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <label for="password">Password</label>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Lupa Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth_user'); ?>">Sudah mempunyai account? Login!</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url(); ?>">Kembali</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  
