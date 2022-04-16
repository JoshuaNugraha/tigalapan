<!-- modal -->


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->

      <!-- Modal body -->
      <div class="modal-body">
        <div class="rectangle">
                <h3>FREE <br> DELIVERY</h3>
                
                <div class="vcr-req">
                  <small>* Min. Pembelajaan 100rb</small><br>
                  <small>* Min. Pembelajaan 100rb</small>
                  
                </div>
        </div>
        <br>
        <div class="rectangle" style="background:white;height:80px">
        <span class="fw-light" style="margin-left:20px;margin-top:10px;position:absolute;">Kode Voucher</span>
        <h5 class="fw-bolder" style="margin-left:20px;margin-top:35px;position:absolute;">FD12312422</h5>
         <input type="hidden" id="copy" value="">
        <button class="salin-btn" id="copy-btn" >Salin kode</button>
        </div>

      </div>

      <!-- Modal footer -->
      

    </div>
  </div>
</div>


<!-- end of modal -->
<div class="main-img">
  <img src="<?= base_url().'assets/logo/pg.png'; ?>" alt="">
  <div class="caption">
    <p id="caption1">VENDOR KAOS POLOS, REGLAN DAN SWEATER TERBESAR DI INDONESIA TIMUR</p>
    <p id="caption2">MULAI HARI DENGAN PENUH PERCAYA DIRI</p>
    <button class="shop-now">
      SHOP NOW
    </button>
  </div>
      
</div>


<section class="kualitas">
  <div class="container">
    <div class="row">
      <div class="col border border-1 border-secondary">
        <div class="kualitas-isi">
            <div class="row">
              <div class="k-1">
                <img src="<?= base_url().'assets/logo/dmnd.png' ?>" alt="">
              </div>
              <div class="k-2 ">
                <div class="kualitas-title">KUALITAS PREMIUM
                  <p>Kualitas pejabat harga merakyat</p>
                </div>
              </div>
            </div>
          </div>
       
      </div>
      <div class="col border border-1 border-secondary">
      <div class="kualitas-isi">
            <div class="row">
              <div class="k-1">
                <img src="<?= base_url().'assets/logo/box.png' ?>" id="box" alt="">
              </div>
              <div class="k-2 ">
                <div class="kualitas-title">KUALITAS PREMIUM
                  <p>Kualitas pejabat harga merakyat</p>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="col border border-1 border-secondary">
      <div class="kualitas-isi">
            <div class="row">
              <div class="k-1">
                <img src="<?= base_url().'assets/logo/shield.png' ?>" id="shield" alt="">
              </div>
              <div class="k-2 ">
                <div class="kualitas-title">KUALITAS PREMIUM
                  <p>Kualitas pejabat harga merakyat</p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>



<!-- <div class="kualitas">
  <div class="kualitas-1">
    <img src="<?= base_url().'assets/logo/dmnd.png' ?>" alt="">
   
   
  </div>
  <div class="kualitas-2">
  <img src="<?= base_url().'assets/logo/box.png' ?>" alt="">
  </div>
  <div class="kualitas-3">
    
  </div>
</div>
  -->

<!-- <div class="kualitas">
  <div class="container">
    <div class="row">
      <div class="col border border-1 border-secondary ">
      <i class="bi bi-gem blue"></i><span class="title-kualitas">KUALITAS PREMIUM</span>
        
      </div>
      <div class="col border-top border-bottom border-1 border-secondary">
        Column
      </div>
      <div class="col border border-1 border-secondary">
        Column
      </div>
    </div>
  </div>
</div> -->

<!-- <section class="kualitas pb-5">
  <div class="kualitas">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="kualitas-br">
        <img src="<?= base_url().'assets/logo/diamond.png'; ?> " alt=""><span class="title-kualitas">KUALITAS PREMIUM</span>
        </div> -->
     
     <!-- <i class="bi bi-gem blue"></i>    -->
      <!-- </div>
      <div class="col border-top border-bottom border-1 border-secondary">
      <i class="bi bi-box-seam blue"></i><span class="title-kualitas">KUALITAS PREMIUM</span>
      </div>
      <div class="col border border-1 border-secondary">
      <i class="bi bi-shield-check blue"></i><span class="title-kualitas">KUALITAS PREMIUM</span>
      </div>
    </div>
  </div>
