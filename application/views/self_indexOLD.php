<?php $this->load->view('template/head') ?>
    <style type="text/css">
       
          @media (max-width: 414px) {
            #btn_kiri_order {
                padding-left: 30px;padding-right: 30px;padding-top: 30px;padding-bottom: 30px;margin-top: 20px;
            }
            #btn_kiri_melihat {
                padding-left: 30px;padding-right: 30px;padding-top: 30px;padding-bottom: 30px;margin-top: 20px;
            }
            #btn_kiri_memanggil {
                padding-left: 30px;padding-right: 30px;padding-top: 30px;padding-bottom: 30px;margin-top: 20px;
            }
            #btn_kanan {
                padding-left: 30px;padding-right: 30px;padding-top: 30px;padding-bottom: 30px;margin-top: 20px;
            }
            #btn_kanan_bill {
                padding-left: 30px;padding-right: 30px;padding-top: 30px;padding-bottom: 30px;margin-top: 20px;
            }
            #btn_kanan_meminta {
                padding-left: 42px;padding-right: 42px;padding-top: 30px;padding-bottom: 30px;margin-top: 20px;
            }
        }
          
        /* Media Query for low resolution  Tablets, Ipads */
        @media (min-width: 481px) {
            #btn_kiri_order {
                padding-left: 52px;padding-right: 52px;padding-top: 42px;padding-bottom: 42px;margin-top: 20px;
            }
            #btn_kiri_melihat {
                padding-left: 52px;padding-right: 52px;padding-top: 42px;padding-bottom: 42px;margin-top: 20px;
            }
            #btn_kiri_memanggil {
                padding-left: 52px;padding-right: 52px;padding-top: 42px;padding-bottom: 42px;margin-top: 20px;
            }
            #btn_kanan {
                padding-left: 52px;padding-right: 52px;padding-top: 30px;padding-bottom: 30px;margin-top: 20px;
            }
            #btn_kanan_bill {
                padding-left: 30px;padding-right: 30px;padding-top: 42px;padding-bottom: 42px;margin-top: 20px;
            }
            #btn_kanan_meminta {
                padding-left: 62px;padding-right: 62px;padding-top: 55px;padding-bottom: 55px;margin-top: 20px;
            }
        }
        @media (min-width: 720px) {
            #btn_kiri_order {
                padding-left: 52px;padding-right: 52px;padding-top: 42px;padding-bottom: 42px;margin-top: 20px;
            }
            #btn_kiri_melihat {
                padding-left: 52px;padding-right: 52px;padding-top: 42px;padding-bottom: 42px;margin-top: 20px;
            }
            #btn_kiri_memanggil {
                padding-left: 52px;padding-right: 52px;padding-top: 42px;padding-bottom: 42px;margin-top: 20px;
            }
            #btn_kanan {
                padding-left: 52px;padding-right: 52px;padding-top: 42px;padding-bottom: 42px;margin-top: 20px;
            }
            #btn_kanan_bill {
                padding-left: 30px;padding-right: 30px;padding-top: 42px;padding-bottom: 42px;margin-top: 20px;
            }
            #btn_kanan_meminta {
                padding-left: 62px;padding-right: 62px;padding-top: 55px;padding-bottom: 55px;margin-top: 20px;
            }
        }
          
        /* Media Query for Tablets Ipads portrait mode */
        @media (min-width: 768px) and (max-width: 1024px){
            #btn_kiri_order {
                font-size: 20px;
            }
            #btn_kiri_melihat {
                font-size: 17px;
                padding-bottom: 44px;
                padding-top: 44px;
            }
            #btn_kiri_memanggil {
                font-size: 17px;
                padding-bottom: 54px;
                padding-top: 54px;
            }
            #btn_kanan {
                font-size: 20px;
            }
            #btn_kanan_bill {
                font-size: 20px;
            }
            #btn_kanan_meminta {
                padding-right: 85px;
                padding-left: 85px;
            }

        }
          
        /* Media Query for Laptops and Desktops */
        @media (min-width: 1025px) and (max-width: 1280px){
            #btn_kiri_order {
                font-size: 20px;
                padding-right: 56px;
                padding-left: 56px;
            }
            #btn_kiri_melihat {
                font-size: 17px;
                padding-bottom: 44px;
                padding-top: 44px;
            }
            #btn_kiri_memanggil {
                font-size: 17px;
                padding-bottom: 54px;
                padding-top: 54px;
            }
            #btn_kanan {
                font-size: 20px;
                padding-right: 56px;
                padding-left: 56px;
            }
            #btn_kanan_bill {
                font-size: 20px;
            }
            #btn_kanan_meminta {
                padding-right: 85px;
                padding-left: 85px;
            }

        }
        .image{
            background-color: #198754;
            transition-duration: 0.4s;
        }
        .image:hover {
              background-color: lightblue; /* Green */
              color: white;
        }
        /* Media Query for Large screens */
    </style>
    <style type="text/css">
  .loadingkonek{
    width: 50px;
    height: 50px;
    border:solid 5px #ccc;
    border-top-color: #198754;
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
    <nav style="z-index: 10000;position: fixed;width: 100%;background-color: #198754">
  <div class="container">
  <div class="row">
    <div class="col-9"><p style="padding-top: 13px;color: white;">Home</p></div>
    <div class="col-1" style="z-index: 10040000;"><a style="text-align: center;margin-top: 6px;" href="<?php echo base_url() ?>index.php/Cart/home/<?= $no_meja ?>/home" class=""><svg xmlns="http://www.w3.org/2000/svg" width="25" height="23" color="white" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" style="margin-right: 10px;margin-top: 12px;margin-left: 10px;">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></a></div>
<div class="col-1"><strong><h3 style="color: white;font-size: 10px;margin-top: 6px;background-color: red;border-radius: 40%;text-align: center;"><b id="total_qty_header"><?= $total_qty;?></b></h3></strong></div>

  </div>
</div>
  <div style="width: 100%; height: 0px; border: 1px #000 solid;">
</div>
</nav>
<div class="container " style="z-index: 10000;position: fixed;width: 100%;margin-top: 55px;">
  <div class="row">
    <div class="col" style="margin-left:30px;border-bottom-left-radius: 20px;padding-top: 10px;background-color:#198754;  ">
      <p style="color: white;"><?= date('d-m-y H:i:s'); ?></p>
      <p style="color: white;">Table No : <?= $this->session->userdata('nomeja') ?></p>
    </div>
  
    <div class="col" style="margin-right:30px;border-bottom-right-radius: 20px;padding-top: 10px;background-color:#198754; ">
      <p style="color: white;">Name : <?= $this->session->userdata('username') ?></p>
      <p style="color: white;">Phone No : <?= $this->session->userdata('no_telp') ?></p>
    </div>
  </div>
</div>
<br>
<div class="container text-center">
  <div class="row" style="margin-top: 180px;margin-bottom: 10px;">
    <div class="col">
      <a class="" href="<?= base_url() ?>index.php/ordermakanan/menu/Makanan/<?= str_replace(" ","%20", $sca->sub_category) ?>#<?= str_replace(" ","_", $sca->sub_category) ?>" role="button"  style="text-decoration:none"><img src="<?= base_url();?>/assets/icon/menu/order_makanan.png" style="width: 125px;height: 125px;border-radius: 50%;" alt="Hachi Grill" class="image" /><p style="color:#198754;margin-top: 5px; ">Order Food</p></a>
      <!-- <a class="" href="<?= base_url() ?>ordersementara/home/<?= $no_meja ?>" role="button"  style="margin-top: 25px;text-decoration:none"><img src="<?= base_url();?>/assets/icon/menu/lihat-order-sementara.png" style="width: 125px;height: 125px;margin-top: 5px;border-radius: 50%;" alt="Hachi Grill" class="image" /><p style="color:#198754;margin-top: 5px; ">Melihat Order <br>Sementara</p></a> -->
      <a class="" href="<?php echo base_url() ?>index.php/Kasir_waitress/memanggil/<?= $no_meja ?>" role="button"  style="margin-top: 25px;text-decoration:none"><img src="<?= base_url();?>/assets/icon/menu/call_waitress.png" style="width: 125px;height: 125px;margin-top: 5px;border-radius: 50%;" alt="Hachi Grill" class="image" /><p style="color:#198754;margin-top: 5px; ">Call Waitress</p></a>
      <a class="" href="<?php echo base_url() ?>index.php/Review/form/<?= $no_meja ?>" role="button"  style="margin-top: 25px;text-decoration:none"><img src="<?= base_url();?>/assets/icon/menu/note.png" style="width: 125px;height: 125px;margin-top: 5px;border-radius: 50%;padding: 1px 1px;" alt="Hachi Grill" class="image" /><p style="color:#198754;margin-top: 5px; ">Notes and <br> Suggestion</p></a>
      
    </div>
 
    <div class="col">
      <a class="" href="<?= base_url() ?>index.php/orderminuman/menu/Minuman/<?= str_replace(" ","%20", $scm->sub_category) ?>#<?= str_replace(" ","_", $scm->sub_category) ?>" role="button"  style="margin-top: 20px;text-decoration:none"><img src="<?= base_url();?>/assets/icon/menu/order_minuman.png" style="width: 125px;height: 125px;border-radius: 50%;" alt="Hachi Grill" class="image" /><p style="color:#198754;margin-top: 5px; ">Order Beverage</p></a>
       <!-- <a class="" href="<?= base_url() ?>index.php/ordercakebakery/menu/CAKE DAN BAKERY/WHOLE%20CAKE#WHOLE_CAKE" role="button"  style="margin-top: 20px;text-decoration:none"><img src="<?= base_url();?>/assets/icon/menu/cake.png" style="width: 125px;height: 125px;border-radius: 50%;" alt="Hachi Grill" class="image" /><p style="color:#198754;margin-top: 5px; ">Order Cake and Bakery</p></a> -->
      <a class="" href="<?= base_url() ?>index.php/Billsementara/home/<?= $no_meja ?>" role="button"  style="margin-top: 25px;text-decoration:none"><img src="<?= base_url();?>/assets/icon/menu/bill.png" style="width: 125px;height: 125px;margin-top: 5px;border-radius: 50%;" alt="Hachi Grill" class="image" /><p style="color:#198754;margin-top: 5px; ">Bill Preview</p></a>
      <!-- <a class="" href="<?php echo base_url() ?>Kasir_waitress/meminta/<?= $no_meja ?>" role="button"  style="margin-top: 25px;text-decoration:none"><img src="<?= base_url();?>/assets/icon/menu/meminta-bill.png" style="width: 125px;height: 125px;margin-top: 5px;border-radius: 50%;" alt="Hachi Grill" class="image" /><p style="color:#198754;margin-top: 5px; ">Meminta Bill</p></a> -->
      <!-- <a class="" href="<?= base_url() ?>index.php/promo/home/<?= $no_meja ?>" role="button"  style="margin-top: 25px;text-decoration:none" disabled><img src="<?= base_url();?>/assets/icon/menu/promotion.png" style="width: 125px;height: 125px;margin-top: 5px;border-radius: 50%;padding: 1px 1px;" alt="Hachi Grill" class="image" /><p style="color:#198754;margin-top: 5px; ">Promotion</p></a> -->
    </div>
  </div>

</div>
 
        
    <?php $this->load->view('template/footer') ?>