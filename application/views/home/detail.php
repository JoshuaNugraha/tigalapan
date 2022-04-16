<section class="detail">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-md-5">
            <?php for($i=1;$i<=6;$i++){
              $img = "assets/img/".$i.".jpg"; ?>
             <!-- <img src="<?= base_url().$img;?>" class="detail-large" alt="" id="large-<?= $i; ?>"> -->
             <?php }  ?>
            
       
                <?php for($i=1;$i<=6;$i++){?>                 
                <div class="row pb-3" id="img-<?= $i; ?>">
                    <!-- <img class="thumb" src="<?= base_url().'assets/img/avatar.jpg' ?>"  id="<?= $i; ?>"> -->
                </div>
                <?php } ?>
            
           
            </div>
            <div class="col-lg" style="position:relative;">
                       <h6>Kaos RIB cewek lengan</h6>
                       <span class="item-price">
                           45.000 IDR
                       </span>
                       <p class="detail-desc">
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                       </p>
                       
                       <span class="warna">
                           Warna : 
                            <span class="item-color">
                            Pink
                            </span>
                       </span>
                       <br>
                       <br>
                    <div class="color-list" id="1">
                      <div class="circle-out-selected" id="color-1">
                        <span class="circle" style="background-color:#fc81f4;" >

                        </span>
                      </div>
                    </div>
                    <div class="color-list" id="2">
                      <div class="circle-out" id="color-2">
                        <span class="circle" style="background-color:black;" >

                        </span>
                      </div>
                    </div>
                    <div class="color-list" id="3">
                      <div class="circle-out" id="color-3">
                        <span class="circle"  style="background-color:red;" >

                        </span>
                      </div>
                    </div>
                    <div class="color-list" id="4">
                      <div class="circle-out"  id="color-4">
                        <span class="circle" style="background-color:grey;">

                        </span>
                      </div>
                    </div>
                    <div class="color-list" id="5">
                      <div class="circle-out" id="color-5">
                        <span class="circle" style="background-color:blue;" >

                        </span>
                      </div>
                    </div>
                    <div class="color-list" id="6">
                      <div class="circle-out" id="color-6">
                        <span class="circle" style="background-color:yellow;" >

                        </span>
                      </div>
                    </div>

                    <div class="warna pt-3">
                           Ukuran : 
                            <span class="item-color" id="ukuran">
                            
                            </span>
                            <input type="hidden" id="ukuran-input" name="ukuran" value="S" disabled>
                    </div>  

                    <div class="size-list" id="S">
                        <div class="size-out mt-3" id="size-S">
                            S
                        </div>
                    </div>
                    <div class="size-list" id="M">
                        <div class="size-out mt-3" id="size-M">
                            M
                        </div>
                    </div>
                    <div class="size-list" id="L">
                        <div class="size-out mt-3" id="size-L">
                            L
                        </div>
                    </div>
                    <div class="size-list" id="XL">
                        <div class="size-out mt-3" id="size-XL">
                            XL
                        </div>
                    </div>
                    <br>
                    <div class="row-2  pt-5">
                        
                            <div class="item-tambah">
                                <i class="bi bi-dash-lg"></i>
                                <span class="jumlah-item" id="jumlah-item">1</span>
                                <input type="hidden" name="jumlah-item" id="jumlah-input" value="1" disabled >
                                <i class="bi bi-plus-lg"></i>
                            </div>                    
                            <span class="add-cart" style="position:relative;">
                             Tambah ke keranjang
                            </span>                      
                            <span class="detail-love" style="position:relative;">
                                <i class="bi bi-suit-heart"></i>
                            </span>

                            <br>
                        
                   
                    </div>

                    <div class="ulasan">
                      <a href="">
                        Panduan Ukuran
                      </a>
                      <a href="">
                        Pengiriman dan Pengembalian
                      </a>
                      <a href="">
                        Kirim Ulasan
                      </a>
                    </div>
                    
                 
                    
            </div>
        
         
        </div>
       
    </div>




</section>

<section class="may-like pt-4 pb-4">

          <div class="container-fluid">

          <i class="bi bi-arrow-left-circle" id="left"></i>
          <i class="bi bi-arrow-right-circle" id="right"></i>
          
            <h5 class="text-center pb-1">KAMU MUNGKIN JUGA SUKA</h5> 
            <div class="container may-like-row border border-1 border-secondary">
             <div class="row border border-1 border-secondary">
              <?php for($i=0;$i<=9;$i++){
                $item=1; ?>
                <div class="col">
                <div class="item" id="item">
                  <a href="detail/<?= $item; ?>">
                    <span class="love"><i class="bi bi-suit-heart"></i></span>
                    <img src="<?= base_url().'assets/img/4.jpg'; ?>" width="260" height="375"alt="">
                    <p class="item-name">Kaos RIB <?= $i; ?> </p>
                    <p class="item-price">45.000 IDR</p>

                  </a>
                </div>
                </div>
              <?php } ?>
              </div>
            </div>
           
          </div>

</section>


<script >
// Ganti warna baju

  var i = 1;
  var select = 1;
  



$(document).ready(function(){
  var mLeft = 100;
  document.getElementById("item").style.marginLeft = mLeft+"px";
    $("#large-"+i).css("display","flex");
    $("#"+i).css("opacity","1");
    $("#color-"+i).removeClass("circle-out").addClass("circle-out-selected");


    $(".thumb").click(function(){
      $("#large-"+i).css("display","none");
      $("#"+i).css("opacity","0.3");
      $("#color-"+i).removeClass("circle-out-selected").addClass("circle-out");
      
      i = $(this).attr('id');
      $("#"+i).css("opacity","1");
      $("#large-"+i).css("display","flex");
      $("#color-"+i).removeClass("circle-out").addClass("circle-out-selected");
    });

     
    $(".color-list").click(function(){
      $("#large-"+i).css("display","none");
      $("#"+i).css("opacity","0.3");
      $("#color-"+i).removeClass("circle-out-selected").addClass("circle-out");
      
      i = $(this).attr('id');
      $("#"+i).css("opacity","1");
      $("#large-"+i).css("display","flex");
      $("#color-"+i).removeClass("circle-out").addClass("circle-out-selected");
    });

    $("#left").click(function(){
 
      mLeft = mLeft-90;
      document.getElementById("item").style.marginLeft = mLeft+"px";
      
    });
    

    
  });


// tambah jumlah pesanan
var jumlah = 1;
$(".bi-dash-lg").click(function(){
  if(jumlah>1){
    jumlah=jumlah-1;
    $("#jumlah-input").val(jumlah);
    document.getElementById("jumlah-item").innerHTML = jumlah;
 
  }
  
});
$(".bi-plus-lg").click(function(){
  jumlah= jumlah+1;
  $("#jumlah-input").val(jumlah);
  document.getElementById("jumlah-item").innerHTML = jumlah;
 
});


//pilih size
var size = "S";
document.getElementById("ukuran").innerHTML = size;
$(document).ready(function(){
  $("#size-"+size).removeClass("size-out").addClass("size-out-selected");
  
  $(".size-list").click(function(){

    $("#size-"+size).removeClass("size-out-selected").addClass("size-out");  

    size = $(this).attr('id');
    $("#size-"+size).removeClass("size-out").addClass("size-out-selected");
    $("#ukuran-input").val(size);
    document.getElementById("ukuran").innerHTML = size;


  });
});





</script>