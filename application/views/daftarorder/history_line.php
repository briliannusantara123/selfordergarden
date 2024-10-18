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
    <div class="col-12"><h3 style="padding-top: 14px;padding-bottom:13px;color: white;text-align: center">Lines List Order Selforder<a href="<?= base_url()?>index.php/daftarorder/history" class="btn btn-danger" style="float: right">Back</a></h3></div>

  </div>
</div>
  <div style="width: 100%; height: 0px; border: 1px #000 solid;">
</div>
</nav>
<br>
<div class="list-group" style="margin-top: 50px;" id="list">
  <?php foreach($item as $i): ?>
  <a href="#" class="list-group-item list-group-item-action" aria-current="true" style="background-color: #223c77;padding: 20px;">
    <div class="d-flex w-100 justify-content-between">
      <img src="<?= $i->image_path ?>" alt="Red dot" style="width: 160px;height: 160px;border-radius: 20px; display: block;" />
      <h5 style="color: white"><?= $i->description ?> </h5>
      <h5 style="color: white">Order Quantity : <?= $i->qty ?> </h5>

    </div>
    <?php if ($i->notesdua): ?>
      <h5 class="mb-1" style="color: white;">Extra Notes : <?= $i->extra_notes?>,<?= $i->notesdua ?></h5>
    <?php else: ?>  
      <h5 class="mb-1" style="color: white;">Extra Notes : <?= $i->extra_notes?></h5>
    <?php endif ?>
  </a>
  <div style="margin-top: 5px;"></div>
    <?php endforeach; ?>
</div>
<!-- <script type="text/javascript">
  setInterval(function(){
      window.location.reload();
    },2000);
</script> -->
        
    <?php $this->load->view('template/footer') ?>