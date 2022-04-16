<!-- <diva class="col-lg-5 signup-utama" id="signup-utama"> -->
                <div class="container-fluid" id="main_place">
                <div class="signup">
                    <div class="row ">
                      <div class="col title">                          
                            <p class="signup-title">Satu langkah lagi akun anda selesai</p>
                            <!-- <p class="no-acc">Sudah punya akun? <a href="<?= base_url('login'); ?>">Masuk Sekarang <i class="bi bi-arrow-right"></i></a></p>                      -->
                      </div>
                    </div>
                   
                    <div class="row pt-4">
                       
                       
                        </div>
                    </div>
                    <form method="post" id="form-daftar1" action="<?= base_url().'login/daftar_aksi'; ?>">
                    <div class="row pt-4">
                        <div class="col">
                            <div class="nama">
                                Nama Lengkap Anda
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="nama" class="signup-input" placeholder="Nama Lengkap" required>
                        </div>
                    </div>
      
                    
                    <input type="hidden" name="email" value="<?= $data['email']; ?>">
                    <input type="hidden" name="nohp" value="<?= $data['nohp']; ?>">
                    <input type="hidden" name="pass" value="<?= $data['pass']; ?>">
                    <div class="row pt-4">
                        <div class="col-12">
                            <button class="masuk" type="submit">
                                Daftar
                            </button>
                        </div>
                    </div>


                    </form>
                   
                </div>
            </div>
          
            <!-- </diva> -->

 