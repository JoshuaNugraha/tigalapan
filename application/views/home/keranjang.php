<div class="modal" id="sizeModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->

      <!-- Modal body -->
      <div class="modal-body">
        
        <div class="rectangle" style="background:white;height:80px">
          <div class="warna-change">
              <span>Warna :</span>
                <select name="color" id="color">
                  <option value="pink" id="opt-pink">Pink</option>
                  <option value="red" id="opt-red">Merah</option>
                  <option value="cream" id="opt-cream">Kream</option>
                  <option value="yellow" id="opt-yellow">Kuning</option>
                  <option value="black" id="opt-black">Hitam</option>
                  <option value="blue" id="opt-blue">Biru</option>
                </select>
            </div>
            <div class="size-change">
            <span>Size :</span>
                <select name="size" id="size">
                  <option value="S" id="opt-pink">S</option>
                  <option value="L" id="opt-red">L</option>
                  <option value="M" id="opt-cream">M</option>
                  <option value="XL" id="opt-yellow">XL</option>               
                </select>
            </div>
        
        </div>
        <button class="save-btn" id="save-btn">Simpan</button>

      </div>

      <!-- Modal footer -->
      

    </div>
  </div>
</div>





<section class="keranjang">     
         <div class="banner">
           <span class="title">  KERANJANG BELANJA </span>
         </div>
       
         
   


<div class="container-fluid pt-4  pb-4"  style="background:#ECEAEA;">
  <div class="table-responsive">
    <form action="">
      <div class="container mls">
      <div style="overflow-x: auto">
          <table>
            <thead>
              <tr>
                <th class="produk">PRODUK</th>
                <th class="harga">HARGA</th>
                <th class="kuantitas">KUANTITAS</th>
                <th class="subtotal">SUBTOTAL</th>
              </tr>
            </thead>
            <tbody>
              <?php for($i = 1; $i<=2; $i++){ ?>
              <tr>
                <td class="produk">
                    <div class="keranjang-item pt-3">
                      <div class="container">
                        <div class="row">
                          <div class="col col-lg-4"> 
                            <img src="<?= base_url().'assets/img/1.jpg';?>" alt="" width="110px" height="140px">
                          </div>
                          <div class="col pt-4 desc-brg">            
                            <span class="nama-brg"> Kaos RIB cewek lengan panjang</span><br>
                            <div class="size-color">
                              <span id="color">Pink</span> /
                              <span id="size"> S</span>
                            </div><br>
                            <div class="action">
                              <button> <a href="" data-bs-toggle="modal" data-bs-target="#sizeModal"><i class="bi bi-pencil-square"></i></button>
                              <button><i class="bi bi-trash3"></i></button>
                            </div>
                          </div> 
                        </div>
                      </div>       
                  </div>
                </td>
                <td class="harga">
                  <span id="harga-item">45.000   </span>IDR
                  <input type="hidden" id="harga-item-input" value="45000">
                </td>
                <td class="kuantitas" id="kuantitas">
                <div class="kuantitas-item">
                                <i class="bi bi-dash-lg"></i>
                                <span class="jumlah-item" id="jumlah-item"></span>
                                <input type="hidden" name="jumlah-item" id="jumlah-input" value="2" disabled >
                                <i class="bi bi-plus-lg"></i>
                </div>    
                </td>
                <td class="subtotal">
                  <span id="subtotal">
                    
                  </span> IDR
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
      </div>
  </div> 
  
  <div class="container check-out">
                <div class="row">
                  <div class="col check-out-harga border border-1 border-secondary" style="height:70px;">  
                    <p>TOTAL :<span id="check-out-total"></span> IDR</p>
                    <small>* Pajak, ongkos kirim dan diskon akan dihitung setelah checkout</small>
                  </div>
                  <div class="col check-out-button border border-1 border-secondary" style="height:70px;">
                  <button type="submit" class="check-out-btn" id="check-out-btn">Check Out</button>
                  </div>
                </div>
              </form>
  </div>
</div>

<div class="may-like pt-4 pb-4">

          <div class="container-fluid">

          <i class="bi bi-arrow-left-circle"></i>
          <i class="bi bi-arrow-right-circle"></i>
          
            <h5 class="text-center pb-1">LENGKAPI KERANJANG KAMU</h5> 
            <div class="container">
              <div class="item ">
                <a href="">
                  <span class="loved"><i class="bi bi-suit-heart-fill"></i></span>
                  <img src="<?= base_url().'assets/img/4.jpg'; ?>" width="260" height="375"alt="">
                  <p class="item-name">Kaos RIB </p>
                  <p class="item-price">45.000 IDR</p>

                </a>
              </div>
              <?php for($i=0;$i<=2;$i++){
                $item=1; ?>
                <div class="item">
                  <a href="detail/<?= $item; ?>">
                    <span class="love"><i class="bi bi-suit-heart"></i></span>
                    <img src="<?= base_url().'assets/img/4.jpg'; ?>" width="260" height="375"alt="">
                    <p class="item-name">Kaos RIB </p>
                    <p class="item-price">45.000 IDR</p>

                  </a>
                </div>
              <?php } ?>
            </div>
           
          </div>

</div>




</section>



<script>
// tambah jumlah pesanan
var jumlah = $("#jumlah-input").val();
var harga = $("#harga-item-input").val();
var subtotal = jumlah*harga;


$(document).ready(function(){
  document.getElementById("jumlah-item").innerHTML = jumlah;
  var output=parseInt(subtotal).toLocaleString(); 
  document.getElementById("subtotal").innerHTML = output;
});

$(".bi-dash-lg").click(function(){
  if(jumlah>1){
    jumlah--;
    subtotal = jumlah*harga;
    var output=parseInt(subtotal).toLocaleString(); 
    $("#jumlah-input").val(jumlah);
    document.getElementById("jumlah-item").innerHTML = jumlah;
    document.getElementById("subtotal").innerHTML = output;
 
  }
  
});
$(".bi-plus-lg").click(function(){
  jumlah++;
  subtotal = jumlah*harga;
  $("#jumlah-input").val(jumlah);
  var output=parseInt(subtotal).toLocaleString(); 
  document.getElementById("jumlah-item").innerHTML = jumlah;
  document.getElementById("subtotal").innerHTML = output;
 
});

// subtotal







</script>