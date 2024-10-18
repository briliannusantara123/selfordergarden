<?php $this->load->view('template/head') ?>
    <style type="text/css">
      .my-popup-class {
        z-index: 10000001;
      }
    @media (max-width: 414px) {
        .md {
       margin-top: 35px;
       top: 10px;
       right: 100px;
       width: 385px;
       height:600px;
       bottom: 0;
       z-index: 9998;
       left: 0;
       overflow: auto;
       overflow-y: auto;
    }
        }
          
        /* Media Query for low resolution  Tablets, Ipads */
        @media (min-width: 397px) {
            .md {
       margin-top: 30px;
       top: 10px;
       right: 100px;
       width: 395px;
       height:610px;
       bottom: 0;
       z-index: 9998;
       left: 0;
       overflow: auto;
       overflow-y: auto;
    }
        }
      @media (min-height: 640px) {
        .md {
       margin-top: 50px;
       top: 10px;
       right: 0px;
       width: 350px;
       height:515px;
       bottom: 0;
       z-index: 9998;
       left: 5px;
       overflow: auto;
       overflow-y: auto;
    }
    .mdl {
       margin-top: 205px;
       top: 10px;
       right: 0px;
       width: 340px;
       height:515px;
       bottom: 0;
       z-index: 9998;
       left: 10px;
       overflow: auto;
       overflow-y: auto;
    }

    #imgmodal{
        width: 150px;height: 100px;border-radius: 20px; display: block;margin-left: auto;margin-right: auto;
    }
    #description{
        color: #223c77;float: left;font-size: 15px;
    }
    #product_info{
        color: #223c77;margin-top: 2px;float: left;font-size: 15px;
    }
    #harga{
        color: #223c77;margin-top: 2px;float: right;font-size: 15px;
    }
    #option{
      float: left;color: #223c77;font-size: 15px;
    }
    .modalbutton{
      padding-left: 45px;padding-right: 45px;
    }
      }
        @media (min-height: 720px) {
            .md {
       margin-top: 85px;
       top: 10px;
       right: 0px;
       width: 350px;
       height:540px;
       bottom: 0;
       z-index: 9998;
       left: 17px;
       overflow: auto;
       overflow-y: auto;
    }
    .mdl {
       margin-top: 220px;
       top: 10px;
       right: 0px;
       width: 350px;
       height:515px;
       bottom: 0;
       z-index: 9998;
       left: 17px;
       overflow: auto;
       overflow-y: auto;
    }
    #imgmodal{
        width: 170px;height: 120px;border-radius: 20px; display: block;margin-left: auto;margin-right: auto;
    }
    #description{
        color: #223c77;float: left;font-size: 15px;
    }
    #product_info{
        color: #223c77;margin-top: 2px;float: left;font-size: 15px;
    }
    #harga{
        color: #223c77;margin-top: 2px;float: right;font-size: 15px;
    }
    #option{
      float: left;color: #223c77;font-size: 15px;
    }
        }
          
        /* Media Query for Tablets Ipads portrait mode */
        @media (min-width: 768px) and (max-width: 1024px){
            

        }
          
        /* Media Query for Laptops and Desktops */
        @media (min-width: 1025px) and (max-width: 1280px){
            
        }
        
      .button {
  background-color: white;
  color: #223c77;
  
  padding:16px 30px;
  text-align: center;

  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  transition-duration: 0.4s;
}

.active{
   background-color: #223c77;
  color: white;
  
  padding:16px 30px;
  text-align: center;
  border-radius: 10px;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  transition-duration: 0.4s;
  background-size: 55%;
  background-position-y: 20%;
  background-position-x: 50%;
}

.button:hover {
  /*background-color: #223c77;*/ /* Green */
  border-radius: 10px;
  color: white;
}
.wrapper{
  max-height: 120px;
  /*padding-bottom: 60px;*/
  margin-bottom: 50px;
  border:1px solid #223c77;
  display: flex;
  overflow: scroll; 
}
.wrapper .item{
  
  text-align: center;
  background-color: #ddd;
  margin-right: 2px;
}

.cari::-webkit-input-placeholder{
  color: #223c77;
}
 
