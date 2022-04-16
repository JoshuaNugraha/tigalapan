<section class="page-pembayaran">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6"  style="background:#f5f5f5;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 pb-3 pt-4">
                            <span class="title">DATA PEMBAYARAN</span> 
                        </div>
                    </div>
                    <div class="row pt-2  kotak ">
                        <div class="col-md-6 pt-2 pb-3">
                                    <div class="kode-pembayaran">
                                        <span>Kode Pembayaran</span><br>
                                        <span id="kode">45141231232352</span>
                                    </div>
                            
                        </div>
                        <div class="col-md-6 salin-kode">                  
                                        <button>Salin Kode</button>                      
                        </div>
                    </div>
                    <div class="row kotak-2">
                       <div class="col-md-6">
                           <p>Batas Pembayaran Berakhir Pada</p>
                       </div>
                       <div class="col-md-6">
                           <div class="timer">
                            <i class="bi bi-stopwatch"></i> <span id="clock"></span>
                           </div>
                       </div>
                    </div>
                    <div class="row pt-4 pb-3">
                        <div class="col-md-12">
                            <span class="title">REKENING TUJUAN</span> 
                        </div>
                    </div>
                    <div class="row kotak">
                        <div class="col-md-12">
                            <p class="silahkan">Silahkan lakukan pembayaran ke nomor Rekening di bawah Sesuai dengan total Tagihan anda - <span class="total-tagihan">205.000</span> IDR <br> </p>                            
                            <div class="rekening-tujuan">
                                <div class="logo-bank">
                                    asd
                                </div>
                                <div class="nomor-rekening">                                    
                                    <h4 id="nomor-rekening">1999272888</h4><h4></h4>
                                    <p class="atas-nama">(<span id="atas-nama">An. Tigalapankaos Indonesia</span>)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row kotak-2">
                        <div class="col-md-12 cara-pembayaran">
                            
                          <a href=""> Lihat Cara Pembayaran </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 pt-4">
                                    <span class="title">KELENGKAPAN DATA</span>
                                </div>
                            </div>
                            <div class="row pt-3 pb-2">
                                <div class="col-md-12">
                                    <span>Nama Pengirim</span>
                                </div>
                            </div>
                            <div class="row info-pengirim">
                                <div class="col-md-6">
                                <input type="text" placeholder="Nama Depan" id="nama-depan">
                                </div>
                                <div class="col-md-6">
                                <input type="text" placeholder="Nama belakang">
                                </div>
                            </div>
                            <div class="row pt-3 pb-2">
                                <div class="col-md-12">
                                    <span>Nama Bank</span>
                                </div>
                            </div>
                            <div class="row pb-2">
                                <div class="col-md-12">
                                <select name="" id="">
                                    <option value="0" selected disabled>Pilih Bank</option>
                                </select>
                                </div>
                            </div>
                            <div class="row pb-2">
                                <div class="col-md-12">
                                    <span>Jumlah Transfer</span>
                                </div>
                            </div>
                            <div class="row pb-2">
                                <input type="number" name="" id="" placeholder="Masukkan Nominal Transfer">
                            </div>
                            <div class="row pb-2">
                                <div class="col-md-12">
                                    <span>Bukti Trasnfer</span>
                                </div>
                            </div>
                          <div class="row pb-4">
                            <div class="col-md-12">
                                <div class="upload-image">
                                    <i class="bi bi-plus-circle-fill"></i>
                                    <input type="hidden" name="" id="image-upload">
                                    <p>Tambah Foto</p>
                                </div>
                            </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                    <button class="konfirmasi-btn">Konfirmasi Pembayaran</button>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

 



</section>



<script>
var countDownDate = new Date("Mar 27, 2022 15:37:25").getTime();

// Memperbarui hitungan mundur setiap 1 detik
var x = setInterval(function() {

  // Untuk mendapatkan tanggal dan waktu hari ini
  var now = new Date().getTime();
    
  // Temukan jarak antara sekarang dan tanggal hitung mundur
  var distance = countDownDate - now;
    
  // Perhitungan waktu untuk hari, jam, menit dan detik
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Keluarkan hasil dalam elemen dengan id = "demo"
  document.getElementById("clock").innerHTML =hours + ":"
  + minutes + ":" + seconds;
    
  // Jika hitungan mundur selesai, tulis beberapa teks 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("clock").innerHTML = "EXPIRED";
  }
}, 1000);
 


</script>