<?php $this->load->view('template/head') ?>
<style type="text/css">
  
</style>
    <nav style="background-color:#223c77;color: white;">
  <div class="container">
    <p style="text-align: center;padding-top: 13px;color: white;">Confirmation Order</p>
  </div>
  <div style="width: 100%; height: 0px; border: 1px #000 solid;">
</div>
</nav>
<br>
<div class="text-center"><h5>You Will Order :</h5></div>
<br>
<form action="<?= base_url() ?>index.php/cart/order/<?= $no_meja ?>" method="POST">
<div class="container ">
  <table class="table table-hover" >
  <thead style="background-color: #223c77;color: white;">
    <tr>
      <th scope="col">Order Menu</th>
      <th scope="col">Qty</th>
      <th scope="col">Price</th>
      <th scope="col">Note</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($item as $i): ?>
    <tr>
      <th scope="row"><p><?= $i['description'] ?></p></th>
      <input type="hidden" name="nama[]" value="<?= $i['description'] ?>">
      <td><p style="text-align: left;"><?= $i['qty'] ?></p></td>
      <input type="hidden" name="qty[]" value="<?= $i['qty'] ?>">
      <td><p>Rp <?= number_format($i['unit_price']); ?></p></td>
      <input type="hidden" name="harga[]" value="<?= $i['unit_price'] ?>">
      <td><p><?= $i['extra_notes'] ?></p></td>
      <input type="hidden" name="pesan[]" value="<?= $i['extra_notes'] ?>">
      <input type="hidden" name="no[]" id="harga" value="<?= $i['item_code'] ?>" class="form-control harga">
      <td><p>Rp <?= number_format($i['unit_price'] * $i['qty']); ?></p></td>
    </tr>
    <?php endforeach ?>
    <tr>
      <td colspan="1" class="table-active"></td>
      <th colspan="2" class="table-active">Total Order :</th>
      <td colspan="2" class="table-active">Rp <?= number_format($total) ?></td>
    </tr>
  </tbody>
</table>
  
  </div>
  
</div>
<div class="container" style="margin-bottom: 20px;">
  <table class="table">
  <tbody>
    <!-- <tr>
      <th scope="row">Sub Total</th>
      <td> </td>
      <td> </td>
      <?php if ($order_bill == NULL): ?>
      <td>Rp 0</td>
      <?php else: ?>
      <td>Rp <?= number_format($order_bill->total) ?></td>
      <?php endif;?>
    </tr>
    <tr>
      <th scope="row">SC</th>
      <td> </td>
      <td> </td>
      <?php if ($order_bill == NULL): ?>
      <td>Rp 0</td>
      <?php else: ?>
      <td>Rp <?= number_format($order_bill->sc) ?></td>
      <?php endif;?>
    </tr>
    <tr>
      <th scope="row">PPN</th>
      <td> </td>
      <td> </td>
      <?php if ($order_bill == NULL): ?>
      <td>Rp 0</td>
      <?php else: ?>
      <td>Rp <?= number_format($order_bill->ppn) ?></td>
      <?php endif;?>
    </tr>
    <tr>
      <th scope="row">Total Payment</th>
      <td> </td>
      <td> </td>
      <?php if ($order_bill == NULL): ?>
      <td>Rp 0</td>
      <?php else: ?>
      <td>Rp <?= number_format($order_bill->total + $order_bill->sc + $order_bill->ppn) ?></td>
      <?php endif;?>
    </tr> -->
  </tbody>
</table>
</div>

<footer>
  <div class="text-center"><h5>Please Check Your Order <br> Order Has Been Submitted <br> Cannot Be Cancelled</h5></div>
<div class="container text-center">
  <div class="row">
    <div class="col">
      <button onclick="order()" type="submit" class="btn btn-outline-primary" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;margin-top: 30px;">
  Yes, Confirm
</button>
    </div>
    
    <div class="col">
      <a href="<?= base_url() ?>index.php/cart/batal/<?= $no_meja ?>/<?= $cek ?>/<?= $sub ?>" class="btn btn-outline-danger" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;margin-top: 30px;">No, Go Back</a>
      
    </div>
    </form>
  </div>
</div>
</footer>
<!-- Modal -->

    <?php $this->load->view('template/head') ?>
  <script type="text/javascript">
    function order(){
  localStorage.clear();
}
  </script>
</html>