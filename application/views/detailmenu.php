<?php $this->load->view('template/headmenu') ?>
<style type="text/css">
  .desc {
    background-color: #198754;
    text-align: center;
    color: white;
    padding: 5px;
    border-radius: 10px;
    font-size: 20px;
  }
</style>
<link href="<?= base_url();?>assets/css/detail.css" rel="stylesheet">
  <div class="head">
        <header>
            <div style="display: flex; align-items: center;">
                <a href="<?= base_url() ?><?= $link ?>" style="text-decoration: none; color: black;">
                    <i class="bi bi-arrow-left" style="font-size: 30px;margin-left: 10px; text-shadow: 1px 1px 2px black;"></i>
                </a>
                <h2 style="margin: 0; margin-left: 5px;"><strong>Menu Detail</strong></h2>
            </div>
            <div class="profile">
                <a href="<?= base_url() ?>index.php/Billsementara/home/<?= $nomeja ?>" style="color: black"><i class="bi bi-file-earmark-text" style="font-size: 25px;"></i></a>
                <i class="fas fa-user" style="font-size: 20px;"><label style="font-size: 12px;">&nbsp;<?= $this->session->userdata('username') ?> ( <?= $this->session->userdata('nomeja') ?> )</label></i>
            </div>
        </header>
    </div>
  <form action="<?=base_url()?><?= $linkform ?>" method="POST">
    <div class="burger-card">
      <?php if ($item->image_path): ?>
        <img src="<?= $item->image_path ?>" class="burger-image">
      <?php else: ?>
        <img src="<?= base_url();?>assets/noimage.jpg" style="width: 100%;">
      <?php endif ?>
      
      
      <!-- Rating dan Harga -->
      <div class="d-flex justify-content-between align-items-center">
        <div class="row">
          <div class="col-8">
            <div class="desc"><strong><?= $item->description ?></strong></div>
          </div>
          <div class="col-4">
            <?php if ($item->harga_weekday == 0): ?>
                <div class="price">Free</div>
              <?php elseif ($item->harga_weekend == 0): ?>
                <div class="price">Free</div>
              <?php elseif ($item->harga_holiday == 0): ?>
                <div class="price">Free</div>
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
                    <div class="price">Rp&nbsp;<?= number_format($item->harga_weekend) ?></div>
                    <input type="hidden" name="unit_price" value="<?= $item->harga_weekend ?>">
                    <?php else: ?>
                    <div class="price">Rp&nbsp;<?= number_format($item->harga_weekday) ?></div>
                    <input type="hidden" name="unit_price" value="<?= $item->harga_weekday ?>">
                  <?php   endif ?>
                <?php  else: ?>
                  <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                    <div class="price">Rp&nbsp;<?= number_format($item->harga_weekend) ?></div>
                    <input type="hidden" name="unit_price" value="<?= $item->harga_weekend ?>">
                <?php elseif ($holiday->tipe == 0) :?>
                    <div class="price">Rp&nbsp;<?= number_format($item->harga_weekend) ?></div>
                    <input type="hidden" name="unit_price" value="<?= $item->harga_weekend ?>">
                <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                    <div class="price">Rp&nbsp;<?= number_format($item->harga_weekend) ?></div>
                    <input type="hidden" name="unit_price" value="<?= $item->harga_weekend ?>">
                <?php elseif ($holiday->tipe == 1 && $time <= $waktu) :?>
                    <div class="price">Rp&nbsp;<?= number_format($item->harga_weekday) ?></div>
                    <input type="hidden" name="unit_price" value="<?= $item->harga_weekday ?>">
                <?php else: ?>
                  <div class="price">Rp&nbsp;<?= number_format($item->harga_weekday) ?></div>
                  <input type="hidden" name="unit_price" value="<?= $item->harga_weekday ?>">
                <?php endif ?>
                <?php endif ?>
              <?php endif ?>
          </div>
        </div>
        
        <input type="hidden" name="nama" value="<?= $item->description ?>">
        <input type="hidden" name="no" value="<?= $item->no ?>">
        
        
      </div>
      
      <!-- Judul Burger dan Deskripsi -->
      <div class="burger-title"></div>
      <p class="description"><?= $item->product_info ?></p>
      <?php if ($option): ?>
        <h5 class="mt-1"><?= $item->description ?> Options</h5>
        <?php foreach($option as $o): ?>
          <div class="row">
            <div class="col-1">
              <input type="checkbox" name="options[]" value="<?= $o->id ?>" onclick="onlyOne(this)" class="custom-checkbox">
            </div>
            <div class="col-8">
              <?= $o->description ?>
            </div>
            <div class="col-3">
              FREE
            </div>
          </div>
        <?php endforeach; ?>
    <?php endif ?>

    <?php if ($addon): ?>
        <h5 class="mt-1">Add Ons</h5>
        <?php foreach ($addon as $add): ?>
          <div class="row">
            <div class="col-1">
              <input type="checkbox" name="addons[]" value="<?= $add->no ?>" onclick="onlyOneADD(this)" class="custom-checkbox">
            </div>
            <div class="col-8">
              <?= $add->description ?>
            </div>
            <div class="col-3">
              <?php if ($add->harga_weekday == 0): ?>
                  <div>Free</div>
                <?php elseif ($add->harga_weekend == 0): ?>
                  <div>Free</div>
                <?php elseif ($add->harga_holiday == 0): ?>
                  <div>Free</div>
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
                      <div>+Rp <?= number_format($add->harga_weekend) ?></div>
                      <?php else: ?>
                      <div>+Rp <?= number_format($add->harga_weekday) ?></div>
                    <?php   endif ?>
                  <?php  else: ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <div>+Rp <?= number_format($add->harga_weekend) ?></div>
                  <?php elseif ($holiday->tipe == 0) :?>
                      <div>+Rp <?= number_format($add->harga_weekend) ?></div>
                  <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                      <div>+Rp <?= number_format($add->harga_weekend) ?></div>
                  <?php elseif ($holiday->tipe == 1 && $time <= $waktu) :?>
                      <div>+Rp <?= number_format($add->harga_weekday) ?></div>
                  <?php else: ?>
                    <div>+Rp <?= number_format($add->harga_weekday) ?></div>
                  <?php endif ?>
                  <?php endif ?>
                <?php endif ?>
            </div>
          </div>
        <?php endforeach; ?>
    <?php endif ?>

      
        
      <h5 class="mt-1">Additional Notes</h5>
      <div class="row">
        <div class="col-12">
          <textarea name="notes" class="form-control" style="height: 100px;" id="customTextarea"></textarea>
        </div>
      </div>  
      
    </div>
  
  <footer>
    <div class="quantity-control">
      <button type="button" class="btn btn-success" style="color: white;height: 40px;" id="kurang">-</button>
      <span id="hasil">1</span>
      <input type="hidden" name="qty" id="qty" value="1">
      <button type="button" class="btn btn-success" style="color: white;height: 40px;" id="tambah">+</button>
    </div>
    <button type="submit" class="btn add-to-cart-btn">Add to Cart</button>
  </footer>
