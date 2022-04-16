<div class="daftar" id="daftar">
    <div class="container-fluid">
        <div class="row m-fs">
            <div class="col-lg-7 gambar-utama px-0">
                <div class="gambar">
                <img src="<?= base_url().'assets/logo/daftar.png' ?>" alt="">
                </div>
            </div>
            
            <div class="col-lg-5 signup-utama" id="signup-utama">
                <div class="container-fluid" id="main_place">
                <div class="signup">
                    <div class="row ">
                      <div class="col title">                          
                            <p class="signup-title">Buat akun dan menangkan hadiahnya</p>
                            <p class="no-acc">Sudah punya akun? <a href="<?= base_url('login'); ?>">Masuk Sekarang <i class="bi bi-arrow-right"></i></a></p>                     
                      </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col sosmed-logo">
                            <a class="btn google" href="<?= $google_login_button; ?>" role="button">
                                    <img alt="Google sign-in" src="<?= base_url().'assets/logo/gmail.png'; ?>" />
                                    Daftar Dengan Google
                            </a>
                            <a class="btn google ms-1" href="<?= $facebook_register_url; ?>" role="button">
                                    <img   alt="Facebook sign-in" src="<?= base_url().'assets/logo/fb.png'; ?>" />
                                    Daftar Dengan Facebook
                            </a>                          
                        </div>
                    </div>
                    <div class="row pt-4">
          
                        <div class="col-12 atau">
                        <!-- <p>&#x2015;&#x2015;&#x2015;&#x2015;&#x2015; <span>atau</span> &#x2015;&#x2015;&#x2015;&#x2015;&#x2015;</p> -->
                        <span class="border-atau"></span><span class="atau-w"> atau </span><span class="border-atau" style="margin-left: 55%;"></span>
                        </div>
                    </div>
                    <!-- method="POST" action="<?= base_url().'login/daftar_nama'; ?>" -->
                <form id="form-daftar">
                    <div class="row pt-4">
                        <div class="col">
                            <div class="nama">
                                Nomor Handphone
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="nohp" class="signup-input" placeholder="081XXXXXXX" required>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <div class="nama">
                                E-mail
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="email" name="email" class="signup-input" placeholder="johndeon@mail.com" required>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col">
                            <div class="nama">
                                Password
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="password" name="pass" id="pass" class="signup-input" placeholder="*******" required>
                            <i class="bi bi-eye-fill" id="eye" onclick="showpass();"></i>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-6 remember-me">
                            <input type="checkbox" id="remember-me">
                            <p>Remember me</p>
                        </div>
                        <div class="col-6 text-end">
                            <a href="" class="forgot">Lupa Password?</a>
                        </div>
                    </div>
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

    $(document).ready(function(){
        $("#form-daftar").on("submit", function(e){
            e.preventDefault();
            var data = $("#form-daftar").serialize();
            $.ajax({
                    type: 'POST',
                    url: "daftar_nama",
                    data: data,
                    cache	: false, 
                    success: function(html){
                        $('#signup-utama').html('');
                        $('#signup-utama').html(html);
                        // console.log(html);
                       
            
                    }
            });
          
        });
    
    });
</script>