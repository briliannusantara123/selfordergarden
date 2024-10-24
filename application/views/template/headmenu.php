<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hachi Garden | Self Order</title>
    <link href="<?= base_url();?>assets/css/menu.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link href="<?= base_url();?>assets/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
     <style>
        /* CSS untuk mengganti font */
        body {
            font-family: 'Roboto', sans-serif;
        }
        .loadingkonek {
        width: 50px;
        height: 50px;
        border: solid 5px #ccc;
        border-top-color: #198754;
        border-radius: 100%;

        position: fixed;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        z-index: 7;

        animation: putar 1s linear infinite;
    }

    .textloading {
        text-align: center;
        color: #198754;
        position: fixed;
        font-weight: bold;
        font-size: 25px;
        z-index: 7; /* Pastikan lebih tinggi dari .loadingkonek */
        left: 50%; /* Pusatkan secara horizontal */
        top: calc(50% + 35px); /* Jarak dari loadingkonek, sesuaikan jika perlu */
        transform: translateX(-50%); /* Pusatkan elemen secara horizontal */
    }
    .load{
        background: rgba(0,0,0,0.7);
        height: 100vh;
        width: 100%;
        position: fixed;
        z-index: 6;
      }

       #loading{
        width: 60px;
        height: 60px;
        border: solid 5px #ccc;
        border-top-color: #198754;
        border-radius: 100%;

        position: fixed;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        z-index: 7;

        animation: putar 1s linear infinite;
      }

    @keyframes putar{
        from{transform: rotate(0deg);}
        to{transform: rotate(360deg);}
    }

      .preloader{
        background: rgba(0,0,0,0.7);
        height: 100%;
        width: 100%;
        position: fixed;
        z-index: 5;
      }
    </style>

</head>
<body>
<p id="textloading" hidden="">Reconnect to the network</p>
<div id="preloader"></div>
<div id="loadingkonek"></div>
