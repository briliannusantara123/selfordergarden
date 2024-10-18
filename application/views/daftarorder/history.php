<?php $this->load->view('template/head') ?>
    <style type="text/css">
       
        .image{
            background-color: #223c77;
            transition-duration: 0.4s;
        }
        .image:hover {
              background-color: lightgreen; /* Green */
              color: white;
        }
        /* Media Query for Large screens */
    </style>
    <style type="text/css">
  .loadingkonek{
    width: 50px;
    height: 50px;
    border:solid 5px #ccc;
    border-top-color: #223c77;
    border-radius: 100%;

    position: fixed;
    left: 0;
    top: 0;
    right:0;
    bottom: 0;
    margin: auto;
    z-index: 10000001;

    animation: putar 1s linear infinite;
  }

  @keyframes putar{
    from{transform: rotate(0deg);}
    to{transform: rotate(360deg);}
  
</style>
<div id="loadingkonek"></div>
    <nav style="z-index: 10000;position: fixed;width: 100%;background-color: #223c77;color: white;">
  <div class="container">
  <div class="row">
    <div class="col-12"><h3 style="padding-top: 14px;padding-bottom:13px;color: white;text-align: center">History Print<a href="<?= base_url()?>index.php/daftarorder" class="btn btn-danger" style="float: right;">Back</a></h3></div>

  </div>
</div>
  <div style="width: 100%; height: 0px; border: 1px #000 solid;">
</div>
</nav>
<br>
<div class="list-group" style="margin-top: 50px;">
  <?php foreach($item as $i): ?>
  <a href="<?= base_url()?>index.php/daftarorder/historyline/<?= $i->id_trans ?>/<?= $i->cekdata?>/<?=  $i->selected_table_no ?>" class="list-group-item list-group-item-action" aria-current="true" style="background-color: #223c77;padding: 20px;">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1" style="color: white;">Table Number : <?=  $i->selected_table_no ?></h5>
      <h5 class="mb-1" style="color: white;">Orderan ke : <?= $i->cekdata?></h5>
    </div>
    <h5 class="mb-1" style="color: white;">Customer Name : <?= $i->customer_name?></h5>
    <a href="<?= base_url()?>index.php/daftarorder/cetak/<?= $i->id_trans ?>/printulang/<?= $i->cekdata?>/<?=  $i->selected_table_no ?>" class="btn btn-secondary" tabindex="-1" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">PRINT</a>
  </a>
  </a>
  <div style="margin-top: 5px;"></div>
    <?php endforeach; ?>
</div>
<script type="text/javascript">
  setInterval(function(){
      window.location.reload();
    },2000);
</script>

        
    <?php $this->load->view('template/footer') ?>