/*support mozilla*/
.cari:-moz-input-placeholder{
  color: #223c77;
}
.text{
  color: #223c77;
}
.GRILL{
   background-image: url("<?= base_url() ?>/assets/icon/grill.png");
  background-repeat: no-repeat;
  background-size: 72%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.ENTREMETS{
   background-image: url("<?= base_url() ?>/assets/icon/entremets.png");
  background-repeat: no-repeat;
  background-size: 55%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.BREAD{
   background-image: url("<?= base_url() ?>/assets/icon/bread.png");
  background-repeat: no-repeat;
  background-size: 65%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.ECLAIR{
   background-image: url("<?= base_url() ?>/assets/icon/eclair.png");
  background-repeat: no-repeat;
  background-size: 60%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.CHOUX{
   background-image: url("<?= base_url() ?>/assets/icon/choux.png");
  background-repeat: no-repeat;
  background-size: 60%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.WHOLE_CAKE{
   background-image: url("<?= base_url() ?>/assets/icon/wholecake.png");
  background-repeat: no-repeat;
  background-size: 50%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.SANDWICH_and_BURGER{
   background-image: url("<?= base_url() ?>/assets/icon/burger.png");
  background-repeat: no-repeat;
  background-size: 37%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.PIZZA{
  background-image: url("<?= base_url() ?>/assets/icon/pizza.png");
  background-repeat: no-repeat;
  background-size: 70%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.PASTA{
   background-image: url("<?= base_url() ?>/assets/icon/pasta.png");
  background-repeat: no-repeat;
  background-size: 70%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.MAIN_COURSE{
   background-image: url("<?= base_url() ?>/assets/icon/meat.png");
  background-repeat: no-repeat;
  background-size: 50%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.SOUP{
   background-image: url("<?= base_url() ?>/assets/icon/soup.png");
  background-repeat: no-repeat;
  background-size: 70%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.SLICE{
   background-image: url("<?= base_url() ?>/assets/icon/slice.png");
  background-repeat: no-repeat;
  background-size: 70%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.SALAD{
   background-image: url("<?= base_url() ?>/assets/icon/salad.png");
  background-repeat: no-repeat;
  background-size: 70%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.ASIAN{
   background-image: url("<?= base_url() ?>/assets/icon/asian.png");
  background-repeat: no-repeat;
  background-size: 70%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.PERSONAL{
   background-image: url("<?= base_url() ?>/assets/icon/personal.png");
  background-repeat: no-repeat;
  background-size: 55%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.BREAKFAST{
   background-image: url("<?= base_url() ?>/assets/icon/breakfast.png");
  background-repeat: no-repeat;
  background-size: 55%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.CROISSANT{
   background-image: url("<?= base_url() ?>/assets/icon/croissant.png");
  background-repeat: no-repeat;
  background-size: 55%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.LITE_BITES{
   background-image: url("<?= base_url() ?>/assets/icon/Lightbites.png");
  background-repeat: no-repeat;
  background-size: 60%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.APPETIZER{
   background-image: url("<?= base_url() ?>/assets/icon/appetizer.png");
  background-repeat: no-repeat;
  background-size: 55%;
  background-position-y: 20%;
  background-position-x: 50%;
}
.all{
  background-image: url("<?= base_url() ?>/assets/icon/all.png");
  background-repeat: no-repeat;
  background-size: 80%;
  background-position-y: 20%;
  background-position-x: 50%;
}
footer{
  text-align: center;
  background-color: white;
  margin-top: 10px;
  border-top-right-radius: 10%;
  border-top-left-radius: 10%;
  /*position: absolute;*/
  bottom: 0;
  width: 100%;
  position: fixed;
  z-index: 200000;
}
.load{
    background: rgba(0,0,0,0.7);
    height: 100vh;
    width: 100%;
    position: fixed;
    z-index: 1000000;
  }

   #loading{
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
  }
  .sold{
    
    border-radius: 10px;
    position: fixed;
    z-index: 1000;
  }
  .soldtext{
    position:absolute;top: 30%; left:50%;transform:translate(-50%,-50%);text-align:center;color: red;font-weight: bold;font-size: 30px;
  }
  .disctext{
    position:absolute;top: 17%; left:35%;transform:translate(-50%,-50%);text-align:center;color: white;background-color:red;font-size: 15px;border-radius: 5px;
  }
    </style>

<div id="loading"></div>
<div id="load"></div>
<div id="loadingkonek"></div>
<?php 
  $tgl = date('Y-m-d');
  if ($promo) {
    if ($promo->promo_start_date == $tgl || $promo->promo_end_date <= $tgl) {
    $jam = date("H");
    }else{
      $jam = 0;
    }
  }
  
  
 ?>

    <nav style="z-index: 10000;position: fixed;width: 100%;background-color:#223c77;">
  <div class="container">
  <div class="row">
    <div class="col-9"><p style="padding-top: 13px;color: white;">Menu Cake dan Bakkery</p></div>
    <div class="col-1" style="z-index: 10040000;"><a style="text-align: center;margin-top: 6px;" href="<?php echo base_url() ?>index.php/Cart/home/<?= $nomeja ?>/CAKE%20DAN%20BAKERY/<?= $s ?>" class=""><svg xmlns="http://www.w3.org/2000/svg" width="25" height="23" color="white" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" style="margin-right: 10px;margin-top: 12px;margin-left: 10px;">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></a></div>
<!-- <div class="col-1"><strong><h3 style="color: white;font-size: 10px;margin-top: 6px;background-color: red;border-radius: 40%;text-align: center;"><b id="cart_count"><?= $cart_count ?></b></h3></strong></div> -->
<div class="col-1"><strong><h3 style="color: white;font-size: 10px;margin-top: 6px;background-color: red;border-radius: 40%;text-align: center;"><b id="total_qty_header"><!-- <?= $total_qty;?> --></b></h3></strong></div>
  </div>
  </div>
  <div style="width: 100%; height: 0px; border: 1px #000 solid;">
</div>
</nav>
<br>

<header style="display: flex;width:100%; position: fixed;z-index: 100000;margin-top: 30px;background-color: white;border-bottom-right-radius: 5%;
  border-bottom-left-radius: 5%;">

<div class="wrapper" style="background-color: white;">
  <!-- <div class="item">
      <a href="#rekomendasi" id="rekomendasi" class="button rekomendasi testrekomendasi" style="text-decoration:none;padding: 10px 10px;padding-top: 22px;"><p style="margin-top: 60px;margin-bottom: 1px;">recommendation</p></a>
  </div> -->
  <!-- <div class="item">
      <a href="#" id="all" class="button all" style="text-decoration:none"><p style="margin-top: 60px;margin-bottom: 1px;">   ALL   </p></a>
  </div> -->
 <?php foreach($sub as $i){ ?>
    <div class="item">
      <a href="<?= base_url() ?>index.php/ordercakebakery/menu/CAKE%20DAN%20BAKERY/<?= str_replace(" ","%20", $i['sub_category_so']) ?>#<?= str_replace(" ","_", $i['sub_category_so']) ?>" id="<?= str_replace(" ","_", $i['sub_category_so']) ?>" class="button <?= str_replace(" ","_", $i['sub_category_so']) ?> test<?= str_replace(" ","_", $i['sub_category_so']) ?>"  style="text-decoration:none"><p style="margin-top: 60px;margin-bottom: 1px;"><?= str_replace(" ","", $i['sub_category_so'])?></p></a></div>
 <?php  }  ?>
</div>



<!-- <div class="container" style="display: flex;margin-bottom: 20px; margin-top: 20px;background-color: white;border-radius: 40%;">
  <div class="row row-cols-3">
    <?php foreach($sub as $i){ ?>  
<div class="container text-center">
  <div class="row">
    <div class="col">
      <a href="<?= base_url() ?>ordermakanan/menu/Makanan/<?= $i['description'] ?>/<?= $nomeja ?>" class="button <?= str_replace(" ","_", $i['description']) ?>"><?= str_replace(" ","_", $i['description'])?></a>
      
    </div>
    <div class="col">
      
      <div class="container text-center">
  <div class="row">
    <div class="col">
      
    </div>
  </div>
</div>
    </div>
  </div>
</div>

<?php } ?>
  </div> -->
</div>
</header>
<form action="<?= base_url() ?>index.php/ordermakanan/search/<?= $nomeja ?>" method="post" >
  <div class="container text-center" style="margin-top: 150px;display: flex;width:100%; position: fixed;z-index: 100000; ">
  <div class="row">
    <div class="col-9"><input type="text" name="keyword" class="form-control cari"  placeholder="Find Food..." style="border:1px solid #223c77;padding-left: 10px;padding-right: 20px;"></div>
    <div class="col-3"><button type="submit" class="btn btn-success" style="padding-left: 20px;padding-right: 20px;">Find</button></div>
  </div>
</div>
</form>
<!-- <?= base_url() ?>ordermakanan/addcart/<?= $nomeja ?> -->
<form action="#" method="post"> 
<div class="container text-center" style="margin-top: 185px;">
  <div class="row row-cols-2">
    <?php foreach($item as $i){ ?>
      <?php if ($i->is_sold_out == 0): ?>
        <div class="container text-center" style="position:relative;">
          <div>
          <div class="row">
            <div class="col" style="margin-top:10px;">
               
              <?php if ( $i->image_path != "" ): ?>
                <?php if ($promo): ?>
                    <?php if ($i->with_option == 1 || $i->with_option == 2 || $i->with_option == 3): ?>

                      <h5 id="qtycart<?= $i->id ?>" class="qtycart<?= $i->id ?>" style="font-size: 12px;float: right;background-color: red;border-radius: 20px;padding: 3px;color: white;">Cart Qty 0</h5>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>" style="color: #223c77;font-size: 13px;text-decoration: none;"><img src="<?= $i->image_path ?>" alt="Red dot" style="width: 120px;height: 120px;border-radius: 20px;" /><br> <h5 style="font-size: 12px;">Customize</h5><div class="disctext"><?= $promo->promo_name ?></div></a>
                      <?php else: ?>

                        <h5 id="qtycart<?= $i->id ?>" class="qtycart<?= $i->id ?>" style="font-size: 12px;float: right;background-color: red;border-radius: 20px;padding: 3px;color: white;">Cart Qty 0</h5>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>"><img src="<?= $i->image_path ?>" alt="Red dot" style="width: 120px;height: 120px;border-radius: 20px;" /><div class="disctext"><?= $promo->promo_name ?></div></a>
                      <?php endif ?>
                <?php else: ?>
                      <?php if ($i->with_option == 1 || $i->with_option == 2 || $i->with_option == 3): ?>

                        <h5 id="qtycart<?= $i->id ?>" class="qtycart<?= $i->id ?>" style="font-size: 12px;float: right;background-color: red;border-radius: 20px;padding: 3px;color: white;">Cart Qty 0</h5>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>" style="color: #223c77;font-size: 13px;text-decoration: none;"><img src="<?= $i->image_path ?>" alt="Red dot" style="width: 120px;height: 120px;border-radius: 20px;" /><br> <h5 style="font-size: 12px;">Customize</h5></a>
                        <?php else: ?>

                          <h5 id="qtycart<?= $i->id ?>" class="qtycart<?= $i->id ?>" style="font-size: 12px;float: right;background-color: red;border-radius: 20px;padding: 3px;color: white;">Cart Qty 0</h5>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>"><img src="<?= $i->image_path ?>" alt="Red dot" style="width: 120px;height: 120px;border-radius: 20px;" /></a>
                        <?php endif ?>      
                <?php endif ?>
                
              <?php  else: ?>
                <?php if ($promo): ?>
                    <?php if ($i->with_option == 1 || $i->with_option == 2 || $i->with_option == 3): ?>
                    <h5 id="qtycart<?= $i->id ?>" class="qtycart<?= $i->id ?>" style="font-size: 12px;float: right;background-color: red;border-radius: 20px;padding: 3px;color: white;">Cart Qty 0</h5>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>" style="color: #223c77;font-size: 13px;text-decoration: none;"><img src="<?= base_url();?>assets/logo.png" alt="Red dot" style="width: 160px;height: 120px;border-radius: 20px;" /><br> <h5 style="font-size: 12px;">Customize</h5><div class="disctext"><?= $promo->promo_name ?></div></a>
                    <?php else: ?>

                      <h5 id="qtycart<?= $i->id ?>" class="qtycart<?= $i->id ?>" style="font-size: 12px;float: right;background-color: red;border-radius: 20px;padding: 3px;color: white;">Cart Qty 0</h5>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>"><img src="<?= base_url();?>assets/logo.png" alt="Red dot" style="width: 160px;height: 120px;border-radius: 20px;" /><div class="disctext"><?= $promo->promo_name ?></div></a>
                    <?php endif ?>
                  <?php else: ?>
                    <?php if ($i->with_option == 1 || $i->with_option == 2 || $i->with_option == 3): ?>
                    <h5 id="qtycart<?= $i->id ?>" class="qtycart<?= $i->id ?>" style="font-size: 12px;float: right;background-color: red;border-radius: 20px;padding: 3px;color: white;">Cart Qty 0</h5>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>" style="color: #223c77;font-size: 13px;text-decoration: none;"><img src="<?= base_url();?>assets/logo.png" alt="Red dot" style="width: 160px;height: 120px;border-radius: 20px;" /><br> <h5 style="font-size: 12px;">Customize</h5></a>
                    <?php else: ?>

                      <h5 id="qtycart<?= $i->id ?>" class="qtycart<?= $i->id ?>" style="font-size: 12px;float: right;background-color: red;border-radius: 20px;padding: 3px;color: white;">Cart Qty 0</h5>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>"><img src="<?= base_url();?>assets/logo.png" alt="Red dot" style="width: 160px;height: 120px;border-radius: 20px;" /></a>
                    <?php endif ?>
                  <?php endif ?>  
                
              <?php endif ?>
              <h6 style="color: #223c77;font-size: 16px;"class="text_<?= str_replace(" ","_", $i->description)?> text"><?= $i->description ?></h6>
              
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
                    // var_dump($holiday);exit();
                ?>
                <!-- <?php if ($promo): ?>
                  <?php
                    $dwknd = ($i->harga_weekend * $promo->promo_value)/100;
                    $dwkdy = ($i->harga_weekday * $promo->promo_value)/100; 
                    $hpwknd =  $i->harga_weekend - $dwknd;
                    $hpwkdy =  $i->harga_weekday - $dwkdy;
                  ?>
                  <?php if ( $holiday == NULL): ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($hpwknd) ?></h6>
                    <?php else: ?>
                      <h6 class="text">Rp <?= number_format($hpwkdy) ?></h6>
                    <?php   endif ?>
                  <?php  else: ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($hpwknd) ?></h6>
                    <?php elseif ($holiday->tipe == 0) :?>
                      <h6 class="text">Rp <?= number_format($hpwknd) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($hpwknd) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time <= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($hpwkdy) ?></h6>
                    <?php else: ?>
                      <h6 class="text">Rp <?= number_format($hpwkdy) ?></h6>
                    <?php endif ?>
                  <?php endif ?>
                <?php else: ?>
                  <?php if ( $holiday == NULL): ?>
                     <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                      <?php else: ?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php   endif ?>
                  <?php  else: ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 0) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time <= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php else: ?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php endif ?>
                  <?php endif ?>      
                <?php endif ?> -->
                <?php if ( $holiday == NULL): ?>
                     <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                      <?php else: ?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php   endif ?>
                  <?php  else: ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 0) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time <= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php else: ?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php endif ?>
                  <?php endif ?>  
              
              <?php endif ?>
              
            </div>
            <div class="col">
              <?php $cekpesan = $this->Item_model->cekpesan($i->no); ?>
              <?php foreach ($cekpesan as $c): ?>
                <h6 style="color: #223c77;font-size: 13px;">Ordered Qty : <?= $c->qty ?></h6>
              <?php endforeach ?>
              
              <!-- <?php $options = $this->Item_model->option($i->no); ?>
              <?php if ($i->with_option == 1 || $i->with_option == 2): ?>
                <a href="" style="text-decoration:none;" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>"><input type="text" name="pesan<?= $i->id ?>" id="pesan<?= $i->id ?>" class="form-control cari" placeholder="Customizable" style="border:1px solid #223c77;padding-left: 20%;" disabled></a>
              <?php else: ?>
                <input type="hidden" name="pesan<?= $i->id ?>" id="pesan<?= $i->id ?>" class="form-control cari" placeholder="Masukan Pesan" style="border:1px solid #223c77;">
              <?php endif ?> -->
            <input type="hidden" name="pesan<?= $i->id ?>" id="pesan<?= $i->id ?>" class="form-control cari" placeholder="Masukan Pesan" style="border:1px solid #223c77;">
            <input type="hidden" name="pesandua<?= $i->id ?>" id="pesandua<?= $i->id ?>" class="form-control cari" placeholder="Masukan Pesan" style="border:1px solid #223c77;">
            <input type="hidden" name="pesantiga<?= $i->id ?>" id="pesantiga<?= $i->id ?>" class="form-control cari" placeholder="Masukan Pesan" style="border:1px solid #223c77;">
             
              <div class="container text-center">
          <div class="row" style="margin-top: 5px;">
            <div class="col" >
              <button type="button" class="btn btn-success kurang<?= $i->id ?>" style="padding-left: 9px;padding-right: 9px;" id="kurang<?= $i->id ?>" onclick="OrderQty('minus','<?= $i->id ?>','<?= $i->no ?>','<?= $i->stock ?>','<?= $i->need_stock ?>','<?= $this->session->userdata('user_order_id') ?>');"> - </button>
            </div>
            <div class="col">
                <!-- <?php if ($i->id_customer != $ic): ?>
                  <input type="text" name="qty<?= $i->id ?>" id="qty<?= $i->id ?>"  value="0"  class="form-control" style="border:1px solid #223c77;margin-bottom: 5px;color: #223c77; width:35px; " readonly>
                <?php  elseif ($i->id_customer == NULL): ?>
                  <input type="text" name="qty<?= $i->id ?>" id="qty<?= $i->id ?>"  value="NULL"  class="form-control" style="border:1px solid #223c77;margin-bottom: 5px;color: #223c77; width:35px; " readonly>
                <?php else: ?> 
                 <input type="text" name="qty<?= $i->id ?>" id="qty<?= $i->id ?>"  value="<?= $i->qty ?>"  class="form-control" style="border:1px solid #223c77;margin-bottom: 5px;color: #223c77; width:35px; " readonly>
                <?php endif ?> -->
                <input type="text" name="qty<?= $i->id ?>" id="jumlah<?= $i->id ?>" value="0"  class="form-control" style="border:1px solid #223c77;margin-bottom: 5px;color: #223c77; width:43px;text-align: center; " readonly>
              
            </div>

            <div class="col">
              <?php $options = $this->Item_model->option($i->no); ?>
              <?php if ($i->with_option == 1 || $i->with_option == 2 || $i->with_option == 3): ?>
                <button type="button" class="btn btn-success nambah<?= $i->id ?>" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>" style="padding-left: 7px;padding-right: 7px;">+</button>
              <?php else: ?>
                <button type="button" class="btn btn-success tambah<?= $i->id ?>" style="padding-left: 7px;padding-right: 7px;" id="tambah<?= $i->id ?>" onclick="OrderQty('plus','<?= $i->id ?>','<?= $i->no ?>','<?= $i->stock ?>','<?= $i->need_stock ?>','<?= $this->session->userdata('user_order_id') ?>');">+</button>
              <?php endif ?>
              </div>
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="container text-center sold" style="position:relative;">
          <div>
          <div class="row">
            <div class="col" style="margin-top:10px;">
               
              <?php if ( $i->image_path != "" ): ?>
                <?php if ($i->with_option == 1 || $i->with_option == 2 || $i->with_option == 3): ?>
                
          <a href="#"><img src="<?= $i->image_path ?>" alt="Red dot" style="width: 120px;height: 120px;border-radius: 20px;opacity: 075;" /><div class="soldtext">SOLD OUT</div></a>
                <?php else: ?>

                  
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>"><img src="<?= $i->image_path ?>" alt="Red dot" style="width: 120px;height: 120px;border-radius: 20px;opacity: 075;" /><div class="soldtext">SOLD OUT</div></a>
                <?php endif ?>
              <?php  else: ?>
                
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>"><img src="<?= base_url();?>assets/logo.png" alt="Red dot" style="width: 160px;height: 120px;border-radius: 20px;" /><div class="soldtext">SOLD OUT</div></a>
              <?php endif ?>
              <h6 style="color: #223c77;font-size: 16px;"class="text_<?= str_replace(" ","_", $i->description)?> text"><?= $i->description ?></h6>
              
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
                    // var_dump($holiday);exit();
                ?>
                <!-- <?php if ($promo): ?>
                  <?php
                    $dwknd = ($i->harga_weekend * $promo->promo_value)/100;
                    $dwkdy = ($i->harga_weekday * $promo->promo_value)/100; 
                    $hpwknd =  $i->harga_weekend - $dwknd;
                    $hpwkdy =  $i->harga_weekday - $dwkdy;
                  ?>
                  <?php if ( $holiday == NULL): ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($hpwknd) ?></h6>
                    <?php else: ?>
                      <h6 class="text">Rp <?= number_format($hpwkdy) ?></h6>
                    <?php   endif ?>
                  <?php  else: ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($hpwknd) ?></h6>
                    <?php elseif ($holiday->tipe == 0) :?>
                      <h6 class="text">Rp <?= number_format($hpwknd) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($hpwknd) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time <= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($hpwkdy) ?></h6>
                    <?php else: ?>
                      <h6 class="text">Rp <?= number_format($hpwkdy) ?></h6>
                    <?php endif ?>
                  <?php endif ?>
                <?php else: ?>
                  <?php if ( $holiday == NULL): ?>
                     <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                      <?php else: ?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php   endif ?>
                  <?php  else: ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 0) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time <= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php else: ?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php endif ?>
                  <?php endif ?>      
                <?php endif ?> -->
                <?php if ( $holiday == NULL): ?>
                     <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                      <?php else: ?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php   endif ?>
                  <?php  else: ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 0) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time <= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php else: ?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php endif ?>
                  <?php endif ?>  
              
              <?php endif ?>
              
            </div>
            <div class="col">
              <?php $cekpesan = $this->Item_model->cekpesan($i->no); ?>
              <?php foreach ($cekpesan as $c): ?>
                <h6 style="color: #223c77;font-size: 13px;">Ordered Qty : <?= $c->qty ?></h6>
              <?php endforeach ?>
              
              <!-- <?php $options = $this->Item_model->option($i->no); ?>
              <?php if ($i->with_option == 1 || $i->with_option == 2): ?>
                <a href="" style="text-decoration:none;" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>"><input type="text" name="pesan<?= $i->id ?>" id="pesan<?= $i->id ?>" class="form-control cari" placeholder="Customizable" style="border:1px solid #223c77;padding-left: 20%;" disabled></a>
              <?php else: ?>
                <input type="hidden" name="pesan<?= $i->id ?>" id="pesan<?= $i->id ?>" class="form-control cari" placeholder="Masukan Pesan" style="border:1px solid #223c77;">
              <?php endif ?> -->
            <input type="hidden" name="pesan<?= $i->id ?>" id="pesan<?= $i->id ?>" class="form-control cari" placeholder="Masukan Pesan" style="border:1px solid #223c77;">
            <input type="hidden" name="pesandua<?= $i->id ?>" id="pesandua<?= $i->id ?>" class="form-control cari" placeholder="Masukan Pesan" style="border:1px solid #223c77;">
            <input type="hidden" name="pesantiga<?= $i->id ?>" id="pesantiga<?= $i->id ?>" class="form-control cari" placeholder="Masukan Pesan" style="border:1px solid #223c77;">
             
              <div class="container text-center">
          <div class="row" style="margin-top: 5px;">
            <div class="col" >
              <button type="button" class="btn btn-success" style="padding-left: 9px;padding-right: 9px;opacity:0.7"> - </button>
            </div>
            <div class="col">
                <!-- <?php if ($i->id_customer != $ic): ?>
                  <input type="text" name="qty<?= $i->id ?>" id="qty<?= $i->id ?>"  value="0"  class="form-control" style="border:1px solid #223c77;margin-bottom: 5px;color: #223c77; width:35px; " readonly>
                <?php  elseif ($i->id_customer == NULL): ?>
                  <input type="text" name="qty<?= $i->id ?>" id="qty<?= $i->id ?>"  value="NULL"  class="form-control" style="border:1px solid #223c77;margin-bottom: 5px;color: #223c77; width:35px; " readonly>
                <?php else: ?> 
                 <input type="text" name="qty<?= $i->id ?>" id="qty<?= $i->id ?>"  value="<?= $i->qty ?>"  class="form-control" style="border:1px solid #223c77;margin-bottom: 5px;color: #223c77; width:35px; " readonly>
                <?php endif ?> -->
                <input type="text" value="0"  class="form-control" style="border:1px solid #223c77;margin-bottom: 5px;color: #223c77; width:43px;text-align: center;opacity:0.7 " disabled>
              
            </div>

            <div class="col">
              <?php $options = $this->Item_model->option($i->no); ?>
              <?php if ($i->with_option == 1 || $i->with_option == 2 || $i->with_option == 3): ?>
                <button type="button" class="btn btn-success" style="padding-left: 7px;padding-right: 7px;opacity:0.7">+</button>
              <?php else: ?>
                <button type="button" class="btn btn-success" style="padding-left: 7px;padding-right: 7px;opacity:0.7">+</button>
              <?php endif ?>
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>

      <div class="container text-center">
  <div class="row">
    <div class="col">
      
      <input type="hidden" name="nama<?= $i->id ?>" id="nama<?= $i->id ?>" value="<?= $i->description ?>" class="form-control nama">
       <?php 
                    $hr = date('l');
                    $date = date('Y-m-d');
                    $time = date('H:i:s');  
                    $holiday = $this->Item_model->get_holiday($date);
                    $waktu = $this->db->order_by('id',"desc")
                    ->limit(1)
                    ->get('sh_m_setup')
                    ->row('item_time_check');
                    // var_dump($holiday);exit();
                ?>
                <!-- <?php if ($promo): ?>
                  <?php
                    $dwknd = ($i->harga_weekend * $promo->promo_value)/100;
                    $dwkdy = ($i->harga_weekday * $promo->promo_value)/100; 
                    $hpwknd =  $i->harga_weekend - $dwknd;
                    $hpwkdy =  $i->harga_weekday - $dwkdy;
                  ?>
                  <?php if ($holiday == NULL): ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $hpwknd ?>" class="form-control harga">
                    <?php else: ?>  
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $hpwkdy ?>" class="form-control harga">
                    <?php endif ?>
                  <?php else: ?>  
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $hpwknd ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 0) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $hpwknd ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $hpwknd ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 0 && $time <= $waktu) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $hpwkdy ?>" class="form-control harga">
                    <?php else: ?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $hpwkdy ?>" class="form-control harga">
                    <?php endif ?>
                  <?php endif ?>
                <?php else: ?>
                  <?php if ($holiday == NULL): ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekend ?>" class="form-control harga">
                    <?php else: ?>  
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekday ?>" class="form-control harga">
                    <?php endif ?>
                  <?php else: ?>  
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekend ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 0) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekend ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekend ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 0 && $time <= $waktu) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekday ?>" class="form-control harga">
                    <?php else: ?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekday ?>" class="form-control harga">
                    <?php endif ?>
                  <?php endif ?>
                <?php endif ?> -->
                <?php if ($holiday == NULL): ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekend ?>" class="form-control harga">
                    <?php else: ?>  
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekday ?>" class="form-control harga">
                    <?php endif ?>
                  <?php else: ?>  
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekend ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 0) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekend ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekend ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 0 && $time <= $waktu) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekday ?>" class="form-control harga">
                    <?php else: ?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekday ?>" class="form-control harga">
                    <?php endif ?>
                  <?php endif ?>
      <input type="hidden" name="no<?= $i->id ?>" id="no<?= $i->id ?>" value="<?= $i->no ?>" class="form-control harga">
      <input type="hidden" name="need_stock<?= $i->id ?>" id="need_stock<?= $i->id ?>" value="<?= $i->need_stock ?>" class="form-control harga">
      <input type="hidden" name="sub_category_so<?= $i->id ?>" id="sub_category_so<?= $i->id ?>" value="<?= $i->sub_category_so ?>" class="form-control">
      
    </div>
  </div>
</div>
<div class="container text-center">
  <!-- <div class="row">
    <div class="col-7" style="color: #223c77;">TakeAway?</div>
    <div class="col-5"><input type="checkbox" value="Take Away" onclick="getClick<?= $i->id ?>()" class="ta<?= $i->id ?>"></div>
  </div> -->
</div>
<div class="container text-center" id="tk<?= $i->id ?>" hidden >
  <div class="row">
    <div class="col" >
      <input type="hidden" name="cek[]" class="cek<?= $i->id ?>" id="cek<?= $i->id ?>">
      <button type="button" class="btn btn-success mi<?= $i->id ?>" style="padding-left: 10px;padding-right: 10px;"> - </button>
    </div>
    <div class="col">
      <input type="text" name="qta[]" id="qta" value="0"  class="form-control nu<?= $i->id ?>" id="cek<?= $i->id ?>" style="border:1px solid #223c77;margin-bottom: 5px;color: #223c77; width:35px;" readonly disabled="disabled">
    </div>
    <div class="col">
      <button type="button" class="btn btn-success pl<?= $i->id ?>" id="pls<?= $i->id ?>" style="padding-left: 10px;padding-right: 10px;">+</button>
    </div>
  </div>
</div>
      
    </div>
  </div>
</div>

<?php } ?>

  </div>
</div>   
<br>
<br>  
<br>

<footer>
<div class="container text-center">
<!-- <button type="submit" class="btn btn-outline-success" style="padding-top: 20px;padding-bottom: 20px;padding-left: 50px;padding-right: 50px;">
  Order 
</button> -->
<a href="<?php echo base_url() ?>index.php/Cart/home/<?= $nomeja ?>/CAKE%20DAN%20BAKERY/<?= $s ?>#<?= $s ?>" class="btn btn-outline-success" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;">Cart<i class="fa fa-cart-plus"></i> <b id="total_qty" align="right"><?= $total_qty;?></b></a>
<a href="<?php echo base_url('') ?>index.php/selforder/home/<?= $nomeja ?>" class="btn btn-outline-danger" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;">Back</a>
</form>
<?php foreach ($item as $i): ?>
  <?php if ($i->with_option) : ?>
  <div class="md modal fade" id="exampleModal<?= $i->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <?php else: ?>
  <div class="mdl modal fade" id="exampleModal<?= $i->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<?php endif ?>

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #223c77;color: white;">
        <h5 class="modal-title" style="text-align: center;margin-left: 42%;" id="exampleModalLabel">Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="tutuptab<?= $i->id ?>()" id="close"></button>
      </div>
      <div class="modal-body">
        <?php if ( $i->image_path != "" ): ?>
        <img src="<?= $i->image_path ?>" alt="Red dot"  id="imgmodal" class="img-fluid" />
        <?php  else: ?>
          <img src="<?= base_url();?>assets/logo.png" id="imgmodal" alt="Red dot" class="img-fluid" />
      <?php endif ?>
    <form action="#" method="post" id="input<?= $i->id ?>">
      <div class="card mb-3">
        
        <div class="card-body">

          <h5 id="description"><?= $i->description ?></h5><br>  
          <h6 id="product_info"><?= $i->product_info ?></h6>
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
                    // var_dump($holiday);exit();
                ?>
                <!-- <?php if ($promo): ?>
                  <?php
                    $dwknd = ($i->harga_weekend * $promo->promo_value)/100;
                    $dwkdy = ($i->harga_weekday * $promo->promo_value)/100; 
                    $hpwknd =  $i->harga_weekend - $dwknd;
                    $hpwkdy =  $i->harga_weekday - $dwkdy;
                  ?>
                  <?php if ( $holiday == NULL): ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($hpwknd) ?></h6>
                    <?php else: ?>
                      <h6 class="text">Rp <?= number_format($hpwkdy) ?></h6>
                    <?php   endif ?>
                  <?php  else: ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($hpwknd) ?></h6>
                    <?php elseif ($holiday->tipe == 0) :?>
                      <h6 class="text">Rp <?= number_format($hpwknd) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($hpwknd) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time <= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($hpwkdy) ?></h6>
                    <?php else: ?>
                      <h6 class="text">Rp <?= number_format($hpwkdy) ?></h6>
                    <?php endif ?>
                  <?php endif ?>
                <?php else: ?>
                  <?php if ( $holiday == NULL): ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php else: ?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php   endif ?>
                  <?php  else: ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 0) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time <= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php else: ?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php endif ?>
                  <?php endif ?>
                <?php endif ?> -->
                <?php if ( $holiday == NULL): ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php else: ?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php   endif ?>
                  <?php  else: ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 0) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekend) ?></h6>
                    <?php elseif ($holiday->tipe == 1 && $time <= $waktu) :?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php else: ?>
                      <h6 class="text">Rp <?= number_format($i->harga_weekday) ?></h6>
                    <?php endif ?>
                  <?php endif ?>
              <?php endif ?>
          
      <input type="hidden" name="nama<?= $i->id ?>" id="nama<?= $i->id ?>" value="<?= $i->description ?>" class="form-control nama">
                <?php 
                    $hr = date('l');
                    $date = date('Y-m-d');
                    $time = date('H:i:s');  
                    $holiday = $this->Item_model->get_holiday($date);
                    $waktu = $this->db->order_by('id',"desc")
                    ->limit(1)
                    ->get('sh_m_setup')
                    ->row('item_time_check');
                    // var_dump($holiday);exit();
                ?>
                <!-- <?php if ($promo): ?>
                  <?php
                    $dwknd = ($i->harga_weekend * $promo->promo_value)/100;
                    $dwkdy = ($i->harga_weekday * $promo->promo_value)/100; 
                    $hpwknd =  $i->harga_weekend - $dwknd;
                    $hpwkdy =  $i->harga_weekday - $dwkdy;
                  ?>
                  <?php if ($holiday == NULL): ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $hpwknd ?>" class="form-control harga">
                    <?php else: ?>  
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $hpwkdy ?>" class="form-control harga">
                    <?php endif ?>
                  <?php else: ?>  
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $hpwknd ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 0) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $hpwknd ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $hpwknd ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 0 && $time <= $waktu) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $hpwkdy ?>" class="form-control harga">
                    <?php else: ?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $hpwkdy ?>" class="form-control harga">
                    <?php endif ?>
                  <?php endif ?>
                <?php else: ?>
                  <?php if ($holiday == NULL): ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekend ?>" class="form-control harga">
                    <?php else: ?>  
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekday ?>" class="form-control harga">
                    <?php endif ?>
                  <?php else: ?>  
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekend ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 0) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekend ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekend ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 0 && $time <= $waktu) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekday ?>" class="form-control harga">
                    <?php else: ?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekday ?>" class="form-control harga">
                    <?php endif ?>
                  <?php endif ?>
                <?php endif ?> -->
                <?php if ($holiday == NULL): ?>
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekend ?>" class="form-control harga">
                    <?php else: ?>  
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekday ?>" class="form-control harga">
                    <?php endif ?>
                  <?php else: ?>  
                    <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekend ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 0) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekend ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekend ?>" class="form-control harga">
                    <?php elseif ($holiday->tipe == 0 && $time <= $waktu) :?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekday ?>" class="form-control harga">
                    <?php else: ?>
                      <input type="hidden" name="harga<?= $i->id ?>" id="harga<?= $i->id ?>" value="<?= $i->harga_weekday ?>" class="form-control harga">
                    <?php endif ?>
                  <?php endif ?>
                
                
      
      <input type="hidden" name="no<?= $i->id ?>" id="no<?= $i->id ?>" value="<?= $i->no ?>" class="form-control">
      <input type="hidden" name="id" id="id<?= $i->id ?>" value="<?= $i->id ?>" class="form-control">
        </div>
      </div>

      <div class="card" style="margin-bottom: 10px;">
        <ul class="list-group list-group-flush">
          <?php $options = $this->Item_model->option($i->no); ?>
          <?php $options2 = $this->Item_model->option2($i->no); ?>
          <?php $options3 = $this->Item_model->option3($i->no); ?>
          <?php if ($i->with_option == 1): ?>
            <select name="pesan<?= $i->id ?>" id="" class="form-control" style="text-align:center;color: #223c77;">
              <option value="" selected disabled>Select Option Customize</option>
            <?php foreach ($options as $o ):?>
                <option value="<?= $o->description ?>"><?= $o->description ?></option>
            <?php endforeach ?>
            </select>

          <?php elseif($i->with_option == 2): ?>
            <select name="pesan<?= $i->id ?>" id="" class="form-control" style="text-align:center;color: #223c77;">
              <option value="" selected disabled>Select Option Customize</option>
            <?php foreach ($options as $o ):?>
                <option value="<?= $o->description ?>"><?= $o->description ?></option>
            <?php endforeach ?>
            </select>
            <div style="margin-top:5px;"></div>  
            <select name="pesandua<?= $i->id ?>" id="" class="form-control" style="text-align:center;color: #223c77;">
              <option value="" selected disabled>Select Option Customize</option>
            <?php foreach ($options2 as $o ):?>
                <option value="<?= $o->description ?>"><?= $o->description ?></option>
            <?php endforeach ?>
            </select>
            </select>
          <?php elseif($i->with_option == 3): ?>
            <select name="pesan<?= $i->id ?>" id="" class="form-control" style="text-align:center;color: #223c77;">
              <option value="" selected disabled>Select Option Customize</option>
            <?php foreach ($options as $o ):?>
                <option value="<?= $o->description ?>"><?= $o->description ?></option>
            <?php endforeach ?>
            </select>
            <div style="margin-top:5px;"></div>  
            <select name="pesandua<?= $i->id ?>" id="" class="form-control" style="text-align:center;color: #223c77;">
              <option value="" selected disabled>Select Option Customize</option>
            <?php foreach ($options2 as $o ):?>
                <option value="<?= $o->description ?>"><?= $o->description ?></option>
            <?php endforeach ?>
            </select>
            <div style="margin-top:5px;"></div>  
            <select name="pesantiga<?= $i->id ?>" id="" class="form-control" style="text-align:center;color: #223c77;">
              <option value="" selected disabled>Select Option Customize</option>
            <?php foreach ($options3 as $o ):?>
                <option value="<?= $o->description ?>"><?= $o->description ?></option>
            <?php endforeach ?>
            </select>
          <?php endif ?>
        </ul>
      </div>
      
      
      <div class="container text-center" style="display: flex;justify-content: center;">
      <div class="row row-cols-auto">
        <?php if ($i->with_option == 1 || $i->with_option == 2 || $i->with_option == 3): ?>
        <div class="col"><button type="button" class="btn btn-success minus<?= $i->id ?>" style="padding-left: 15px;padding-right: 15px;"> - </button></div>
        <div class="col"><input type="text" name="qty<?= $i->id ?>" id="qty<?= $i->id ?>"   class="form-control num<?= $i->id ?>" value="0" style="border:1px solid #223c77;margin-bottom: 5px;color: #223c77; width:43px;text-align: center; "  readonly></div>
        <input type="hidden" value="<?= $i->stock?>" id="stock<?= $i->id ?>">
        <input type="hidden" value="<?= $i->need_stock?>" id="ns<?= $i->id ?>">
        <input type="hidden" value="<?= $total_qty ?>" id="tqi<?= $i->id ?>">
        
        <div class="col"><button type="button" class="btn btn-success plus<?= $i->id ?>" style="padding-left: 15px;padding-right: 15px;">+</button></div>

      </div>
    </div>
    <!-- <button type="button" class="btn btn-success" style="padding-left: 45px;padding-right: 45px;" data-bs-dismiss="modal" aria-label="Close">Tambah Ke Keranjang <a id="total<?= $i->id ?>"></a></button> -->
    <button id="simpan<?= $i->id ?>" type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close"  onclick="simpanalert('<?= $i->need_stock ?>')">Add to Cart <a id="total<?= $i->id ?>"></a></button>
    <?php endif ?>
      </div>
      