</div> -->




  <!-- <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="row">
          <div class="col-lg-4 border border-1 border-secondary">
          <i class="bi bi-gem blue"></i><span class="title-kualitas">KUALITAS PREMIUM</span>
          </div>
          <div class="col-lg-4 border border-1 border-secondary">
          <i class="bi bi-gem blue"></i><span class="title-kualitas">KUALITAS PREMIUM</span>
          </div>
          <div class="col-lg-4 border border-1 border-secondary">
          <i class="bi bi-gem blue"></i><span class="title-kualitas">KUALITAS PREMIUM</span>
          </div>
        </div>
      </div>
    </div>

  </div> -->
</section>


<section class="best-seller pb-5">
    <div class="container">
        <div class="row pt-5">
          <div class="col text-center">
           <img src="<?= base_url().'assets/logo/bestseller.png'; ?>" alt=""><br>
           Penjualan Terbaik Minggu Ini
          </div>
        </div>
    </div>
  <div class="">
      <div class="container best-list ">
        <div class="row">
    <?php for($i=0;$i<=7;$i++){ ?>
          <div class="col">
          <div class="item">
        
            <span class="loved" id="love-1"><i class="bi bi-suit-heart"></i></span>
            <a href="detail/1">
            <img src="<?= base_url().'assets/img/4.jpg'; ?>"alt="">
            <!-- <img src="https://tigalapankaos.booblestudio.com/assets/images/produk/233366.jpg" alt=""> -->
            <p class="item-name">Kaos RIB </p>
            <p class="item-price">45.000 IDR</p>

          </a>
        </div>
          </div>
        <?php } ?>
        </div>
      </div>
  </div>



</section>

<section class="voucher pt-4 pb-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col text-center mt-5">
            <h4> SPECIAL VOUCHER </h4>
            <p>Dapatkan voucher special hanya untukmu</p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="special-offer">
          <div class="row">
          <?php $code = 123456; 
            for($i=1;$i<=3;$i++){
          ?>
            <div class="col pt-4 vcr-click">
              <!--  -->
            
              <a href="" data-bs-toggle="modal" data-bs-target="#myModal" onClick="copy(<?= $code; ?>);">
                <div class="rectangle">
                  <div class="nama-vcr">
                    <p id="nama-vcr">FREE DELIVERY</p>
                  </div>
                  <button class="vcr-btn">
                    <p>Pakai</p>
                  </button>
                  <div class="vcr-req">
                    <?php for($req=1;$req<=2;$req++){ ?>
                    <span id="req">* Min. Pembelajaan 100rb</span><br>
                    <?php } ?>
                  </div>
                </div>
              </a>
            </div>  
            <?php } ?>        
          </div>
        </div>
        
      </div>
</section>

<script>

function copy(text) {
 
  // navigator.clipboard.writeText(text.value);
  $('#copy').attr('value', text);
}

$('#copy-btn').click(function(){
      var txt =  $('#copy').val();
      var m = document;
      txt = m.createTextNode(txt);
      var w = window;
      var b = m.body;
      b.appendChild(txt);
      if (b.createTextRange) {
          var d = b.createTextRange();
          d.moveToElementText(txt);
          d.select();
          m.execCommand('copy');
          
      } 
      else {
          var d = m.createRange();
          var g = w.getSelection;
          d.selectNodeContents(txt);
          g().removeAllRanges();
          g().addRange(d);
          m.execCommand('copy');
          g().removeAllRanges();
      }
      txt.remove();

});

$("#love-1").click(function(){
  var cl = $("#love-1").attr('class');
  if(cl == "love"){
    $("#love-1").removeClass('love').addClass('loved');
    
  }else{
    $("#love-1").removeClass('loved').addClass('love');
    
  }
});
</script>