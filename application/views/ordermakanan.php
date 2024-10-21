<?php $this->load->view('template/headmenu') ?>
<div id="loading"></div>
<div id="load"></div>
<p id="loadingtext">Loading</p>

<div class="user-icon-circle circle1">
    <div class="icon-wrapper">
        <a href="javascript:void(0)" onclick="scrollToTop()">
            <i class="fas fa-chevron-up user-icon"></i>
        </a>
    </div>
</div>
<div class="user-icon-circle circle2">
    <div class="icon-wrapper">
        <a href="javascript:void(0)" onclick="scrollToBottom()">
            <i class="fas fa-chevron-down user-icon"></i> <!-- Ikon Panah Ke Bawah -->
        </a>
    </div>
</div>
  <div class="container">
    <div class="head">
        <header>
            <div style="display: flex; align-items: center;">
                <a href="<?= base_url() ?>index.php/selforder/home/<?= $nomeja ?>" style="text-decoration: none; color: black;">
                    <i class="bi bi-arrow-left" style="font-size: 30px;margin-left: 10px; text-shadow: 1px 1px 2px black;"></i>
                </a>
                <h2 style="margin: 0; margin-left: 5px;"><strong>Food</strong></h2>
            </div>
            <div class="profile">
                <a href="<?= base_url() ?>index.php/Billsementara/home/<?= $nomeja ?>" style="color: black"><i class="bi bi-file-earmark-text" style="font-size: 25px;"></i></a>
                <a href="<?= base_url() ?>index.php/user/home/Makanan/<?= $nomeja ?>/<?= $s ?>" style="color: black;"><i class="fas fa-user" style="font-size: 20px;"><label style="font-size: 12px;">&nbsp;<?= $this->session->userdata('username') ?> ( <?= $this->session->userdata('nomeja') ?> )</label></i></a>
            </div>
        </header>
        <div class="search">
            <i class="bi bi-search" style="color: black"></i>
            <form id="searchForm" action="<?= base_url() ?>index.php/ordermakanan/search/<?= $nomeja ?>" method="POST">
                <input type="text" id="search" name="keyword" placeholder="Cari sesuatu..." autocomplete="off">
            </form>
        </div>


        <div class="categories">
          <?php foreach ($sub as $i): ?>
            <div class="category-container">
              <a href="<?= base_url() ?>index.php/ordermakanan/menu/Makanan/<?= str_replace(" ","%20", $i['sub_category']) ?>#<?= str_replace(" ","_", $i['sub_category']) ?>" id="<?= str_replace(" ","_", $i['sub_category']) ?>" class="nonactive <?= str_replace(" ","_", $i['sub_category']) ?> test<?= str_replace(" ","_", $i['sub_category']) ?>"><?= $i['sub_category'] ?></a>
            </div>
          <?php endforeach ?>
        </div>
    </div>
<div class="container menu-main">
  <?php foreach ($item as $i): ?>
    <?php if ($i->is_sold_out == 0): ?>
      <div class="row align-items-center menu-item position-relative">
        <?php $cekpesan = $this->Item_model->cekpesan($i->no); ?>
        <?php foreach ($cekpesan as $c): ?>
          <div class="ordered-qty">Ordered Qty <?= $c->qty ?></div>
        <?php endforeach ?>
        <div class="col-3">
          <?php if ($i->image_path): ?>
            <img src="<?= $i->image_path ?>">
          <?php else: ?>
            <img src="<?= base_url();?>assets/noimage.jpg">
          <?php endif ?>
        </div>
        <div class="col-6">
          <h6><?= $i->description ?></h6>
          <?php if ($i->harga_weekday == 0): ?>
                <h6>Free</h6>
              <?php elseif ($i->harga_weekend == 0): ?>
                <h6>Free</h6>
              <?php elseif ($i->harga_holiday == 0): ?>
                <h6>Free</h6>
              <?php else: ?>
                <?php 
                    $hr = date('l');
                    $date = date('Y-m-d');
                    $time = date('H:i:s');  
                    $holiday = $this->Item_model->get_holiday($date);
                    $waktu = $this->db->order_by('id',"desc")
                    ->limit(1)
                    ->get('sh_m_setup')
                    ->row('item_time_check');
                ?>
                <?php if ( $holiday == NULL): ?>
                   <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                    <p class="price">Rp <?= number_format($i->harga_weekend) ?></p>
                    <?php else: ?>
                    <p class="price">Rp <?= number_format($i->harga_weekday) ?></p>
                  <?php   endif ?>
                <?php  else: ?>
                  <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                    <p class="price">Rp <?= number_format($i->harga_weekend) ?></p>
                <?php elseif ($holiday->tipe == 0) :?>
                    <p class="price">Rp <?= number_format($i->harga_weekend) ?></p>
                <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                    <p class="price">Rp <?= number_format($i->harga_weekend) ?></p>
                <?php elseif ($holiday->tipe == 1 && $time <= $waktu) :?>
                    <p class="price">Rp <?= number_format($i->harga_weekday) ?></p>
                <?php else: ?>
                  <p class="price">Rp <?= number_format($i->harga_weekday) ?></p>
                <?php endif ?>
                <?php endif ?>
              <?php endif ?>
        </div>
        <div class="col-3 text-end position-relative">
          <div class="add-btn"><a href="<?= base_url() ?>index.php/ordermakanan/detailmenu/<?= $i->id ?>/<?= str_replace(" ","%20", $i->sub_category) ?>#<?= str_replace(" ","_", $i->sub_category) ?>" style="padding: 3px;color: white;font-size: 25px;"><i class="bi bi-plus"></i></a></div>
        </div>
      </div>
    <?php else: ?>
      <div class="row align-items-center menu-item position-relative">
        <div class="col-3">
          <img src="contoh.png" alt="Pain Suisse">
          <div class="sold-out">SOLD OUT</div>
        </div>
        <div class="col-6">
          <h6 class="text-muted">Pain Suisse</h6>
          <p class="price text-muted">Rp 39.500</p>
        </div>
        <div class="col-3 text-end">
          <div class="add-btn-muted"><i class="bi bi-plus" style="font-size: 25px;"></i></div>
        </div>
      </div>
    <?php endif ?>
  <?php endforeach ?>
