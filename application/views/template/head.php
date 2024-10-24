<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hachi Garden | Self Order</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <!-- Google Font: Source Sans Pro -->
  <link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/fontawesome/css/all.min.css" rel="stylesheet">
  <style type="text/css">
    @media (min-height: 640px) {
      .textloading{
    text-align: center;
    margin-top: 350px;
    margin-left: 90px;
    color: #223c77;
    position: fixed;
    z-index: 10000001;
  }
  .preloader{
    background: rgba(0,0,0,0.7);
    height: 100vh;
    width: 100%;
    position: fixed;
    z-index: 1000000;
  }
  .loadingkonek{
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
    }
    @media (min-height: 720px) {
      .textloading{
    text-align: center;
    margin-top: 410px;
    margin-left: 105px;
    color: #223c77;
    position: fixed;
    z-index: 10000001;
  }
  .preloader{
    background: rgba(0,0,0,0.7);
    height: 100vh;
    width: 100%;
    position: fixed;
    z-index: 1000000;
  }
  .loadingkonek{
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
    }
    

  @keyframes putar{
    from{transform: rotate(0deg);}
    to{transform: rotate(360deg);}
  }
  </style>
  
  </head>
  <body>
<p id="textloading" hidden="">Menghubungkan Kembali</p>
<div id="preloader"></div>
