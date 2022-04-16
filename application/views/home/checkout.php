<section class="checkout">


<div class="container-fluid">

<div class="row">
    <div class="col-lg-6 border-end-gray pb-5">
        <div class="container-fluid">
        <span class="data-alamat">DATA PENERIMA</span>
            <form class="input-pengirim" action="">
           
            <div class="row pt-3">
            <p>Nama Penerima</p>
                <div class="col-md-6">
                    <input type="text" placeholder="Nama Depan" id="nama-depan">
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="Nama Belakang" id="nama-belakang">
                </div>
            </div>
            <div class="row pt-4">
                <p>Nomor Handphone</p>
                <div class="col-md-12">
                    <input type="text" placeholder="08xxxx">
                </div>
            </div>
            <div class="row pt-4">
                <span  class="data-alamat">ALAMAT PENERIMA</span>
                <div class="col-md-6 pt-3">
                    <p>Provinsi</p>
                    <select name="" id="">
                        <option value="" disabled selected>Pilih Provinsi</option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="col-md-6 pt-3">
                    <p>Kabupaten/Kota</p>
                    <select name="" id="">
                        <option value="" disabled selected>Pilih Kabupaten/Kota</option>
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-6">
                    <p>Kecamatan</p>
                    <select name="" id="">
                        <option value="" disabled selected>Pilih Kecamatan</option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="col-md-6">
                    <p>Alamat Lengkap</p>
                    <input type="text" placeholder="Nama Jalan, Perumahan dll">
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-12">
                    <p>Catatan (Opsional)</p>
                    <input type="text" placeholder="Masukkan catatan di sini...">
                </div>
            </div>
            <div class="row pt-4">
            <div class="col">             
                <div class="checkout-redeem">
                    <div class="poin-redeem pt-2">
                        Poin Kamu : <span id="poin-redeem">123</span>
                    </div>
                    <div class="redeem-btn d-flex justify-content-end">
                        <button class="redeem-btn ">Redeem Poin</button>
                    </div>
                </div>
            </div>

               
            </div>

            </form>   
        </div>
    </div>
    <div class="col" style="background:#f5f5f5;">
        <div class="container pt-4">
          <div class="list-checkout">
          <?php for($i=1;$i<=3;$i++){ ?>
            <div class="row pb-4">
                <div class="col-3 ">
                    <div class="foto-checkout ">
                    <div class="dot">2</div>
                    <img src="<?= base_url().'assets/img/1.jpg' ?>">
                    </div>
                </div>
                <div class="col-4 pt-4">
                    <h6 id="nama-baju" class="border border-1 border-secondary">Kaos cewek RIB lengan panjang</h6>
                    <div class="size-color">
                              <span id="color">Pink</span> /
                              <span id="size"> S</span>
                    </div>
                </div>
                <div class="col pt-4">
                   
                    <div class="harga-checkout">
                        <span id="harga-checkout">90.000</span> IDR
                    </div>
                </div>
            </div>
            <?php } ?>
          </div>
            <div class="row">
                <div class="col">
                    <div class="input-voucher">
                        <input type="text" placeholder="Masukkan Kode Voucher">
                        <button>Apply</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col ">
                    <div class="jumlah-harga pt-3 ">
                        <p>Subtotal</p>
                        <p>Potongan Harga</p>
                        <p>Biaya Pengiriman</p>
                    </div>
                </div>
                <div class="col text-end">
                    <div class="jumlah-harga-angka pt-3 ">
                        <p id="jumlah-subtotal"><span id="jumlah-subtotal">205.000</span> IDR</p> 
                        <p id="jumlah-potongan"><span id="jumlah-potongan">0</span> IDR</p> 
                        <p id="jumlah-biaya"><span id="jumlah-biaya">0</span> IDR</p> 
                    </div>
                </div>
            </div>

                <div class="border-bottom-gray"></div>

            <div class="row pt-3">
                <div class="col">
                    <div class="total-akhir">Total</div>
                </div>
                <div class="col text-end">
                    <div class="total-bayar">
                    <span>205.000</span> IDR
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-12">
                    <button class="pembayaran">Lakukan Pembayaran</button>
                </div>
            </div>

            </div>

            
        </div>
    </div>
</div>

</section>