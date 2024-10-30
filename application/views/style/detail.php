<style type="text/css">
	    body {
        background-repeat: no-repeat;
        margin: 0;
    }

    .burger-card {
        background-color: white;
        padding: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        width: 100vw; /* Penuhi lebar viewport secara horizontal */
        max-width: 100%; /* Hilangkan batas maksimal lebar */
        margin-left: 0; /* Hapus margin di kiri */
        margin-right: 0;
        margin-top: 10px;
        margin-bottom: 150px;
    }

    .burger-image {
      width: 100%; /* Sesuaikan dengan lebar container */
      height: auto;
      margin-bottom: 15px;
      border-radius: 10px;
    }
    .rating {
      background-color: <?= $color->color ?>;
      color: white;
      border-radius: 10px;
      font-size: 1.1em;
      display: inline-block;
    }
    .price {
      font-size: 1.5em;
      font-weight: bold;
    }
    .burger-title {
      font-size: 1.3em;
      font-weight: bold;
      margin-top: 15px;
    }
    .description {
      color: #666;
      font-size: 16px; /* Ubah ukuran font deskripsi */
      margin: 10px 0;
    }
    .quantity-control {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 10px;
    }
    .quantity-control button {
      background-color: <?= $color->color ?>;
      border: none;
      font-weight: bold;
      color: <?= $color->color ?>;
    }
    .quantity-control span {
      font-size: 1.2em;
      padding: 0 10px;
    }
    .add-ons {
      display: flex;
      justify-content: center;
      margin: 15px 0;
    }
    .add-ons img {
      width: 40px;
      height: 40px;
      border-radius: 10px;
      margin: 0 10px;
      border: 1px solid #ccc;
    }
    .add-to-cart-btn {
        background-color: <?= $color->color ?>;  /* Warna latar belakang tombol */
        color: white;                /* Warna teks tombol */
        border-radius: 30px;        /* Sudut melingkar */
        padding: 15px 20px;         /* Padding internal */
        font-size: 1.2em;           /* Ukuran font */
        width: calc(100% - 20px);   /* Lebar penuh dikurangi margin (10px + 40px) */
        margin: 5px 10px 10px 10px; /* Margin (atas, kanan, bawah, kiri) */
        border: none;                /* Menghapus border default */
        cursor: pointer;             /* Mengubah kursor saat hover */
        transition: background-color 0.3s; /* Efek transisi saat hover */
    }

    .add-to-cart-btn:hover {
      color: white;
      background-color: <?= $color->color ?>;   /* Warna latar belakang saat hover */
    }

    .categories {
      display: flex;
      gap: 10px; /* Jarak antar elemen */
      overflow-x: auto; /* Memungkinkan scroll horizontal */
      padding: 10px 0;
      white-space: nowrap;
    }

    .category {
      width: 80px; /* Lebar tetap untuk semua elemen kategori */
      height: 80px; /* Tinggi tetap untuk semua elemen kategori */
      text-align: center;
      padding: 10px;
      border: none;
      color: white;
      cursor: pointer;
      border-radius: 50%; /* Buat elemen kategori berbentuk lingkaran */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .category-container {
      text-align: center;
    }

    .categories::-webkit-scrollbar {
      height: 8px; /* Ubah tinggi scrollbar */
    }

    .categories::-webkit-scrollbar-thumb {
      /*background-color: #ccc;
      border-radius: 10px;*/
    }

    .category.active {
      background-color: #7A4FF4;
      color: white;
    }
    .left-button {
      background-color: transparent; /* Tidak ada background */
      border: none; /* Tidak ada border */
      width: 30px; /* Lebar tombol */
      height: 30px; /* Tinggi tombol */
      display: flex;
      font-size: 30px; /* Ukuran ikon */
      color: white; /* Warna ikon */
      cursor: pointer; /* Ubah kursor saat di hover */
      
      /* Tambahkan posisi absolut untuk menempatkan di kiri atas */
      position: absolute;
      top: 10px; /* Jarak dari atas */
      left: 10px; /* Jarak dari kiri */
    }

    .left-button:focus {
      outline: none; /* Hilangkan outline saat tombol fokus */
    }
    input[type="checkbox"] {
        transform: scale(1.5); /* Atur ukuran sesuai keinginan, 1.5 berarti 150% */
        margin-right: 10px; /* Berikan jarak kanan untuk tampilan lebih baik */
    }
    footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: white;
        box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.2);
        border-top-right-radius: 30px;
        border-top-left-radius: 30px;
    }
    .head {
        position: fixed; /* Fixed di atas */
        top: 0;
        left: 0;
        width: 100%; /* Agar memenuhi lebar layar */
        background-color: white; /* Tambahkan warna background agar jelas terlihat */
        z-index: 1; /* Supaya selalu berada di atas elemen lain */
        padding: 5px;
        border-bottom: 1px solid #ddd; /* Garis bawah untuk pemisah */
        box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.2);
    }

    .profile-pic {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }
    .custom-checkbox {
      appearance: none; /* Menghilangkan tampilan default checkbox */
      width: 20px;
      height: 20px;
      border: 1px solid grey; /* Warna hijau seperti Grab */
      border-radius: 4px;
      position: relative;
      margin-bottom: 10px;
    }

    .custom-checkbox:checked {
      background-color: #00B14F; /* Warna hijau saat checkbox dicentang */
      border-color: #00B14F;
    }

    .custom-checkbox:checked::after {
      content: '';
      position: absolute;
      top: 2px;
      left: 6px;
      width: 6px;
      height: 10px;
      border: solid white;
      border-width: 0 2px 2px 0;
      transform: rotate(45deg);
    }
    .user-icon-circle {
      position: fixed;
      width: 40px; /* Size of the circle */
      height: 40px;
      background-color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.2);
      right: 5px; /* Adjust this value to control how far from the right edge */
  }
  .icon-wrapper {
      display: flex;
      flex-direction: column; /* Stack the arrows vertically */
      align-items: center; /* Center the icons horizontally */
  }
  .user-icon {
      font-size: 14px; /* Adjust the size of the icon */
      color: grey;
  }

  .circle1 {
      bottom: 180px; /* Adjust this value to control vertical positioning */
  }
  .circle2 {
      bottom: 130px; /* Adjust this value to control vertical positioning */
  }
</style>