</div>
      </div>
    </div>
  </div>
</div>
</form>

<?php endforeach ?>

<br>
</div>
</footer>
<!-- Modal -->

 <script src="<?= base_url();?>/assets/bootstrap/js/jQuery3.5.1.min.js"></script>

 <script type="text/javascript">
  
  function OrderQty(tipe,id,no,stock,need_stock,uoi) {
    var itemCode = $('#no' + id).val();
    var desc = $('#nama' + id).val();
    var price = $('#harga' + id).val();
    var notes = $('#pesan' + id).val();
    // $('#kurang' + id).prop('disabled', true);
    // $('#tambah' + id).prop('disabled', true);
    $.ajax({
      type:'POST',
      data: {tipe: tipe,id: id,item_code: itemCode,description: desc,unit_price: price,extra_notes: notes,no: no,stock: stock,need_stock: need_stock,uoi: uoi},
      url: '<?= base_url().'index.php/ordermakanan/orderqty' ?>',
      dataType:'json',})
      .done(function (hasil){
        localStorage.setItem(no,hasil.new_qty);
        
        if(hasil.status == true){
          $('#kurang' + id).prop('disabled', false);
          $('#tambah' + id).prop('disabled', false);
          
          $('#jumlah' + id).val(hasil.new_qty);
          $('#qtycart' + id).text("Cart Qty "+localStorage.getItem(no));
          $('#pesan' + id).val(hasil.pesan);
          $('#pesandua' + id).val(hasil.pesandua);
          $('#pesantiga' + id).val(hasil.pesantiga);
          $('#cart_count').text(hasil.cart_count);
          $('#total_qty').text(hasil.total_qty);
          $('#total_qty_header').text(hasil.total_qty);
          if (hasil.cek == true) {
            var isi = hasil.notif;
            Swal.fire({
            title: 'Notification!',
            text: isi,
            icon: 'warning',
            confirmButtonColor: "#223c77",
            confirmButtonText: 'OK'
            })
          }

        }
      });
  }
