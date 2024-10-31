<?php $this->load->view('template/headmenu') ?>
<style>
    body {
        background-color: #f3f3f3;
        font-family: 'Arial', sans-serif;
        margin: 0;
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: linear-gradient(to right, <?= $color->lightcolor ?>, <?= $color->color ?>, <?= $color->darkcolor ?>);
        padding: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        z-index: 4;
    }

    header div {
        display: flex;
        align-items: center;
    }

    header h2 {
        padding-top: 10px;
        margin-left: 5px;
        font-size: 24px;
        color: white;
    }

    .main-header {
        position: fixed; /* Mengubah posisi menjadi fixed */
        top: 50px; /* Menyesuaikan jarak dari atas, sesuaikan dengan tinggi header */
        left: 0;
        width: 100vw;
        height: 150px;
        background-color: <?= $color->color ?>;
        padding-left: 20px;
        z-index: 3; /* Z-index lebih tinggi untuk menampilkan di atas bulat */
    }

    .main-header h2 {
        color: white;
        font-size: 32px;
        margin-top: 30px;
        z-index: 4; /* Menjaga z-index lebih tinggi agar tetap di atas bulat */
        position: relative; /* Agar z-index berfungsi dengan baik */
        margin-bottom: 1px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    }

    .main-header label {
        color: white;
        font-size: 20px;
        z-index: 4; /* Menjaga z-index lebih tinggi agar tetap di atas bulat */
        position: relative; /* Agar z-index berfungsi dengan baik */
    }


    .main {
        position: fixed;
        top: 195px;
        left: 0;
        width: 100vw;
        height: 130px;
        background-color: <?= $color->color ?>;
        border-bottom-left-radius: 25px;
        border-bottom-right-radius: 25px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        padding-left: 20px;
        z-index: 1;
    }

    .main-content {
        position: fixed; /* Mengubah posisi menjadi fixed */
        top: 195px; /* Menyesuaikan jarak dari atas, sesuaikan dengan tinggi header */
        left: 0;
        width: 100vw;
        height: calc(100vh - 195px); 
        border-bottom-left-radius: 25px;
        border-bottom-right-radius: 25px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        padding-left: 20px;
        z-index: 1;
        overflow-y: auto; /* Menambahkan scroll jika konten lebih tinggi */
    }


    .main-content .btn {
        margin-top: 20px;
        background-color: #f4f4f4;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center; 
        margin-right: 15px;
        height: 170px;
        box-sizing: border-box;
        margin-bottom: 20px;
        color: grey;
    }



    .cart-link {
        position: relative;
    }

    .cart-link i {
        position: absolute;
        top: -30px;
        left: 50%;
        transform: translateX(-50%);
        background-color: <?= $color->color ?>;
        color: white;
        border-radius: 50%;
        padding: 17px;
        z-index: 10;
    }

    .badge {
        position: absolute;
        top: -10px;
        right: -10px;
        background-color: red;
        color: white;
        border-radius: 50%;
        padding: 5px;
        font-size: 12px;
    }

    .profile-img {
        width: 70%;margin-top: 45px;
    }
    .profile-img-dua {
        width: 70%;margin-top: 35px;
    }
    .bulat {
        background-color: rgba(11, 222, 124, 0.3);
        width: 360px;
        height: 200px;
        border-radius: 50%;
        transform: translate(-40%, -100%);
        z-index: 3; /* Z-index lebih rendah dari main-header */
        position: absolute; /* Menjadikan elemen bulat dengan posisi absolut */
    }

    /*.bulat-profile {
        border: 5px solid rgba(11, 222, 124, 0.3);
        width: 100px;
        height: 100px;
        border-radius: 50%;
        transform: translate(267%, -103%);
        z-index: 4; /* Set z-index lebih tinggi dari main-header */
        position: absolute; /* Menjadikan elemen bulat-profile dengan posisi absolut */
    }*/
    /*.bulat-profile-dua {
        border: 5px solid rgba(11, 222, 124, 0.3);
        width: 100px;
        height: 100px;
        border-radius: 50%;
        transform: translate(267%, -90%);
        z-index: 4; /* Set z-index lebih tinggi dari main-header */
        position: absolute; /* Menjadikan elemen bulat-profile dengan posisi absolut */
    }*/
    footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: white;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
        box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.2);
        z-index: 9999;
    }

    footer nav {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    footer nav a {
        padding-top: 10px;
        text-align: center;
        color: grey;
        font-size: 12px; /* Small text size */
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
    }

    footer nav a i {
        font-size: 24px; /* Adjust icon size as needed */
    }

    footer nav a span {
        margin-top: 4px; /* Space between icon and text */
        font-size: 10px; /* Small text size */
    }

</style>
</head>
<body>
    
    <header>
        <div>
            <h2><strong>Home</strong></h2>
        </div>
    </header>
    
    <div class="main-header">
        <div class="row">
            <div class="col-8">
                <h2><strong>
                <?php $jam = date("H"); ?>
                <?php if ($jam < 10 ): ?>
                    GOOD MORNING
                <?php elseif ($jam < 15):?>
                    GOOD AFTERNOON
                <?php elseif ($jam < 18):?>
                    GOOD EVENING
                <?php else:?>
                    GOOD NIGHT
                <?php endif ?>
                </strong></h2>
                <label style="color: white;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);"><strong><?= $this->session->userdata('username') ?></strong></label>
            </div>
            <div class="col-4">
                <img src="<?= base_url();?>assets/userkosong.png"
                <?php if ($jam < 10 ): ?>
                    class="profile-img"
                <?php elseif ($jam < 15):?>
                    class="profile-img"
                <?php elseif ($jam < 18):?>
                    class="profile-img-dua"
                <?php else:?>
                    class="profile-img-dua"
                <?php endif ?>  
                alt="Profile Image">
            </div>
        </div>
        <div class="bulat"></div>
        <!-- <?php if ($jam < 10 ): ?>
            <div class="bulat-profile"></div>
        <?php elseif ($jam < 15):?>
            <div class="bulat-profile"></div>
        <?php elseif ($jam < 18):?>
            <div class="bulat-profile-dua"></div>
        <?php elseif ($jam > 18):?>
            <div class="bulat-profile-dua"></div>
        <?php endif ?> -->
    </div>
    <div class="main"></div>
    <div class="main-content">
        
        <div style="margin-bottom: 150px;"></div>
    </div>
<?php $this->load->view('template/footer') ?>
