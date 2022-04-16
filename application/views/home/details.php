<section class="detail-main">
    <div class="container-fluid"  style="background:#f5f5f4;">
        <div class="detail-produk">
            <div class="kolom-thumb">
                <?php for($i=1;$i<=6;$i++){?>                 
                    <div class="foto-thumbnail">               
                        <img class="thumb" src="<?= base_url().'assets/img/avatar.jpg' ?>"  id="<?= $i; ?>">
                    </div>         
                <?php } ?>
            </div>
            <div class="kolom-besar">
                <div class="foto-besar-plc">
                <?php for($i=1;$i<=6;$i++){
                    $img = "assets/img/".$i.".jpg"; ?>
                    <div class="foto-besar">
                        <img src="<?= base_url().$img;?>" alt="" id="large-<?= $i; ?>">
                    </div>
                <?php }  ?>
                </div>
            </div>
            <div class="kolom-desk">
                    <div class="kolom-desk-plc">
                        <div class="nama-harga">
                            <span class="">Kaos RIB cewek lengan pendek</span>
                            <p class="">45.000 IDR</p>
                        </div>
                        <div class="isi-desk">
                            <p class="desk">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <?php $color = array("Pink", "Red", "Brown", "Yellow", "Black", "Cyan"); ?>
                        <div class="kolom-warna">                        
                            <p class="warna">Warna : <span id="warna">Pink</span></p>
                            <div class="pilih-warna">
                                <?php
                                $jumlah = count($color);
                                for($i=0;$i<$jumlah; $i++){ ?>                       
                                <div class="color-list" id="<?= $i+1; ?>">
                                    <div class="circle-out" id="color-<?= $i+1; ?>">
                                        <span class="circle" style="background-color:<?= $color[$i]; ?>;" >
                                        </span>
                                    </div>
                                </div>                      
                                <?php } ?>
                            </div>
                            
                        </div>
                        <?php $size = array("S", "M", "L", "XL"); ?>
                        <div class="kolom-ukuran pt-2">
                            <p class="warna">Ukuran : <span id="ukuran">L</span></p>
                            <?php 
                            $ttlsize = count($size);
                            for($i=0;$i<$ttlsize; $i++){ ?>
                                <div class="size-list" id="<?= $size[$i]; ?>">
                                    <div class="size-out " id="size-<?= $size[$i]; ?>">
                                    <?= $size[$i]; ?>
                                    </div>
                                </div>
                                <?php } ?>
                        </div>

                        <div class="kolom-cart pt-3">
                            <div class="bagi">
                            <div class="item-tambah">
                                    <i class="bi bi-dash-lg"></i>
                                    <span class="jumlah-item" id="jumlah-item">1</span>
                                    <input type="hidden" name="jumlah-item" id="jumlah-input" value="1" disabled >
                                    <i class="bi bi-plus-lg"></i>
                            </div>  
                            <span class="add-cart" style="position:relative;">
                                Tambah ke keranjang
                            </span>                      
                            <span class="detail-love" id="like" style="position:relative;">
                            <i class="bi" id="icon-like"></i>
                    
                            </span>
                            </div>

                        </div><br>
                        <div class="kolom-panduan">
                                <a href="">Panduan Ukuran</a>
                                <a href="">Pengiriman & Pengembalian</a>
                                <a href="">Kirim Ulasan</a>
                        </div>
                    
                    </div>
            </div>
        </div>
    </div>
</section>
<?php $maylike = array("1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg", "7.jpg", "8.jpg","9.jpg"); ?>
<div class="container-fluid">
    <div class="maylike-title pt-2">
        <div class="dash">&ndash;&ndash;&ndash;</div> <span class="title-dash">KAMU MUNGKIN JUGA SUKA</span>  <div class="dash">&ndash;&ndash;&ndash;</div>
    </div>


    <div class="maylike pt-4">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          
                <?php 

                $length = count($maylike);
                if($length%4>0){
                    $i =$length /4 +1;
                }else{
                    $i =$length /4;
                }
                $i = (int)$i;
                $param1 = 0;
         
                $temp = array();
               for($j=0;$j<$i;$j++){
                   $temp2=array_slice($maylike,$param1,4);
                   $param1= $param1+ 4;                   
                  
                    if($j==0){
                        echo " <div class='carousel-item active'> <ul>";
                    }else{
                        echo " <div class='carousel-item'> <ul>";
                    }
                    for($i=0;$i<count($temp2);$i++){
                        echo "<li class='inline-item'><img src=".base_url()."assets/img/".$temp2[$i]." alt='...'></li>";
                    }
                    echo "</ul></div>";
                       
                  
               }         
             
              ?>
                
                                
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="bi-arrow-left-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
       
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="bi-arrow-right-circle" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
</div>


<!-- <div class="row ml-2 border border-1 border-secondary">
 
 <div class=" col-sm-1  ">
    
     <?php for($i=1;$i<=6;$i++){?>                 
        <div class="foto-thumbnail">
            <?= $i; ?>
             <img class="thumb border border-1 border-secondary" src="<?= base_url().'assets/img/avatar.jpg' ?>"  id="<?= $i; ?>">
         </div>
         
     <?php } ?>
     </div>

 <div class=" col-sm-4 ">
     Foto besar
 </div>
 <div class=" col-sm-2  ">
     desc
 </div>
</div> -->

<script>
    // jumlah pesanan

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


// ganti warna

var i = 1;
var select = 1;
  



$(document).ready(function(){
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

// like

$(document).ready(function(){
stts1 = $("#like").attr('class');
if(stts1=="detail-love"){
    $("#icon-like").addClass("bi-suit-heart");
}else{
    $("#icon-like").addClass("bi-suit-heart-fill");
}

    
$("#like").click(function(){
    stts = $(this).attr('class');
    if(stts=="detail-love"){
        $("#like").removeClass("detail-love").addClass("detail-love-selected");
        $("#icon-like").removeClass("bi-suit-heart").addClass("bi-suit-heart-fill");       
    }else{
        $("#like").removeClass("detail-love-selected").addClass("detail-love");
        $("#icon-like").removeClass("bi-suit-heart-fill").addClass("bi-suit-heart");      
    }
});
});
</script>