</script>
<?php foreach($sub as $i): ?>
<script type="text/javascript">
  var<?= str_replace(" ","_", $i['sub_category_so']) ?>= document.getElementById('<?= str_replace(" ","_", $i['sub_category_so']) ?>');
  var all = document.getElementById('all');
  var rekomendasi = document.getElementById('rekomendasi');
  var item<?= str_replace(" ","_", $i['sub_category_so']) ?> = document.querySelector('.test<?= str_replace(" ","_", $i['sub_category_so']) ?>');
  var itemall = document.querySelector('.testall');
  var itemrekomendasi = document.querySelector('.testrekomendasi');

    if (window.location.toString() == "<?= base_url() ?>index.php/ordercakebakery/menu/CAKE%20DAN%20BAKERY/<?= str_replace(" ","%20", $i['sub_category_so']) ?>#<?= str_replace(" ","_", $i['sub_category_so']) ?>") {
        $(document).ready(function() {
        item<?= str_replace(" ","_", $i['sub_category_so']) ?>.classList.add('active');
    });
    }
</script>
<?php endforeach; ?>
<?php foreach ($item as $i ): ?>
  <script type="text/javascript">
      $('#simpan<?= $i->id ?>').on('click',function(){
          var input<?= $i->id ?> = $('#input<?= $i->id ?>').serialize();
          var qtya<?= $i->id ?> = document.getElementById("qty<?= $i->id ?>");
          var qa = parseInt(localStorage.getItem('<?=$i->no?>'));
          var tqi<?= $i->id ?> = document.querySelector("#tqi<?= $i->id ?>");
          var stock<?= $i->id ?> = document.querySelector("#stock<?= $i->id ?>");
          var ns<?= $i->id ?> = document.querySelector("#ns<?= $i->id ?>");

            if (ns<?= $i->id?>.value == 1) {
                if (qtya<?= $i->id ?>.value >= stock<?= $i->id ?>.value - tqi<?= $i->id ?>.value + 1) {
                  var isi = "Food Stocks Are Not Fulfilled";
                  Swal.fire({
                  title: 'Notification!',
                  customClass: {
                    container :'my-popup-class'
                  },
                  text: isi,
                  icon: 'warning',
                  confirmButtonColor: "#223c77",
                  confirmButtonText: 'OK'
                  })
                }else{
                  $.ajax({
                  url : '<?=base_url()?>index.php/Ordermakanan/add_cart',
                  type : 'POST',
                  data: input<?= $i->id ?>,
                  dataType : 'JSON',
                  success : function(data){
                    var qty<?= $i->id ?> = localStorage.getItem('<?=$i->no?>')+qtya<?= $i->id ?>.value;
                    console.log(qty<?= $i->id ?>);
                    localStorage.setItem('<?= $i->no ?>',qty<?= $i->id ?> + qa);

                   
                  }
                })
                }
            }else{
              $.ajax({
                  url : '<?=base_url()?>index.php/Ordermakanan/add_cart',
                  type : 'POST',
                  data: input<?= $i->id ?>,
                  dataType : 'JSON',
                  success : function(data){
                    var qty<?= $i->id ?> = localStorage.getItem('<?=$i->no?>')+qtya<?= $i->id ?>.value;
                    console.log(qty<?= $i->id ?>);
                    localStorage.setItem('<?= $i->no ?>',qty<?= $i->id ?> + qa);

                    
                  }
                })
            }
          
          
      })
  function simpanalert(need_stock) {
      if (need_stock == 0) {
        Swal.fire({
            title: 'Success!',
            text: 'Menu Added to Cart',
            icon: 'success',
            confirmButtonColor: "#223c77",
            confirmButtonText: 'OK'
            })
      }

    }
  </script>
