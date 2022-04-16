<section class="shop" >

<div class="shop-sidebar border-end pt-3">
    <div class="sidebar-heading">
        <i class="bi bi-funnel"></i> FILTER PENCARIAN 
    </div>
    <div class="sidebar-body pt-3">
        <div class="sidebar-body-title">
            <h6>Kategori</h6> <h6 class="reset">Reset</h6>
        </div>
        <div class="sidebar-body-isi pt-3">
            <ul>
                <li>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Kaos Polos</label>
                </li>
                <li>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Kaos Anak</label>
                </li>
                <li>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Kaos RIB</label>
                </li>
                <li>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Hoodie</label>
                </li>
                <li>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Switer</label>
                </li>
            </ul>
        </div>
        <div class="sidebar-footer">
        Tampilkan Hasil (<span class="jumlah-hasil">24</span>)
        </div>
    </div>
</div>

<div class="container pt-4">
    <div class="row pb-4">
        <div class="col">
            <div class="shop-header">
                <div class="shop-search-box">
                    <input type="text" class="scr">    
                    <i class="bi bi-filter"></i><p class="sort-text">Urutkan Berdasarkan</p>       
                </div>
                <div class="sort">
                    <div class="dropdown">
                        <span class="dropdown-toggle">Produk Terbaru</span>
                        <div class="dropdown-content">
                        <p>Hello World!</p>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="container-fluid">
            <div class="container hasil">
                <div class="row">
                <?php $item = 1; for($i=0;$i<=3;$i++){ ?>
                    <div class="col">
                        <div class="item">
                        <a href="detail/<?= $item; ?>">
                            <span class="love"><i class="bi bi-suit-heart"></i></span>
                            <img src="<?= base_url().'assets/img/4.jpg'; ?>" width="260" height="375"alt="">
                            <p class="item-name">Kaos RIB </p>
                            <p class="item-price">45.000 IDR</p>

                        </a>
                        </div>
                    </div>
             <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

 
 
</section>