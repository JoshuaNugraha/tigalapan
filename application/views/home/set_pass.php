<div class="daftar">
    <div class="container-fluid">
        <div class="row m-fs">
            <div class="col-lg-7 gambar-utama px-0">
                <div class="gambar">
                <img src="<?= base_url().'assets/logo/daftar.png' ?>" alt="">
                </div>
            </div>
          
            <div class="col-lg-5 signup-utama">
                <div class="container-fluid" >
                <div class="signup">
                <form action="<?= base_url('login/register_google'); ?>" method="POST" id="buat-pass">          
                    <div class="row ">
                      <div class="col title">
                            <p class="signup-title">Buat password baru</p>                     
                      </div>
                    </div>
                    <div class="row pt-2">
                       
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <div class="nama">
                                Password
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="password" name="password" id="pass" class="signup-input" placeholder="Masukkan Password Baru Untuk Akun Anda">
                            <i class="bi bi-eye-fill" id="eye" onclick="showpass();"></i>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <div class="nama">
                               Konfirmasi Password
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <input type="password" id="pass1" class="signup-input" placeholder="Masukkan Kembali Password Anda">
                            <i class="bi bi-eye-fill" id="eye1" onclick="showpass1();"></i>
                        </div>
                    </div>
                     
                    <div class="row pt-4">
                        <div class="col-12">
                            <button class="masuk">
                                Masuk
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


<script>
 
    function showpass(){
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
        document.getElementById("eye").style.color = "#33abab";
    } else {
        x.type = "password";
        document.getElementById("eye").style.color = "rgb(194, 194, 194)";
    }
    }
    function showpass1(){
    var x = document.getElementById("pass1");
    if (x.type === "password") {
        x.type = "text";
        document.getElementById("eye1").style.color = "#33abab";
    } else {
        x.type = "password";
        document.getElementById("eye1").style.color = "rgb(194, 194, 194)";
    }
    }

    $('.masuk').click(function(){
        var pass = $('#pass').val();
        var pass1 = $('#pass1').val();
        if(pass !== pass1){
            alert("Password tidak cocok!");
        }else{
           $('#buat-pass').submit();
        }
    });
</script>