<?php endforeach ?>
<script type="text/javascript">
  var loading = document.getElementById('loading');
  $(document).ready(function(){
    load = document.querySelector('#load');
    load.classList.add('load');
  });
  setTimeout(berhenti,1000);
  function berhenti() {
    loading.style.display = "none";
   $("#loading").fadeOut();
   $("#load").fadeOut();
  }
</script>
<?php foreach ($item as $i ): ?>
<script type="text/javascript">
  

if (localStorage.getItem('<?=$i->no?>')) {
  var simpan<?= $i->id ?> = document.getElementById('simpan<?= $i->id ?>');
  var qtya<?= $i->id ?> = document.getElementById("qty<?= $i->id ?>");
  var tqi<?= $i->id ?> = document.querySelector("#tqi<?= $i->id ?>");
  var stock<?= $i->id ?> = document.querySelector("#stock<?= $i->id ?>");
  var ns<?= $i->id ?> = document.querySelector("#ns<?= $i->id ?>");
  if (simpan<?= $i->id ?>) {
  simpan<?= $i->id ?>.addEventListener("click", ()=>{
    if (qtya<?= $i->id ?>.value >= stock<?= $i->id ?>.value - tqi<?= $i->id ?>.value +1) {
      }else{
        location.reload();
      }
    
    var qa = parseInt(localStorage.getItem('<?=$i->no?>'));
    var qtypop<?= $i->id ?> = document.getElementById('qty<?= $i->id ?>');
    localStorage.setItem('<?= $i->no ?>', qa+parseInt(qtypop<?= $i->id ?>.value));
    console.log(window.location.toString());
    setTimeout(function() {
            if (window.location.toString() == "<?= base_url() ?>index.php/ordermakanan/menu/Makanan/Salad#Salad") {
      var h = '<?= base_url() ?>index.php/ordermakanan/menumakanan/Makanan/Salad#Salad';
          // alert(h);
          $('#konten').load(h);
    }
    if (window.location.toString() == "<?= base_url() ?>index.php/ordermakanan/menu/Makanan/Rice#Rice") {
          var h = '<?= base_url() ?>index.php/ordermakanan/menumakanan/Makanan/Rice#Rice';
              // alert(h);
              $('#konten').load(h);
        }
    if (window.location.toString() == "<?= base_url() ?>index.php/ordermakanan/menu/Makanan/Package#Package") {
      var h = '<?= base_url() ?>index.php/ordermakanan/menumakanan/Makanan/Package#Package';
          // alert(h);
          $('#konten').load(h);
    }
    if (window.location.toString() == "<?= base_url() ?>index.php/ordermakanan/menu/Makanan/Western#Western") {
      var h = '<?= base_url() ?>index.php/ordermakanan/menumakanan/Makanan/Western#Western';
          // alert(h);
          $('#konten').load(h);
    }
        }, 500);
    
    
  });
}
}else{
  var simpan<?= $i->id ?> = document.getElementById('simpan<?= $i->id ?>');
  var qtya<?= $i->id ?> = document.getElementById("qty<?= $i->id ?>");
  var tqi<?= $i->id ?> = document.querySelector("#tqi<?= $i->id ?>");
  var stock<?= $i->id ?> = document.querySelector("#stock<?= $i->id ?>");
  var ns<?= $i->id ?> = document.querySelector("#ns<?= $i->id ?>");

  if (simpan<?= $i->id ?>) {
    simpan<?= $i->id ?>.addEventListener("click", ()=>{
    if (qtya<?= $i->id ?>.value >= stock<?= $i->id ?>.value - tqi<?= $i->id ?>.value +1) {
      }else{
        location.reload();
      }
    
    var qa = parseInt(localStorage.getItem('<?=$i->no?>'));
    var qp<?= $i->id ?> = document.getElementById('qty<?= $i->id ?>');
    localStorage.setItem('<?= $i->no ?>', qp<?= $i->id ?>.value);
    if (localStorage.getItem('sim')) {
        var sim = parseInt(localStorage.getItem('sim'));
        localStorage.setItem('sim', parseInt(qp<?= $i->id ?>.value) + sim);
    }else{
        localStorage.setItem('sim', qp<?= $i->id ?>.value);  
    }
    
  });
  }
  
}
</script>
<?php endforeach; ?>


