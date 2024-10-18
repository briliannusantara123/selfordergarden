
<?php $this->load->view('template/head') ?>
    <nav style="background-color: #223c77;color: white;">
  <div class="container">
    <p style="text-align: center;padding-top: 13px;color: white;">Table Service - Confirmation Order</p>
  </div>
  <div style="width: 100%; height: 0px; border: 1px #000 solid;">
</div>
</nav>
<br>
<div class="text-center"><p>Anda Akan Melakukan Order :</p></div>
<div class="container ">
  <div class="row">
    <div class="col">
      <p>Menu Order</p>
    </div>
    <div class="col">
      <p>Qty</p>
    </div>
    <div class="col">
      <p>Harga</p>
    </div>
    <div class="col">
      <p>Pesan</p>
    </div>
    <div class="col">
      <p>Total Harga</p>
    </div>
  </div>
</div>
<form action="<?= base_url() ?>index.php/ordermakanan/order/<?= $no_meja ?>" method="POST">
<div class="container ">
  <?php foreach ($item as $i): ?>
  <div class="row">
    <div class="col">
      <p><?= $i['nama'] ?></p>
      <input type="hidden" name="nama[]" value="<?= $i['nama'] ?>">
    </div>
    <div class="col">
      <p><?= $i['qty'] ?></p>
      <input type="hidden" name="qty[]" value="<?= $i['qty'] ?>">
    </div>
    <div class="col">
      <p>Rp <?= number_format($i['harga']); ?></p>
      <input type="hidden" name="harga[]" value="<?= $i['harga'] ?>">
    </div>
    <div class="col">
      <p><?= $i['pesan'] ?></p>
      <input type="hidden" name="pesan[]" value="<?= $i['pesan'] ?>">
      <input type="hidden" name="no[]" id="harga" value="<?= $i['item_code'] ?>" class="form-control harga">
    </div>
    <div class="col">
      <p>Rp <?= number_format($i['harga'] * $i['qty']); ?></p>
    </div>
  </div>
  <?php endforeach ?>
</div>
<div class="container text-center">
  <div class="row">
    <div class="col-8"><b>TOTAL Order :</b></div>
    <div class="col-4"><b>Rp <?= number_format($total) ?></b></div>
  </div>
</div>

<div class="text-center"><p>Apakah Anda Yakin ?</p></div>

<div class="container text-center">
  <div class="row">
    <div class="col">
      <button type="submit" class="btn btn-outline-primary" style="padding-left: 50px;padding-right: 50px;padding-top: 42px;padding-bottom: 42px;margin-top: 20px;">Ya, Order</button>
    </div>
    
    <div class="col">
      <a href="<?= base_url() ?>index.php/orderminuman/batal/<?= $no_meja ?>" class="btn btn-outline-primary" style="padding-left: 42px;padding-right: 42px;padding-top: 30px;padding-bottom: 30px;margin-top: 20px;">Tunggu, Kembali</a>
      
    </div>
    </form>
  </div>
</div>

<!-- Modal -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>