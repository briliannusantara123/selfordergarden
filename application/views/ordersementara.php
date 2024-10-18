<?php $this->load->view('template/head') ?>
 <style type="text/css">
  #btn_kiri_order {
              margin-bottom: 10px;
              padding-left: 40px;
              padding-right: 40px;
              padding-top: 20px;
              padding-bottom: 20px;
            }
            #btn_kiri_memanggil {
              margin-bottom: 20px;
              padding-left: 20px;
              padding-right: 20px;
              padding-top: 23px;
              padding-bottom: 23px;
            }
            #btn_kanan_awal {
              margin-bottom: 20px;
              padding-left: 20px;
              padding-right: 20px;
              padding-top: 23px;
              padding-bottom: 23px;
            }
            #btn_kanan_bill {
              margin-bottom: 10px;
              padding-left: 48px;
              padding-right: 48px;
              padding-top: 20px;
              padding-bottom: 20px;
            }
  @media (min-width: 412px){
            #btn_kiri_order {
              margin-bottom: 10px;
              padding-left: 40px;
              padding-right: 40px;
              padding-top: 20px;
              padding-bottom: 20px;
            }
            #btn_kiri_memanggil {
              margin-bottom: 20px;
              padding-left: 20px;
              padding-right: 20px;
              padding-top: 23px;
              padding-bottom: 23px;
            }
            #btn_kanan_awal {
              margin-bottom: 20px;
              padding-left: 20px;
              padding-right: 20px;
              padding-top: 23px;
              padding-bottom: 23px;
            }
            #btn_kanan_bill {
              margin-bottom: 10px;
              padding-left: 48px;
              padding-right: 48px;
              padding-top: 20px;
              padding-bottom: 20px;
            }
            
        }
  @media (min-width: 768px) and (max-width: 1024px){
            #btn_kiri_order {
              margin-bottom: 10px;
              padding-left: 67px;
              padding-right: 67px;
              padding-top: 40px;
              padding-bottom: 40px;
            }
            #btn_kiri_memanggil {
              margin-bottom: 10px;
              padding-left: 50px;
              padding-right: 50px;
              padding-top: 45px;
              padding-bottom: 45px;
            }
            #btn_kanan_awal {
              margin-bottom: 10px;
              padding-left: 50px;
              padding-right: 50px;
              padding-top: 45px;
              padding-bottom: 45px;
            }
            #btn_kanan_bill {
              margin-bottom: 10px;
              padding-left: 86px;
              padding-right: 86px;
              padding-top: 40px;
              padding-bottom: 40px;
            }
            
        }
        @media (min-width: 1025px) and (max-width: 1280px){
          #btn_kiri_order {
              margin-bottom: 10px;
              padding-left: 67px;
              padding-right: 67px;
              padding-top: 40px;
              padding-bottom: 40px;
            }
            #btn_kiri_memanggil {
              margin-bottom: 10px;
              padding-left: 50px;
              padding-right: 50px;
              padding-top: 45px;
              padding-bottom: 45px;
            }
            #btn_kanan_awal {
              margin-bottom: 10px;
              padding-left: 50px;
              padding-right: 50px;
              padding-top: 45px;
              padding-bottom: 45px;
            }
            #btn_kanan_bill {
              margin-bottom: 10px;
              padding-left: 86px;
              padding-right: 86px;
              padding-top: 40px;
              padding-bottom: 40px;
            }
        }
 </style>

    <nav style="background-color: #223c77;color: white;">
  <div class="container">
    <p style="text-align: center;padding-top: 13px;color: white;">Melihat Orderan</p>
  </div>
  <div style="width: 100%; height: 0px; border: 1px #000 solid;">
</div>
</nav>
<div class="container">
  <table class="table" style="background-color: #223c77;color: white;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;">
  <tbody>
    <tr>
      <th scope="row">Customer Name</th>
      <td> </td>
      <td> </td>
      <td><?= $this->session->userdata('username') ?></td>
    </tr>
    <tr>
      <th scope="row">Table No</th>
      <td> </td>
      <td> </td>
      <td><?= $nomeja ?></td>
    </tr>
  </tbody>
</table>
</div>
<div class="container">
  <table class="table" style="border:2px solid #223c77;">
  <thead style="background-color: #223c77;color: white;text-align: center;">
    <tr>
      <th scope="col">Menu/Paket Order</th>
      <th scope="col">Qty</th>
      <th scope="col">Pesan</th>
    </tr>
  </thead>
  <tbody style="color:#223c77;">
    <?php foreach ($item as $i): ?>
    <tr>
      <th scope="row"><p><?= $i->description ?></p></th>
      <td><p><?= $i->qty ?></p></td>
      <td><p><?= $i->extra_notes ?></p></td>
    </tr>
   <?php endforeach ?>
  </tbody>
</table>
</div>
</div>
<div class="container text-center">
  <div class="row">
    <div class="col">
      <a href="#" class="btn btn-outline-primary" id="btn_kiri_order" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Order?</a>
      <a href="<?php echo base_url() ?>index.php/Kasir_waitress/memanggil/<?= $nomeja ?>" class="btn btn-outline-primary" id="btn_kiri_memanggil">Memanggil Waitress</a>
    </div>
    
    <div class="col">
      <a href="<?php echo base_url() ?>index.php/Kasir_waitress/meminta/<?= $nomeja ?>" class="btn btn-outline-primary"  id="btn_kanan_bill">Meminta Bill</a>
      <a href="<?= base_url() ?>index.php/selforder/home/<?= $nomeja ?>" class="btn btn-outline-primary"  id="btn_kanan_awal">Kembali ke Menu Awal</a>
      
    </div>
  </div>
</div>
<br>  
<br>  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #223c77;">
        <h5 class="modal-title" style="color: white;" id="exampleModalLabel">Tambah Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container text-center">
  <div class="row">
    <div class="col">
      <a href="<?= base_url() ?>ordermakanan/menu/Makanan/<?= $sub_category ?>/<?= $nomeja ?>"  style="padding-right: 48px;padding-left: 48px;"class="btn btn-outline-primary" id="btn_kiri_order">Tambah Order Makanan</a>
      
    </div>
    
    <div class="col">
      <a href="<?= base_url() ?>orderminuman/menu/Minuman/<?= $sub_category_minuman ?>/<?= $nomeja ?>" class="btn btn-outline-primary"  id="btn_kanan_bill">Tambah Order Minuman</a>
      
      
    </div>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <h4></h4>
      </div>
    </div>
  </div>
</div>
   <?php $this->load->view('template/footer') ?>