<?php foreach ($item as $i ): ?>
<script type="text/javascript">
  var ns<?= $i->id ?> = document.querySelector("#ns<?= $i->id ?>");
  var stock<?= $i->id ?> = document.querySelector("#stock<?= $i->id ?>");
  var tqi<?= $i->id ?> = document.querySelector("#tqi<?= $i->id ?>");
  var plus<?= $i->id ?> = document.querySelector(".plus<?= $i->id ?>");
  var nambah<?= $i->id ?> = document.querySelector(".nambah<?= $i->id ?>");
  var minus<?= $i->id ?> = document.querySelector(".minus<?= $i->id ?>");
  var num<?= $i->id ?> = document.querySelector(".num<?= $i->id ?>");
  var harga<?= $i->id ?> = document.querySelector("#harga<?= $i->id ?>");
  var total<?= $i->id ?> = document.querySelector("#total<?= $i->id ?>");
  var qtycart<?= $i->id ?> = document.querySelector("#qtycart<?= $i->id ?>");
  var tq = document.querySelector("#total_qty");
  var tqh = document.querySelector("#total_qty_header");

  // if (localStorage.getItem('<?= $i->no ?>') != null) {
  //   // num<?= $i->id ?>.value = localStorage.getItem('<?= $i->no ?>');
  //   // total<?= $i->id ?>.innerHTML = localStorage.getItem('H<?= $i->no ?>');
  //   // var a<?= $i->id ?> =localStorage.getItem('<?= $i->no ?>');
  // }else{
    
  // }

  // num<?= $i->id ?>.value = 0;
    var a<?= $i->id ?> = localStorage.getItem('qty<?=$i->no?>');
    
    if (localStorage.getItem('<?=$i->no?>')) {
      var qa = parseInt(localStorage.getItem('<?=$i->no?>'));
      var cek =parseInt(localStorage.getItem('angka<?=$i->no?>'))+parseInt(a<?= $i->id ?>); console.log(cek);
      if (nambah<?= $i->id ?>) {
        nambah<?= $i->id ?>.addEventListener("click", ()=>{
         a<?= $i->id ?>++;
         if (localStorage.getItem('qty<?=$i->no?>')) {
         num<?= $i->id ?>.value = localStorage.getItem('qty<?=$i->no?>');
         qtycart<?= $i->id ?>.innerHTML = "Cart Qty "+a<?= $i->id ?>+1;
         // tq.innerHTML = a<?= $i->id ?>+1;
         // tqh.innerHTML = a<?= $i->id ?>+1;
         }else{
          
              num<?= $i->id ?>.value = 1;
          qtycart<?= $i->id ?>.innerHTML = "Cart Qty "+a<?= $i->id ?>;
          // tq.innerHTML = a<?= $i->id ?>;
          // tqh.innerHTML = a<?= $i->id ?>;
         
          
         }
        
        var hasil<?= $i->id ?> = harga<?= $i->id ?>.value * 1;
        total<?= $i->id ?>.innerHTML = hasil<?= $i->id ?> ;
        // localStorage.setItem('<?= $i->no ?>',a<?= $i->id?> + qa);
        localStorage.setItem('qty<?= $i->no ?>',1);
        localStorage.setItem('angka<?= $i->no ?>',a<?= $i->id?>);
         // localStorage.setItem('H<?= $i->no ?>',hasil<?= $i->id ?>);
         // localStorage.setItem('<?= $i->no ?>',a<?= $i->id ?>);
         // // console.log(hasil); 
        });
      }
    }else{
      if (nambah<?= $i->id ?>) {
        nambah<?= $i->id ?>.addEventListener("click", ()=>{
         a<?= $i->id ?>++;
         if (localStorage.getItem('<?=$i->no?>') && localStorage.getItem('qty<?=$i->no?>') && localStorage.getItem('angka<?=$i->no?>')) {
         num<?= $i->id ?>.value = localStorage.getItem('qty<?=$i->no?>');
         qtycart<?= $i->id ?>.innerHTML = "Cart Qty "+localStorage.getItem('qty<?=$i->no?>');
         // tq.innerHTML = localStorage.getItem('qty<?=$i->no?>');
         // tqh.innerHTML = localStorage.getItem('qty<?=$i->no?>');
         }else{
          num<?= $i->id ?>.value = 1;
          qtycart<?= $i->id ?>.innerHTML = "Cart Qty "+1;
          // tq.innerHTML = 1;
          // tqh.innerHTML = 1;
         }
         var cek =a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1; console.log(cek);
        var hasil<?= $i->id ?> = harga<?= $i->id ?>.value * 1;
        total<?= $i->id ?>.innerHTML = hasil<?= $i->id ?>;
        localStorage.setItem('qty<?= $i->no ?>',1);
        localStorage.setItem('angka<?= $i->no ?>',a<?= $i->id?>);
         // localStorage.setItem('<?= $i->no ?>',a<?= $i->id ?>);
         // // console.log(hasil); 
        });
      }
      
    }
    if (localStorage.getItem('<?=$i->no?>')) {
      var qa = parseInt(localStorage.getItem('<?=$i->no?>'));
      var a<?= $i->id ?> = localStorage.getItem('qty<?=$i->no?>');
      var angka = parseInt(localStorage.getItem('angka<?=$i->no?>'));
      if (plus<?= $i->id ?>) {
      plus<?= $i->id ?>.addEventListener("click", ()=>{

        var inputValueA = num<?= $i->id ?>.value;
        var inputValueB = stock<?= $i->id?>.value;
        var inputValueC = tqi<?= $i->id?>.value;

        if (ns<?= $i->id ?>.value == 1) {
            if (inputValueA <= inputValueB -1 - inputValueC) {
               a<?= $i->id ?>++;
               
              var cek =a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1; console.log(cek); //cek
              num<?= $i->id ?>.value = cek;
              var hasil<?= $i->id ?> = harga<?= $i->id ?>.value * cek;
              total<?= $i->id ?>.innerHTML = hasil<?= $i->id ?>;
              qtycart<?= $i->id ?>.innerHTML = "Cart Qty "+a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;
              // tq.innerHTML = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;
              // tqh.innerHTML = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;
              // localStorage.setItem('<?= $i->no ?>',a<?= $i->id?> + qa);
               // localStorage.setItem('H<?= $i->no ?>',hasil<?= $i->id ?>);
               // localStorage.setItem('<?= $i->no ?>',a<?= $i->id ?>);
               // // console.log(hasil); 
               }
               if (inputValueA >= inputValueB - inputValueC ) {
                var isi = "Food Stocks Are Not Fulfilled";
                        Swal.fire({
                        title: 'Notification!',
                        customClass: {
                          container :'my-popup-class'
                        },
                        text: isi,
                        icon: 'warning',
                        confirmButtonColor: "#223c77",
                        confirmButtonText: 'OK'
                        })
               }
        }else{
          a<?= $i->id ?>++;
               
              var cek =a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1; console.log(cek); //cek
              num<?= $i->id ?>.value = cek;
              var hasil<?= $i->id ?> = harga<?= $i->id ?>.value * cek;
              total<?= $i->id ?>.innerHTML = hasil<?= $i->id ?>;
              qtycart<?= $i->id ?>.innerHTML ="Cart Qty "+a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;
              // tq.innerHTML = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;
              // tqh.innerHTML = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;
              // localStorage.setItem('<?= $i->no ?>',a<?= $i->id?> + qa);
               // localStorage.setItem('H<?= $i->no ?>',hasil<?= $i->id ?>);
               // localStorage.setItem('<?= $i->no ?>',a<?= $i->id ?>);
               // // console.log(hasil); 
        }
        
  });
    }
    }else{
      var angka = localStorage.getItem('angka<?=$i->no?>');
      var a<?= $i->id ?> = localStorage.getItem('qty<?=$i->no?>');
      if (plus<?= $i->id ?>) {
        plus<?= $i->id ?>.addEventListener("click", ()=>{
          var inputValueA = num<?= $i->id ?>.value;
          var inputValueB = stock<?= $i->id?>.value;
          var inputValueC = tqi<?= $i->id?>.value;

        if (ns<?= $i->id ?>.value == 1) {
          if (inputValueA <= inputValueB -1 - inputValueC) {
           a<?= $i->id ?>++;
           num<?= $i->id ?>.value = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;
           var cek =a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1; console.log(cek); //cek
          var hasil<?= $i->id ?> = harga<?= $i->id ?>.value * cek;
          total<?= $i->id ?>.innerHTML = hasil<?= $i->id ?>;

          qtycart<?= $i->id ?>.innerHTML = "Cart Qty "+a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;
          // tq.innerHTML = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;
          // tqh.innerHTML = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;

           // localStorage.setItem('H<?= $i->no ?>',hasil<?= $i->id ?>);
           // localStorage.setItem('<?= $i->no ?>',a<?= $i->id ?>);
           // // console.log(hasil); 
         }
         if (inputValueA >= inputValueB - inputValueC ) {
            var isi = "Food Stocks Are Not Fulfilled";
                    Swal.fire({
                    title: 'Notification!',
                    customClass: {
                      container :'my-popup-class'
                    },
                    text: isi,
                    icon: 'warning',
                    confirmButtonColor: "#223c77",
                    confirmButtonText: 'OK'
                    })
           }
        }else{
          a<?= $i->id ?>++;
           num<?= $i->id ?>.value = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;
           var cek =a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1; console.log(cek); //cek
          var hasil<?= $i->id ?> = harga<?= $i->id ?>.value * cek;
          total<?= $i->id ?>.innerHTML = hasil<?= $i->id ?>;

          qtycart<?= $i->id ?>.innerHTML ="Cart Qty "+a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;
          // tq.innerHTML = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;
          // tqh.innerHTML = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;;

           // localStorage.setItem('H<?= $i->no ?>',hasil<?= $i->id ?>);
           // localStorage.setItem('<?= $i->no ?>',a<?= $i->id ?>);
           // // console.log(hasil); 
        }
        
  });
      }

  
}
if (localStorage.getItem('<?=$i->no?>')) {
      var qa = parseInt(localStorage.getItem('<?=$i->no?>'));
      if (minus<?= $i->id ?>) {
  minus<?= $i->id ?>.addEventListener("click", ()=>{
   
   var inputValueA = num<?= $i->id ?>.value;
        // console.log(inputValue);
        if (inputValueA >= 1) {
          a<?= $i->id ?>--;
   num<?= $i->id ?>.value = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;
   var cek =a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1; console.log(cek); //cek
   var hasil<?= $i->id ?> = harga<?= $i->id ?>.value * cek;
   total<?= $i->id ?>.innerHTML = hasil<?= $i->id ?>;
   qtycart<?= $i->id ?>.innerHTML ="Cart Qty "+a<?= $i->id ?>;
   // tq.innerHTML = a<?= $i->id ?>;
   // tqh.innerHTML = a<?= $i->id ?>;
   // localStorage.setItem('<?= $i->no ?>',qa+a<?= $i->id?>);
   // localStorage.setItem('H<?= $i->no ?>',hasil<?= $i->id ?>);
   // localStorage.setItem('<?= $i->no ?>',a<?= $i->id ?>);
   // // console.log(hasil);
   }  
  });
 }
}else{
  if (minus<?= $i->id ?>) {
    minus<?= $i->id ?>.addEventListener("click", ()=>{
   
   var inputValueA = num<?= $i->id ?>.value;
        // console.log(inputValue);
        if (inputValueA >= 1) {
          a<?= $i->id ?>--;
   num<?= $i->id ?>.value = a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1;
   var cek =a<?= $i->id ?>-parseInt(localStorage.getItem('angka<?=$i->no?>'))+1; console.log(cek); //cek
   var hasil<?= $i->id ?> = harga<?= $i->id ?>.value * cek;
   total<?= $i->id ?>.innerHTML = hasil<?= $i->id ?>;
   qtycart<?= $i->id ?>.innerHTML = "Cart Qty "+cek;
   // tq.innerHTML = cek;
   // tqh.innerHTML = cek;
   // localStorage.setItem('H<?= $i->no ?>',hasil<?= $i->id ?>);
   // localStorage.setItem('<?= $i->no ?>',a<?= $i->id ?>);
   // // console.log(hasil);
   }  
  });
  }
  
}