</form>
  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function onlyOne(checkbox) {
        var checkboxes = document.querySelectorAll('input[name="options[]"]');
        checkboxes.forEach((item) => {
            if (item !== checkbox) item.checked = false;
        });
    }

    function onlyOneADD(checkbox) {
        var addons = document.querySelectorAll('input[name="addons[]"]');
        addons.forEach((item) => {
            if (item !== checkbox) item.checked = false;
        });
    }

    const hasil = document.getElementById('hasil');
    const tambah = document.getElementById('tambah');
    const qty = document.getElementById('qty');
    const kurang = document.getElementById('kurang');
    tambah.addEventListener('click', function() {
        let currentValue = parseInt(hasil.innerText);
        hasil.innerText = currentValue + 1;
        qty.value = currentValue + 1;
    });
    kurang.addEventListener('click', function() {
        let currentValue = parseInt(hasil.innerText);
        if (currentValue > 0) { // Angka tidak boleh kurang dari 0
            hasil.innerText = currentValue - 1;
            qty.value = currentValue - 1;
        }
    });
    const textarea = document.getElementById('customTextarea');

    // Event listener untuk memfilter input
    textarea.addEventListener('input', function(event) {
        let value = textarea.value;
        // Regex untuk menghapus emoji dan karakter spesial
        textarea.value = value.replace(/[^\w\s.,]/g, ''); // Mengizinkan huruf, angka, spasi, dan tanda baca seperti koma, titik
    });
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }
    function scrollToBottom() {
        window.scrollTo({
            top: document.body.scrollHeight, // Menggulung hingga akhir halaman
            behavior: "smooth" // Efek pengguliran halus
        });
    }
  </script>
<<?php $this->load->view('template/footer') ?>