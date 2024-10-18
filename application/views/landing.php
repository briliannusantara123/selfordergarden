<?php $this->load->view('template/headmenu') ?>
<style type="text/css">
body, .main-container {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: white;
    height: 90vh; /* Pastikan kontainer memiliki tinggi penuh */
    margin: 0;
    flex-direction: column; /* Mengatur elemen secara vertikal */
}

.main {
    padding: 0;
    width: 100%; /* Tentukan lebar elemen jika perlu */
    display: flex;
    flex-direction: column;
    align-items: center;
}

#loadinglanding {
    width: 50px;
    height: 50px;
    border: solid 5px #ccc;
    border-top-color: #198754;
    border-radius: 100%;
    z-index: 7;
    animation: putar 1s linear infinite;
}

@keyframes putar {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}
</style>

<div class="main-container">
    <div class="main">
        <img src="<?= base_url();?>assets/logo.png" style="width: 290px; height: 100px;" alt="Dear Clio" />
        <div id="loadinglanding"></div> <!-- Loading elemen di bawah gambar -->
    </div>
</div>

<?php $this->load->view('template/footer') ?>
<script>
    setTimeout(function() {
        window.location.href = '<?= base_url() ?>index.php/selforder/home/<?= $nomeja ?>';
    }, 3000);
</script>