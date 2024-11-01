<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
html {
    scroll-behavior: smooth;
}



.container {
    margin: 0 auto;
    padding: 10px;
    background-color: white;
    z-index: 1;
}

.containerfooter {
    background-color: #f8f8f8;
    padding: 10px 0;
    position: relative; /* Menjamin bahwa posisi relatif untuk footer */
    z-index: 1;
}

.containerfooter nav {
    display: flex;
    justify-content: space-around;
}

.containerfooter nav a {
    text-align: center;
    position: relative;
    text-decoration: none;
    color: grey;
}

.containerfooter nav a span {
    display: block;
    font-size: 12px;
    margin-top: 5px;
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0); /* Awal dan akhir animasi */
    }
    40% {
        transform: translateY(-10px); /* Lompat ke atas */
    }
    60% {
        transform: translateY(-5px); /* Lompat kecil ke atas */
    }
}

.badge {
    position: absolute;
    top: -8px;
    right: -10px;
    background-color: red;
    color: white;
    border-radius: 50%;
    padding: 2px 6px;
    font-size: 10px;
    font-weight: bold;
    animation: bounce 2s infinite; /* Tambahkan animasi */
}


header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

h2 {
    font-size: 24px;
    font-weight: bold;
}
.head {
    position: fixed; /* Fixed di atas */
    top: 0;
    left: 0;
    width: 100%; /* Agar memenuhi lebar layar */
    background-color: white; /* Tambahkan warna background agar jelas terlihat */
    z-index:4; /* Supaya selalu berada di atas elemen lain */
    padding: 5px;
    border-bottom: 1px solid #ddd; /* Garis bawah untuk pemisah */
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.2);
}
.menu-main {
    margin-top: 160px;
}

.profile-pic {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.search {
    margin-top: 10px;
    margin-bottom: 10px;
    display: flex; /* Mengatur elemen dalam satu baris */
    align-items: center; /* Memusatkan vertikal */
    border: 1px solid #ccc; /* Tambahkan border */
    border-radius: 30px; /* Tambahkan border radius */
    padding: 5px;
}

.search input {
    border: none; /* Menghilangkan border default */
    outline: none; /* Menghilangkan outline */
    flex: 1; /* Agar input mengambil sisa ruang */
    padding: 5px; /* Tambahkan padding */
    font-size: 16px; 
}
.search i {
    margin-right: 10px;
    margin-left: 10px;
}

.categories {
    display: flex;            /* Menggunakan flexbox untuk penataan elemen */
    flex-wrap: nowrap;       /* Mencegah elemen berpindah ke baris berikutnya */
    gap: 10px;               /* Jarak antar elemen */
    overflow-x: auto;        /* Memungkinkan scroll horizontal */
    padding: 5px 0;         /* Jarak atas dan bawah */
}

.category-container {
    white-space: nowrap;      /* Mencegah teks dalam kategori terputus */
}

.category-container a {
    text-decoration: none;
    padding: 10px;           /* Ruang di sekitar tautan */
    display: block;           /* Mengubah elemen tautan menjadi blok */
}


.categories::-webkit-scrollbar {
    height: 8px; /* Ubah tinggi scrollbar */
}

.categories::-webkit-scrollbar-thumb {
    /*background-color: #ccc;
    border-radius: 10px;*/
}


.active {
    background-color: <?= $color->color ?>;
    padding: 15px;
    border-radius: 10px;
    color: white;
}
.nonactive {
    color: black;
}
.ordered-qty {
    background-color: red;
    float: right;
    color: white;
    padding: 2px 8px;
    border-radius: 10px;
    font-size: 14px;
    font-weight: bold;
    display: inline-block;
    margin-left: 10px;
    text-align: right; /* Aligns the text inside the box to the right */
}


.menu-item {

      border-bottom: 1px solid #ddd;
      padding: 15px 0;
    }
    .menu-item img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 10px;
    }
    .menu-item .price {
      font-size: 18px;
      font-weight: bold;
    }
    .menu-item .sold-out {
      position: absolute;
      top: 10px;
      left: 0;
      background-color: #ff6b6b;
      color: white;
      padding: 3px 10px;
      border-radius: 5px;
      font-size: 12px;
    }
    .menu-item .add-btn {
      background-color: <?= $color->color ?>;
      border-radius: 50%;
      padding: 5px;
      width: 35px;
      height: 35px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 18px;
    }
    .menu-item .add-btn-muted {
      background-color: grey;
      color: white;
      border-radius: 50%;
      padding: 5px;
      width: 35px;
      height: 35px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 18px;
    }
    .menu-item .text-muted {
      color: #aaa;
    }
footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: white;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
    box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.2);
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
    bottom: 130px;
    z-index: 5;
}
.circle2 {
    bottom: 80px;
    z-index: 5;
}



.item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #e9ecef;
}

.item img {
    width: 60px;
    height: 60px;
    border-radius: 10px;
}

.item-details {
    flex-grow: 1;
    padding-left: 15px;
}

.item-details h6 {
    margin: 0;
    font-size: 16px;
}

.item-details .price {
    font-weight: bold;
    font-size: 18px;
}

/*.quantity-control {
    display: flex;
    align-items: center;
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
}*/

.remove-item {
    background-color: transparent;
    border: none;
    font-size: 20px;
    color: #dc3545;
    cursor: pointer;
}

.total {
    font-weight: bold;
    font-size: 20px;
    margin-top: 20px;  
}
/*.total .float-end{
    color: #FFD700;
}*/

.checkout-btn {
    background-color: <?= $color->color ?>;
    color: white;
    width: 100%;
    border-radius: 10px;
    padding: 15px;
    font-size: 18px;
    border: none;
    margin-top: 5px;
}

.checkout-btn:hover {
    background-color: <?= $color->color ?>;
}

.add-btn {
    width: 100%;
    margin-top: 5px;
}

.add-btn:hover {
    background-color: <?= $color->color ?>;
}

.back-to-menu {
    text-align: center;
    margin-top: 20px;
}

.back-to-menu a {
    color: <?= $color->color ?>;
    text-decoration: none;
}

.back-to-menu a:hover {
    text-decoration: underline;
}

</style>