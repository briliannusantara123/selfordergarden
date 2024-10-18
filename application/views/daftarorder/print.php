<link href="<?= base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url();?>/assets/fontawesome/css/all.min.css" rel="stylesheet">

<style type="text/css">
  h2{
    font-size: 15px;
  }
  h1{
    font-size: 17px;
  }
</style>

<h1 style="text-align: center;">===== DAFTAR ORDER =====</h1>
<table style="margin-left:auto;margin-right:auto;margin-top: 30px;">
<tbody>
<tr><td><h2>Table No</h2></td><td><h2>:</h2></td><td><h2><?= $table?></h2></td></tr>
<tr><td><h2>Customer</h2></td><td><h2>:</h2></td><td><h2><?= $customer?></h2></td></tr>
<tr><td><h2>Package Type</h2></td><td><h2>:</h2></td><td><h2>Alacarte</h2></td></tr>
<tr><td><h2>Print Time</h2></td><td><h2>:</h2></td><td><h2><?= date('Y-m-d H:i:s') ?></h2></td></tr>
</tbody></table>
<table style="margin-left:auto;margin-right:auto;margin-top: 30px;">
<tbody>
<?php foreach ($item as $i): ?>
    <tr><td><h2><?=$i->description?>&nbsp;&nbsp;&nbsp;&nbsp;</h2></td><td></td></tr>
    <?php if ($i->notesdua): ?>
      <tr><td><h2>Qty :<?=$i->qty?> [ <?=$i->extra_notes?>,<?= $i->notesdua ?> ]</h2></td><td>
    <?php else: ?>  
      <tr><td><h2>Qty :<?=$i->qty?> [ <?=$i->extra_notes?> ]</h2></td><td>
    <?php endif ?>
    </td></tr>
<?php endforeach; ?>
</tbody></table>
<!-- <div class="container text-center" >
  <div class="row">
    <div class="col-sm-5 col-md-6"><h2 >Table No &nbsp;&nbsp;&nbsp;&nbsp;:</h2></div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0"><h2 style="float: left"><?= $table?></h2></div>
  </div>
  <div class="row">
    <div class="col-sm-5 col-md-6"><h2 >Customer &nbsp;&nbsp;&nbsp;&nbsp;:</h2></div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0"><h2 style="float: left"><?= $customer?></h2></div>
  </div>
  <div class="row">
    <div class="col-sm-5 col-md-6"><h2 >Package Type &nbsp;&nbsp;&nbsp;&nbsp;:</h2></div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0"><h2 style="float: left">Alacarte</h2></div>
  </div>
  <div class="row">
    <div class="col-sm-5 col-md-6"><h2 >Print Time &nbsp;&nbsp;&nbsp;&nbsp;:</h2></div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0"><h2 style="float: left"><?= date('Y-m-d H:i:s') ?></h2></div>
  </div>
  <div style="margin-top:80px;"> </div>
  <?php foreach ($item as $i): ?>
  <table style="text-align:center;margin-left: 250px;">
    <tr>
      <th><h3 style="float: left"><?=$i->description?></h3></th>
    </tr>
    <tr>
      <td><h4 style="float: left">Qty : <?=$i->qty?></h4></td>
    </tr>
  </table>
<?php endforeach; ?>
</div> -->


<script src="<?= base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url();?>/assets/bootstrap/js/jQuery3.5.1.min.js"></script>
<!-- <script type="text/javascript">
window.print();
window.location= "<?= base_url() ?>/daftarorder";
setTimeout(function(){window.location= "<?= base_url() ?>daftarorder";}, 6000);
</script> -->
<script type="text/javascript">
  
//   if (!localStorage.getItem('refreshed')) {
//   localStorage.setItem('refreshed', true);
//   location.reload();
// } else {
//   localStorage.removeItem('refreshed');
// }
  window.print();

   setInterval(function(){
      window.location= "<?= base_url() ?>index.php/daftarorder";
    },1000);
</script>