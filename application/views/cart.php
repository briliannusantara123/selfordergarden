<?php $this->load->view('template/headmenu') ?>
<style type="text/css">
    .card-total {
        background-color: white;
        border-radius: 20px;
        padding: 20px;
        max-width: 700px;
        margin: auto;
        margin-top: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 170px;
    }
    .cart-container {
        background-color: white;
        border-radius: 20px;
        padding: 20px;
        max-width: 700px;
        margin: auto;
        margin-top: 60px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .cartadd-container {
        background-color: white;
        border-radius: 20px;
        padding: 20px;
        max-width: 700px;
        margin: auto;
        margin-top: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    label {
        color: grey;
        font-size: 18px;
    }
    @keyframes slideDown {
        0% {
            transform: translateY(100%) scale(0.5);
            opacity: 0;
        }
        100% {
            transform: translateY(0) scale(1);
            opacity: 1;
        }
    }

    @keyframes slideUp {
        0% {
            transform: translateY(0) scale(1);
            opacity: 1;
        }
        100% {
            transform: translateY(100%) scale(0.5);
            opacity: 0;
        }
    }

    .addorder {
        display: none;
        opacity: 0;
        transform: translateY(100%) scale(0.5);
        transition: transform 0.4s ease, opacity 0.4s ease;
    }

    .addorder.show {
        display: inline-block;
        animation: slideDown 0.4s forwards;
    }

    .addorder.hide {
        animation: slideUp 0.4s forwards;
        pointer-events: none;
    }

</style>

    <div class="head">
        <header>
            <div style="display: flex; align-items: center;">
                <a href="<?= base_url() ?><?= $log ?>" style="text-decoration: none; color: black;">
                    <i class="bi bi-arrow-left" style="font-size: 30px;margin-left: 10px; text-shadow: 1px 1px 2px black;"></i>
                </a>
                <h2 style="margin: 0; margin-left: 5px;"><strong>Cart</strong></h2>
            </div>
            <div class="profile">
                <a href="<?= base_url() ?>index.php/Billsementara/home/<?= $nomeja ?>" style="color: black"><i class="bi bi-file-earmark-text" style="font-size: 25px;"></i></a>
                <i class="fas fa-user" style="font-size: 20px;"><label style="font-size: 12px;">&nbsp;<?= $this->session->userdata('username') ?> ( <?= $this->session->userdata('nomeja') ?> )</label></i>
            </div>
        </header>
    </div>
    <form action="<?= base_url() ?>index.php/cart/validasi_order/<?= $nomeja ?>/<?= $cek ?>/<?= $url ?>" method="POST">
        <?php if ($item): ?>
            <div class="cart-container">
                <div class="row">
                    <div class="col-7">
                        <h5><strong><?= $jumlah ?> items in cart</strong></h5>
                    </div>
                    <div class="col-5" style="text-align: right;">   
                        <a href="<?= base_url() ?>index.php/cart/cancel_order/<?= $nomeja ?>/<?= $cek ?>/<?= $url ?>" class="btn btn-danger">Cancel Order</a>
                    </div>
                </div>  
                <?php foreach ($item as $i): ?>
                    <div class="item row align-items-center mb-3">
                        <div class="col-8">
                            <div class="item-details">
                                <h6 style="font-size: 20px;"><strong><?= $i->description ?></strong></h6>
                                <div class="price">Rp <?= number_format($i->unit_price) ?></div>
                                <h6 style="color: grey"><?= $i->od ?></h6>
                                <!-- <?php if ($i->ad): ?>
                                    <h6 style="color: grey"><?= $i->ad ?>
                                    <?php if ($i->harga_weekday == 0): ?>
                                        ( Free )
                                        <input type="hidden" id="add_price" name="add_price[]" value="0">
                                      <?php elseif ($i->harga_weekend == 0): ?>
                                        ( Free )
                                        <input type="hidden" id="add_price" name="add_price[]" value="0">
                                      <?php elseif ($i->harga_holiday == 0): ?>
                                        ( Free )
                                        <input type="hidden" id="add_price" name="add_price[]" value="0">
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
                                            ( Rp&nbsp;<?= number_format($i->harga_weekend) ?> )
                                            <input type="hidden" id="add_price" name="add_price[]" value="<?= $i->harga_weekend ?>">
                                            <?php else: ?>
                                            ( Rp&nbsp;<?= number_format($i->harga_weekday) ?> )
                                            <input type="hidden" id="add_price" name="add_price[]" value="<?= $i->harga_weekday ?>">
                                          <?php   endif ?>
                                        <?php  else: ?>
                                          <?php  if ($hr == "Saturday" || $hr == "Sunday") :?>
                                            ( Rp&nbsp;<?= number_format($i->harga_weekend) ?> )
                                            <input type="hidden" id="add_price" name="add_price[]" value="<?= $i->harga_weekend ?>">
                                        <?php elseif ($holiday->tipe == 0) :?>
                                            ( Rp&nbsp;<?= number_format($i->harga_weekend) ?> )
                                            <input type="hidden" id="add_price" name="add_price[]" value="<?= $i->harga_weekend ?>">
                                        <?php elseif ($holiday->tipe == 1 && $time >= $waktu) :?>
                                            ( Rp&nbsp;<?= number_format($i->harga_weekend) ?> )
                                            <input type="hidden" id="add_price" name="add_price[]" value="<?= $i->harga_weekend ?>">
                                        <?php elseif ($holiday->tipe == 1 && $time <= $waktu) :?>
                                            ( Rp&nbsp;<?= number_format($i->harga_weekday) ?> )
                                            <input type="hidden" id="add_price" name="add_price[]" value="<?= $i->harga_weekday ?>">
                                        <?php else: ?>
                                          ( Rp&nbsp;<?= number_format($i->harga_weekday) ?> )
                                          <input type="hidden" id="add_price" name="add_price[]" value="<?= $i->harga_weekday ?>">
                                        <?php endif ?>
                                        <?php endif ?>
                                      <?php endif ?>
                                </h6>
                                <?php endif ?> -->
                                <h6 style="color: grey"><?= $i->extra_notes ?></h6>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <?php if ($i->image_path): ?>
                                <img src="<?= $i->image_path ?>" class="img-fluid" style="width: 100px; height: auto; object-fit: cover;">
                            <?php else: ?>
                                <img src="<?= base_url();?>assets/noimage.jpg" class="img-fluid" style="width: 100px; height: auto; object-fit: cover;">
                            <?php endif ?>
                            <div class="quantity-control d-flex align-items-center mt-2">
                                <!-- <?php if ($i->qty > 1): ?>
                                    <button type="button" class="btn btn-success kurang-btn" style="color: white;height: 35px;">-</button>
                                <?php else: ?>
                                    <a href="<?= base_url() ?>index.php/cart/delete/<?= $i->id ?>/<?= $nomeja ?>/nonpaket/<?= $cek ?>/<?= $sub ?>" class="remove-item" style="margin-top: 5px;" >
                                        <i class="bi bi-trash" style="font-size: 35px"></i>
                                    </a>
                                <?php endif ?> -->
                                <button type="button" class="btn btn-success kurang-btn" style="color: white;height: 35px; display: none;">-</button>
                                <a href="<?= base_url() ?>index.php/cart/delete/<?= $i->id ?>/<?= $nomeja ?>/nonpaket/<?= $cek ?>/<?= $sub ?>" class="remove-item" style="margin-top: 5px; display: none;">
                                    <i class="bi bi-trash" style="font-size: 35px"></i>
                                </a>
                                
                                <span class="hasil" style="font-size: 20px; margin: 0 10px;"><?= $i->qty ?></span>
                                <input type="hidden" name="qty[]" class="qty" value="<?= $i->qty ?>">
                                <input type="hidden" name="nama[]" value="<?= $i->description ?>">
                                <input type="hidden" name="cek[]" value="<?= $i->as_take_away ?>">
                                <input type="hidden" name="qta[]" value="<?= $i->qty_take_away ?>">
                                <input type="hidden" name="harga[]" value="<?= $i->unit_price ?>">
                                <input type="hidden" name="pesan[]" value="<?= $i->extra_notes ?>">
                                <input type="hidden" name="options[]" value="<?= $i->od ?>">
                                <!-- <input type="hidden" name="addons[]" value="<?= $i->ad ?>"> -->
                                <input type="hidden" name="id[]" value="<?= $i->id ?>" id="id">
                                <input type="hidden" name="no[]" id="item_code" value="<?= $i->item_code ?>" class="form-control item_code">
                                <input type="hidden" name="need_stock[]" id="need_stock" value="<?= $i->need_stock ?>" class="form-control need_stock">
                                
                                <button type="button" class="btn btn-success tambah-btn" style="color: white;height: 35px;">+</button>
                            </div>

                        </div>
                    </div>


                <?php endforeach ?>

            </div>
            <?php if ($itemadd): ?>
                <div class="cartadd-container">
                <div class="row">
                    <div class="col-6">
                        <h5><strong><?= $jumlahadd ?> item add on in cart</strong></h5>
                    </div>
                    <div class="col-6" style="text-align: right;">   
                        <a href="<?= base_url() ?>index.php/cart/cancel_order/<?= $nomeja ?>/<?= $cek ?>/<?= $sub ?>/add" class="btn btn-danger">Cancel AddOn</a>
                    </div>
                </div>  
                <?php foreach ($itemadd as $i): ?>
                    <div class="item row align-items-center mb-3">
                        <div class="col-8">
                            <div class="item-details">
                                <h6 style="font-size: 20px;"><strong><?= $i->description ?></strong></h6>
                                <div class="price">Rp <?= number_format($i->unit_price) ?></div>
                                <h6 style="color: grey"><?= $i->od ?></h6>
                                <h6 style="color: grey"><?= $i->extra_notes ?></h6>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <?php if ($i->image_path): ?>
                                <img src="<?= $i->image_path ?>" class="img-fluid" style="width: 100px; height: auto; object-fit: cover;">
                            <?php else: ?>
                                <img src="<?= base_url();?>assets/noimage.jpg" class="img-fluid" style="width: 100px; height: auto; object-fit: cover;">
                            <?php endif ?>
                            <div class="quantity-control d-flex align-items-center mt-2">
                                <button type="button" class="btn btn-success kurang-btn" style="color: white;height: 35px; display: none;">-</button>
                                <a href="<?= base_url() ?>index.php/cart/delete/<?= $i->id ?>/<?= $nomeja ?>/nonpaket/<?= $cek ?>/<?= $sub ?>" class="remove-item" style="margin-top: 5px; display: none;">
                                    <i class="bi bi-trash" style="font-size: 35px"></i>
                                </a>
                                
                                <span class="hasil" style="font-size: 20px; margin: 0 10px;"><?= $i->qty ?></span>
                                <input type="hidden" name="qty[]" class="qty" value="<?= $i->qty ?>">
                                <input type="hidden" name="nama[]" value="<?= $i->description ?>">
                                <input type="hidden" name="cek[]" value="<?= $i->as_take_away ?>">
                                <input type="hidden" name="qta[]" value="<?= $i->qty_take_away ?>">
                                <input type="hidden" name="harga[]" value="<?= $i->unit_price ?>">
                                <input type="hidden" name="pesan[]" value="<?= $i->extra_notes ?>">
                                <input type="hidden" name="options[]" value="<?= $i->od ?>">
                                <!-- <input type="hidden" name="addons[]" value="<?= $i->ad ?>"> -->
                                <input type="hidden" name="id[]" value="<?= $i->id ?>" id="id">
                                <input type="hidden" name="no[]" id="item_code" value="<?= $i->item_code ?>" class="form-control item_code">
                                <input type="hidden" name="need_stock[]" id="need_stock" value="<?= $i->need_stock ?>" class="form-control need_stock">
                                
                                <button type="button" class="btn btn-success tambah-btn" style="color: white;height: 35px;">+</button>
                            </div>

                        </div>
                    </div>

                    
                <?php endforeach ?>

            </div>
            <?php endif ?>
            
            <div class="card-total">
                <div class="total">
                    <div class="row">
                        <div class="col-6">
                            <label>Subtotal</label>
                        </div>
                        <div class="col-6">
                            <label class="float-end subtotal-label">Rp <?= number_format($total) ?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>SC 5%</label>
                        </div>
                        <div class="col-6">
                            <label class="float-end sc-label">Rp <?= number_format($hitungbayar->sc) ?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>PB1 10%</label>
                        </div>
                        <div class="col-6">
                            <label class="float-end ppn-label">Rp <?= number_format($hitungbayar->ppn) ?></label>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <strong>Total</strong>
                        </div>
                        <div class="col-6">
                            <strong class="float-end total-label">Rp <?= number_format($total+$hitungbayar->sc+$hitungbayar->ppn) ?></strong>
                        </div>
                    </div>

                </div>
            </div>
        <?php else: ?>
            <div style="text-align: center; margin-top: 200px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" color="green" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" style="display: block; margin-left: auto; margin-right: auto;">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <br>
                <h5 style="text-align: center; color: #198754;">Your Cart is Still Empty <br> Let’s Order Now!</h5>
            </div>

        <?php endif ?>
        <footer>
            <div class="container addorder" style="display: none;">
                <div class="row">
                    <div class="col-6">
    <a href="<?= base_url() ?>index.php/ordermakanan/menu/Makanan/<?= str_replace(" ","%20", $sca->sub_category) ?>#<?= str_replace(" ","_", $sca->sub_category) ?>" class="btn btn-success" style="display: flex; flex-direction: column; align-items: center; padding: 5px 10px;">
        <img src="<?= base_url();?>/assets/icon/menu/order_makanan.png" style="width: 80px; height: 90px; border-radius: 50%;" alt="Hachi Grill" class="image" />
        <span style="margin-top: 5px; margin-bottom: 5px; font-size: 16px; font-weight: bold;">Food</span>
    </a>
</div>

<div class="col-6">
    <a href="<?= base_url() ?>index.php/orderminuman/menu/Minuman/<?= str_replace(" ","%20", $scm->sub_category) ?>#<?= str_replace(" ","_", $scm->sub_category) ?>" class="btn btn-success" style="display: flex; flex-direction: column; align-items: center; padding: 5px 10px;">
        <img src="<?= base_url();?>/assets/icon/menu/order_minuman.png" style="width: 80px; height: 90px; border-radius: 50%;" alt="Hachi Grill" class="image" />
        <span style="margin-top: 5px; margin-bottom: 5px; font-size: 16px; font-weight: bold;">Beverage</span>
    </a>
</div>

                </div>  
            </div>
            <div class="containerfooter" style="padding: 10px;">
                <button type="button" class="btn btn-warning add-btn" style="padding: 15px;font-size: 17px;color: white;"><i class="bi bi-plus-circle"></i> <strong>Add to Order</strong></button>
                <?php if ($item): ?>
                    <button type="submit" class="btn btn-success add-btn" style="padding: 15px;font-size: 17px;"><strong>Order Now</strong></button>
                <?php endif ?>
            </div>
        </footer>
    </form>
</body>
<?php $this->load->view('template/footer') ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addButton = document.querySelector('.add-btn');
        const addOrderContainer = document.querySelector('.addorder');

        // Buat variabel untuk melacak status klik
        let isToggled = false;

        // Tambahkan event listener untuk klik tombol
        addButton.addEventListener('click', function () {
            if (isToggled) {
                // Jika sudah ditampilkan, tambahkan animasi slide up
                addOrderContainer.classList.remove('show');
                addOrderContainer.classList.add('hide');

                // Tunggu animasi selesai, lalu sembunyikan elemen
                setTimeout(() => {
                    addOrderContainer.style.display = 'none';
                }, 400); // 400ms sesuai dengan durasi animasi CSS
            } else {
                // Tampilkan elemen dan tambahkan animasi slide down
                addOrderContainer.style.display = 'inline-block';
                addOrderContainer.classList.remove('hide');
                addOrderContainer.classList.add('show');
            }
            
            // Toggle status
            isToggled = !isToggled;
        });
        document.querySelectorAll('.item').forEach(function (item) {
            const kurangBtn = item.querySelector('.kurang-btn');
            const trashIcon = item.querySelector('.remove-item');
            const qty = parseInt(item.querySelector('.qty').value);
            console.log(qty); // Debugging: Cek nilai qty di console

            // Cek apakah qty lebih dari 1
            if (qty > 1) {
                kurangBtn.style.display = 'inline-block';  // Tampilkan tombol "-"
                trashIcon.style.display = 'none';          // Sembunyikan ikon trash
            } else {
                kurangBtn.style.display = 'none';          // Sembunyikan tombol "-"
                trashIcon.style.display = 'inline-block';  // Tampilkan ikon trash
            }

            // Event listener untuk tombol kurang
            kurangBtn.addEventListener('click', function () {
                let hasil = item.querySelector('.hasil');
                let qtyValue = parseInt(hasil.innerText);

                if (qtyValue > 1) {
                    hasil.innerText = qtyValue - 1;
                    item.querySelector('.qty').value = qtyValue - 1;
                    updateCart(item, qtyValue - 1);
                    
                    // Jika qty menjadi 1, ganti tombol "-" dengan ikon trash
                    if (qtyValue - 1 == 1) {
                        kurangBtn.style.display = 'none';
                        trashIcon.style.display = 'inline-block';
                    }
                }
            });
        });

        // Event listener untuk tombol tambah
        document.querySelectorAll('.tambah-btn').forEach(function (tambah) {
            tambah.addEventListener('click', function () {
                let parent = this.closest('.item');
                let hasil = parent.querySelector('.hasil');
                let qty = parent.querySelector('.qty');
                let currentValue = parseInt(hasil.innerText);

                // Update hasil dan qty
                hasil.innerText = currentValue + 1;
                qty.value = currentValue + 1;

                // Pastikan tombol "-" muncul ketika qty lebih dari 1
                let kurangBtn = parent.querySelector('.kurang-btn');
                let trashIcon = parent.querySelector('.remove-item');
                if (currentValue + 1 > 1) {
                    kurangBtn.style.display = 'inline-block';  // Tampilkan tombol "-"
                    trashIcon.style.display = 'none';          // Sembunyikan ikon trash
                }

                // Kirim permintaan update qty ke server
                updateCart(parent, qty.value);
            });
        });

        // Fungsi untuk mengirim update qty ke server
        function updateCart(parent, qty) {
            let itemId = parent.querySelector('#id').value;

            // Kirim data ke server menggunakan fetch
            fetch('<?= base_url() ?>index.php/cart/update_qty', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    id: itemId,
                    qty: qty
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log('Cart updated successfully');
                    updateTotal();
                } else {
                    console.error('Failed to update cart:', data.message);
                }
            })
            .catch(error => console.error('Error:', error));
        }
        function updateTotal() {
            fetch('<?= base_url() ?>index.php/cart/get_total', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Update total, service charge, PPN di UI
                    document.querySelector('.subtotal-label').innerText = 'Rp ' + data.total_formatted;
                    document.querySelector('.sc-label').innerText = 'Rp ' + data.sc_formatted;
                    document.querySelector('.ppn-label').innerText = 'Rp ' + data.ppn_formatted;
                    document.querySelector('.total-label').innerText = 'Rp ' + data.grand_total_formatted;
                } else {
                    console.error('Failed to fetch total:', data.message);
                }
            })
            .catch(error => console.error('Error:', error));
        }

        // Untuk membersihkan input pada textarea
        const textarea = document.getElementById('customTextarea');
        if (textarea) {
            textarea.addEventListener('input', function() {
                let value = textarea.value;
                textarea.value = value.replace(/[^\w\s.,]/g, ''); // Filter karakter khusus
            });
        }
    });

</script>
</html>
