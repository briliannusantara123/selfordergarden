<?php $this->load->view('template/head') ?>
<?php   $previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
} ?>
<style type="text/css">
  .modal {
   margin-top: 100px;
   top: 10px;
   right: 100px;
   bottom: 0;
   left: 0;
   z-index: 10040000;
   overflow: auto;
   overflow-y: auto;
}
footer{
  text-align: center;
  background-color: white;
  margin-top: 10px;
  border-radius: 10%;
  /*position: absolute;*/
  bottom: 0;
  width: 100%;
  position: fixed;
  z-index: 200000;
}
</style>
<div id="loadingkonek"></div>
<nav style="background-color:#223c77;">
  <div class="container">
    <p style="text-align: center;padding-top: 13px;color: white;">Cart Order</p>
  </div>
  <div style="width: 100%; height: 0px; border: 1px #000 solid;">
</div>
</nav>
<br>
<form action="<?= base_url() ?>index.php/cart/validasi_order/<?= $nomeja ?>/<?= $cek ?>/<?= $sub ?>#<?= $sub ?>" method="POST">
<div class="container" >
<?php if ($item == NULL): ?>
  <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" color="darkblue" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" style="display: block;margin-left: auto;margin-right: auto;">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  <h5 style="margin-top: 20px;text-align: center;color: #223c77;">Your Cart is Still Empty <br> Let`s Order Now!</h5>
 <?php else: ?>
  
    
    <div class="row">
    <!-- <?php if ( $i->image_path != "" ): ?> -->
        <div class="col-1">
          <!-- <img src="<?= $i->image_path ?>" alt="Red dot" style="width: 80px;height: 80px;border-radius: 20px;" /> -->
        </div>
      <!-- <?php  else: ?> -->
        <!-- <div class="col-4"><img src="<?= base_url();?>/assets/picture.png" alt="Red dot" style="width: 120px;height: 120px;border-radius: 20px;" /></div> -->
      <!-- <?php endif ?> -->
    
    <!-- <div class="col-6" style="margin-top: 10px;color: #223c77;"><?= $i->description?><br>Rp <?= number_format($i->unit_price)?><br><?= $i->extra_notes?></div>
    <div class="col-1" style="margin-top: 10px;text-align: center;color: #223c77;">Qty <br> <p style="padding-left: 7px;"><?= $i->qty ?></p></div>
    <div class="col-3" style="margin-top: 10px;text-align: center;margin-left: 5px;color: #223c77;">Aksi <br> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>" class="btn btn-success" style="padding:7px 7px; "><i class="fas fa-pen" style="color: white"></i></a><a href="<?= base_url() ?>cart/delete/<?= $i->id ?>/<?= $i->description ?>/<?= $nomeja ?>" class="btn btn-danger" style="padding:8px 8px;margin-bottom: 2px; "><i class="fas fa-trash"></i></a></div>
    <?php if ($i->qty_take_away != 0): ?>
      <p style="color: #223c77;">Dibawa Pulang : <?= $i->qty_take_away?></p>
    <?php endif; ?>
     -->
    <div class="container ">
  <table class="table" >
  <thead>
    <tr>
      <th scope="col">Menu Order</th>
      <th scope="col">Harga</th>
      <th scope="col">Qty</th>
      <th scope="col">Pesan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($item as $i): ?>
    <tr>
      <th scope="row"><p><?= $i->description ?></p></th>
      <td><p>Rp <?= number_format($i->unit_price); ?></p></td>
      <td><p style="text-align: left;"><?= $i->qty ?></p></td>
      <!-- <?php if ( $i->notesdua): ?>
        <td><p style="text-align: left;"><?= $i->extra_notes ?>,<?= $i->notesdua ?></p></td>
      <?php else: ?>  
        <td><p style="text-align: left;"><?= $i->extra_notes ?></p></td>
      <?php endif ?> -->
      <td><p style="text-align: left;"><?= $i->extra_notes ?></p></td>
      <td><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $i->id ?>" class="btn" style="padding:7px 7px;background-color: #223c77 "><i class="fas fa-pen" style="color: white"></i></a><a href="<?= base_url() ?>index.php/cart/delete/<?= $i->id ?>/<?= $nomeja ?>/<?= $cek ?>/<?= $sub ?>/<?= $i->item_code ?>" class="btn btn-danger" style="padding:8px 8px;margin-bottom: 2px; " onclick="hapus<?= $i->id?>('<?= $i->item_code?>')"><i class="fas fa-trash"></i></a></td>
    </tr>
    <input type="hidden" name="nama[]" value="<?= $i->description ?>">
  <input type="hidden" name="qty[]" id="qty<?= $i->id?>" value="<?= $i->qty ?>">
  <input type="hidden" name="cek[]" value="<?= $i->as_take_away ?>">
  <input type="hidden" name="qta[]" value="<?= $i->qty_take_away ?>">
  <input type="hidden" name="harga[]" value="<?= $i->unit_price ?>">
  <!-- <input type="hidden" name="pesandua[]" value="<?= $i->notesdua ?>">
  <input type="hidden" name="pesantiga[]" value="<?= $i->notesdua ?>"> -->
  <input type="hidden" name="pesan[]" value="<?= $i->extra_notes ?>">
  <input type="hidden" name="no[]" id="harga" value="<?= $i->item_code ?>" class="form-control harga">
  <input type="hidden" name="need_stock[]" id="need_stock" value="<?= $i->need_stock ?>" class="form-control need_stock">
    <?php endforeach ?>
  </tbody>
</table>
  
  </div>
    
  </div>
<?php endif ?>
</div>
<br>
<footer>
  <div class="text-center" style="color: #223c77"><h5>Please Check Your Order <br> Order Has Been Submitted <br> Cannot Be Cancelled</h5></div>
<?php if ($item == NULL): ?>
<div class="container">
<a href="<?= base_url() ?><?= $log ?>" class="btn btn-outline-danger" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;display: block;margin-left: auto;margin-right: auto;">Back</a>
</div>
<?php else: ?>
<div class="container text-center">
<button type="submit" class="btn btn-outline-primary" style="padding-top: 20px;padding-bottom: 20px;padding-left: 50px;padding-right: 50px;" onclick="order()">
  Order
</button>
<a href="<?= base_url() ?><?= $log ?>" class="btn btn-outline-danger" style="padding-top: 20px;padding-bottom: 20px;padding-left: 40px;padding-right: 40px;">Back</a>
</div>  
<?php endif ?>
<br>  
</footer>
</form>
<br>
<br>
</div>
  </div>
</div>

<div style="margin-top: 100px;"></div>
<?php foreach ($item as $i): ?>
<div class="modal fade" id="exampleModal<?= $i->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #223c77;color: white;">
        <h5 class="modal-title" style="text-align: center;" id="exampleModalLabel">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="<?= base_url() ?>index.php/cart/ubah/<?= $i->id ?>/<?= $nomeja ?>/<?= $cek ?>/<?= $sub ?>" method="post">
      <div class="modal-body">
        
      <h4 style="text-align: center;color: #223c77;"><?= $i->description ?></h4>
      <img src="<?= $i->image_path ?>" alt="Red dot" style="width: 180px;height: 180px;border-radius: 20px; display: block;margin-left: auto;margin-right: auto;" />
      <div class="container text-center">
  <div class="row">
    <div class="col" >
      <button type="button" class="btn minus<?= $i->id ?>" style="padding-left: 30px;padding-right: 30px;background-color: #223c77"> - </button>
    </div>
    <div class="col">
      <input type="text" name="qty" class="form-control num<?= $i->id ?>" id="num<?= $i->id ?>" value="<?= $i->qty ?>" style="margin-bottom: 5px;text-align: center">
      <input type="hidden" name=" " class="form-control flag<?= $i->id ?>" id="flag<?= $i->id ?>" value="0"  style="margin-bottom: 5px;text-align: center">
    </div>
    <div class="col">
      <button type="button" class="btn plus<?= $i->id ?>" style="padding-left: 30px;padding-right: 30px;background-color: #223c77">+</button>
    </div>
  </div>
</div>
      <input type="hidden" name="extra_notes" class="form-control" value="<?= $i->extra_notes ?>" placeholder="Masukan Pesan...">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn" style="padding-left: 40px;padding-right: 40px;padding-top: 10px;padding-bottom: 10px;background-color: #223c77" onclick="klikedit<?= $i->id?>('<?= $i->item_code?>')">Ubah</button>
      </div>
    </div>
    </form>
  </div>
</div>
<?php endforeach ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<?php foreach ($item as $i ): ?>
<script type="text/javascript">
  const plus<?= $i->id ?> = document.querySelector(".plus<?= $i->id ?>"),
  minus<?= $i->id ?> = document.querySelector(".minus<?= $i->id ?>"),
  num<?= $i->id ?> = document.querySelector(".num<?= $i->id ?>");
  flag<?= $i->id ?> = document.querySelector(".flag<?= $i->id ?>");

  let a<?= $i->id ?> = <?= $i->qty ?>;
  let b<?= $i->id ?> = 0; 

  plus<?= $i->id ?>.addEventListener("click", ()=>{
   a<?= $i->id ?>++;
   b<?= $i->id ?>++;
   num<?= $i->id ?>.value = a<?= $i->id ?>;
   flag<?= $i->id ?>.value = b<?= $i->id ?>;
   // localStorage.setItem('<?= $i->item_code ?>',a<?= $i->id ?>);
   console.log(a<?= $i->id ?>); 
  });
  minus<?= $i->id ?>.addEventListener("click", ()=>{
   
   var inputValue = num<?= $i->id ?>.value;
        // console.log(inputValue);
        if (inputValue >= 1) {
          a<?= $i->id ?>--;
          b<?= $i->id ?>--;
   num<?= $i->id ?>.value = a<?= $i->id ?>;
   flag<?= $i->id ?>.value = b<?= $i->id ?>;
   // localStorage.setItem('<?= $i->item_code ?>',a<?= $i->id ?>);
   console.log(a<?= $i->id ?>);
   }  
  });
</script>
  
<?php endforeach ?>
<?php 
  $nomeja = $this->session->userdata('nomeja');
 ?>
 <?php foreach ($item as $i ): ?>
   <script type="text/javascript">
   function hapus<?= $i->id?>(no){
    
    var qty<?= $i->id ?> = document.getElementById("qty<?= $i->id ?>");
    var qa<?= $i->id ?> = parseInt(localStorage.getItem(no));
    // console.log(qty<?= $i->id ?>.value);
      localStorage.setItem(no,qa<?= $i->id ?>-qty<?= $i->id ?>.value);
      localStorage.removeItem('qty'+no);
      localStorage.removeItem('sim');
      localStorage.removeItem('angka'+no);
   }
   function klikedit<?= $i->id?>(no){
    
    var flag<?= $i->id ?> = document.getElementById("flag<?= $i->id ?>");
    var qa = parseInt(localStorage.getItem(no));
    // console.log(flag<?= $i->id ?>.value);
      localStorage.setItem(no,qa+parseInt(flag<?= $i->id ?>.value));
      
   }
 </script>

 <?php endforeach ?>
 <script type="text/javascript">
   function order() {
     localStorage.clear();
   }
 </script>
   
 
<!-- <script type="text/javascript">
  const currentLocation = location.href;
  if (currentLocation == "http://dev.3guru.com:5082/selforderMG/index.php/cart/home/<?= $nomeja ?>/Makanan/Chicken/<?= $no ?>/del") {
    localStorage.removeItem('<?= $no ?>');
  }else if(currentLocation == "http://dev.3guru.com:5082/selforderMG/index.php/cart/home/<?= $nomeja ?>/Minuman/Cold%20Drink/<?= $no ?>/del"){
    localStorage.removeItem('<?= $no ?>');
  }
</script> -->
<?php $this->load->view('template/footer') ?>