</script>
  
<?php endforeach ?>

<?php foreach ($item as $i ): ?>
<script type="text/javascript">
  var jumlah<?=$i->id?> = document.querySelector('#jumlah<?=$i->id?>');
  var qtycart<?=$i->id?> = document.querySelector('#qtycart<?=$i->id?>');
  if (localStorage.getItem('<?=$i->no?>')) {
         // jumlah<?=$i->id?>.value = localStorage.getItem('<?=$i->no?>');
         jumlah<?=$i->id?>.value = 0;
         qtycart<?=$i->id?>.innerHTML = "Cart Qty "+localStorage.getItem('<?=$i->no?>');
         }else{
          // jumlah<?=$i->id?>.value = 0;
        }

  
</script>
<?php foreach ($item as $i): ?>
  <script type="text/javascript">
    var qc<?= $i->id ?> = document.querySelector(".qtycart<?= $i->id ?>");
    var qr<?= $i->id ?> = document.getElementById("qty<?= $i->id ?>");
    function tutuptab<?= $i->id ?>(){
    if (qr<?= $i->id ?>) {
      qr<?= $i->id ?>.value = 0;
    }
      var qa = parseInt(localStorage.getItem('<?=$i->no?>'));
    if (localStorage.getItem('<?=$i->no?>')) {
    qc<?= $i->id ?>.innerHTML = localStorage.getItem('<?=$i->no?>');
    // tq.innerHTML = localStorage.getItem('<?=$i->no?>');
    // tqh.innerHTML = localStorage.getItem('<?=$i->no?>')
    // localStorage.setItem('<?= $i->no ?>',qa - 1);
  }else{
     qc<?= $i->id ?>.innerHTML = 'Cart Qty '+0;
    // tq.innerHTML = 0;
    // tqh.innerHTML = 0;
  }
    
  }
  </script>
  
<?php endforeach ?>
<?php endforeach ?>
  <script type="text/javascript">
  
  $(document).ready(function(){
    setInterval(function(){
      $.ajax({
      type:'POST',
      url: '<?= base_url().'index.php/ordermakanan/jmlcart' ?>',
      dataType:'json',
      success:function(data){
          $("#total_qty").html(data.total);
          $("#total_qty_header").html(data.total);
      }
    });
    },1000);
    
  });
</script>


  <?php $this->load->view('template/footer') ?>
  