</div>
<div style="margin-bottom: 50px"></div>

        <div class="containerfooter text-center" >
    <footer>
        <nav>
            <a href="<?= base_url() ?>index.php/selforder/home/<?= $nomeja ?>">
                <i class="fas fa-home" style="color: grey"></i>
                <span>Home</span>
            </a>
            <a href="<?= base_url() ?>index.php/Cart/home/<?= $nomeja ?>/Makanan/<?= $s ?>" class="cart-link" style="position: relative;">
                <i class="fas fa-shopping-cart" style="color: white; background-color: #198754; border-radius: 50%; padding: 17px; position: absolute; top: -30px; left: 50%; transform: translateX(-50%); z-index: 10;">
                    <span class="badge" style="position: absolute; top: -10px; right: -10px; background-color: red; color: white; border-radius: 50%; padding: 5px; font-size: 12px;"><?= $total_qty;?></span>
                </i>
                <span style="position: relative; top: 12px;font-size: 17px;">Cart</span>
            </a>
            <a href="<?= base_url() ?>index.php/Kasir_waitress/memanggil/<?= $nomeja ?>">
                <img src="<?= base_url(); ?>/assets/icon/menu/call_waitress.png" 
                 style="width: 35px; height: 35px; border-radius: 50%; filter: grayscale(100%);" 
                 alt="Hachi Grill" class="image" />

                <span style="margin-top: -1px;">Call Waitress</span>
            </a>
            <a href="<?= base_url() ?>index.php/user/home/home/<?= $nomeja ?>">
                <i class="fas fa-user" ></i>

                <span>Profile</span>
            </a>
        </nav>
    </footer>
</div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<?php foreach($sub as $i): ?>
<script type="text/javascript">
  var<?= str_replace(" ","_", $i['sub_category']) ?>= document.getElementById('<?= str_replace(" ","_", $i['sub_category']) ?>');
  var item<?= str_replace(" ","_", $i['sub_category']) ?> = document.querySelector('.test<?= str_replace(" ","_", $i['sub_category']) ?>');

    if (window.location.toString() == "<?= base_url() ?>index.php/ordermakanan/menu/Makanan/<?= str_replace(" ","%20", $i['sub_category']) ?>#<?= str_replace(" ","_", $i['sub_category']) ?>") {
        $(document).ready(function() {
        item<?= str_replace(" ","_", $i['sub_category']) ?>.classList.add('active');
        item<?= str_replace(" ","_", $i['sub_category']) ?>.classList.remove('nonactive');
    });
    }
</script>
<?php endforeach; ?>
<script type="text/javascript">
  let typingTimer;                // Variabel untuk timer
let typingInterval = 500;       // Waktu jeda setelah selesai mengetik (500ms)
let searchInput = document.getElementById('search');

// Event listener untuk mendeteksi pengguna mengetik
searchInput.addEventListener('keyup', () => {
    clearTimeout(typingTimer);   // Hapus timer sebelumnya
    typingTimer = setTimeout(submitForm, typingInterval);  // Set timer baru
});

// Event listener untuk membatalkan submit jika masih mengetik
searchInput.addEventListener('keydown', () => {
    clearTimeout(typingTimer);   // Hapus timer jika masih mengetik
});

// Fungsi untuk submit form
function submitForm() {
    document.getElementById('searchForm').submit();  // Submit form
}


</script>

<?php $this->load->view('template/footer') ?>

