<?php $this->load->view('template/headmenu') ?>
<style>
    body {
        background-color: #f3f3f3;
        font-family: 'Arial', sans-serif;
        padding-top: 120px; /* To ensure content starts below the fixed header */
        margin: 0;
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #fff; /* Optional background for header */
        padding: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        z-index: 1000; /* Ensures it stays above other elements */
    }

    header div {
        display: flex;
        align-items: center;
        justify-content: flex-start; /* Align content to the left */
    }

    header h2 {
        margin: 0;
        margin-left: 5px;
        font-size: 24px;
    }

    .profile-card {
        background-color: #fff;
        border-radius: 20px;
        width: 350px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        position: relative;
        margin: 20px auto; /* Centers the card horizontally */
    }

    .profile-img {
        width: 70%;
        height: 70%;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #f8e9e9;
        margin: 0 auto;
        position: relative;
        top: -60px;
        background-color: white;
    }

    .notification-dot {
        width: 40px;
        height: 40px;
        background-color: #198754;
        border-radius: 50%;
        position: absolute;
        top: 120px;
        right: 80px;
        z-index: 2;
    }

    .section-title {
        font-size: 12px;
        color: #999;
        margin-top: -60px;
    }

    .section-title p {
        color: grey;
        margin: 5px 0 0 0;
        font-size: 16px;
        font-weight: bold;
        color: #666;
    }

    .section-title h2 {
        margin: 0;
        color: #333;
        font-size: 20px;
    }

    .info-group {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .info-group label {
        color: #999;
        font-size: 20px;
    }

    .info-group span {
        color: #333;
        font-size: 20px;
    }

    .containerfooter {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: white;
        padding: 10px;
        box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
    }

    footer nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    footer nav a {
        text-decoration: none;
        color: black;
        font-size: 16px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    footer nav a i {
        font-size: 20px;
    }
</style>
</head>
<body>
    <header>
        <div>
            <a href="<?= base_url() ?><?= $url ?>" style="text-decoration: none; color: black;">
                <i class="bi bi-arrow-left" style="font-size: 30px; margin-left: 10px; text-shadow: 1px 1px 2px black;"></i>
            </a>
            <h2><strong>Proflie</strong></h2>
        </div>
    </header>

    <div class="profile-card">
        <div class="notification-dot"></div>
        <img src="<?= base_url();?>assets/userkosong.png" class="profile-img" alt="Profile Image" style="filter: grayscale(100%);">
        <div class="section-title">  
            <p>CUSTOMER</p>
            <h2>TABLE NO : <?= $nomeja ?></h2>
        </div>
        <div style="margin-bottom: 40px;"></div>
        <div class="info-group">
            <label>Name</label>
            <span><?= $username ?></span>
        </div>
        <div class="info-group">
            <label>Phone Number</label>
            <span><?= $no_hp ?></span>
        </div>
    </div>

    <div class="containerfooter text-center" >
        <footer>
            <nav>
                <a href="<?= base_url() ?>index.php/selforder/home/<?= $nomeja ?>">
                    <i class="fas fa-home" ></i>

                    <span>Home</span>
                </a>
                <a href="<?= base_url() ?>index.php/Cart/home/<?= $nomeja ?>">
                    <i class="fas fa-shopping-cart" ><span class="badge" style="position: absolute; top: -10px; right: -10px; background-color: red; color: white; border-radius: 50%; padding: 5px; font-size: 12px;"><?= $total_qty;?></span></i>

                    <span>Cart</span>
                </a>
                <a href="<?= base_url() ?>index.php/Kasir_waitress/memanggil/<?= $nomeja ?>">
                    <img src="<?= base_url(); ?>/assets/icon/menu/call_waitress.png" 
                     style="width: 35px; height: 35px; border-radius: 50%; filter: grayscale(100%);" 
                     alt="Hachi Grill" class="image" />

                    <span style="margin-top: -1px;">Call Waitress</span>
                </a>
                <a href="" class="cart-link" style="position: relative;">
                    <i class="fas fa-user" style="color: white; background-color: #198754; border-radius: 50%; padding: 17px; position: absolute; top: -30px; left: 50%; transform: translateX(-50%); z-index: 10;">
                    </i>
                    <span style="position: relative; top: 12px;font-size: 17px;color: #198754;">Profile</span>
                </a>
            </nav>
        </footer>
    </div>
<?php $this->load->view('template/footer') ?>
