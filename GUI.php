<?php
$data = file_get_contents ('data/menu.json');
$menu = json_decode($data, true)['menu'];

$kategori = [];
foreach ($menu as $item) {
    $kat = $item['kategori'] ?? 'Lainnya';
    $kategori[$kat][] = $item;
}
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTS-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>warung madura online</title>
    <style>
      html, body {
        margin: 0;
        padding: 0;
         height: 100%;
        box-sizing: border-box;
      }

    
    .card {
    width: 200px;
    border: 1px solid #ccc;
    overflow: hidden;
    margin: 0;
    box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
    text-align: center; /* ini memastikan teks tetap di tengah */
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .card img {
        transition: transform 0.4s ease;
    }

    .card:hover img {
        transform: scale(1.1);
    }
    .container {
    display: flex;
    justify-content: center;  /* posisi horizontal */
    margin-top: 10px;         /* opsional */
    color: white;
    }


      body {
      font-family: Arial, sans-serif;
      background-color: rgb(255, 255, 255);
      }

      nav {
        background-color: rgb(0, 0, 0);
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 50px;
      }

      .logo {
        color: white;
        font-size: 15px;
        font-weight: bold;
        text-decoration: none;
      }

      .nav-links {
        align-items: center;
      }

      .nav-links a {
        color: white;
        text-decoration: none;
        margin-left: 10px;
        font-size: 17px;
        transition: color 0.3s;
      }

      .nav-links a:hover {
        #131414ff;
      }

     .menu-container {
      display: flex;
      gap: 30px;        /* jarak antar card */
      justify-content: center; /* agar berada di tengah */
      flex-wrap: wrap;  /* supaya turun ke bawah kalau layar sempit */
      }
      .image-grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 50px;
      margin: 50px 0;
      }

     .btn {
      display: inline-block;
      padding: 16px 16px;
      background-color:  rgb(44, 8, 247);  /* warna tombol */
      color: white;              /* warna teks */
      border-radius: 100px;        /* sudut melengkung */
      text-decoration: none;     /* hilangkan garis bawah */
      font-weight: bold;
      transition: 0.2s;
     }

/* efek saat di-hover */
      .btn:hover a:hover {
       background-color: #ff7300ff;
      }
      </style>
    </head>
<body>

<nav>

  <a href="#" class="logo">
    <img src="img/logo.png" width="120">
    <p>MADURA ONLINE</p>
    </a>
      <div class="row mt-3">
        <div class="col">
    <div class="container">
      <h1>MARKET MAKANAN</h1>
    </div>
    </div>
          <div class="nav-links a">
      <div class="container">
       <a href="#home">HOME  |</a>
      <a href="#about">About   |</a>
      <a href="#services">Services |</a>
      <a href="contact">contact  |</a>
    </div>
    </nav>
    <div class="row">
      <div class="col-md-4"></div>
    </div>
    <div class="container">
      <h1>SILAHKAN MENIKMATI</h1>
    </div>
    </nav>
    <div class="menu-container">
      <div class="image-grid">
    <!-- Baris 1 -->
    <div class='card' style='background: #FFF; color:black; text-align:center;'>
        <img src="img/makanan1.png" width="120">
        <h3>Kentang Goreng</h3>
        <p>Renyah</p>
        <h3>Rp 19.000</h3>
        <a href="#" class="btn">buy</a>
    </div>

    <div class='card' style='background: #FFF; color:black; text-align:center;'>
        <img src="img/makanan2.png" width="120">
        <h3>Kentang Goreng</h3>
        <p>Renyah</p>
        <h3>Rp 19.000</h3>
        <a href="#" class="btn">buy</a>
    </div>

    <div class='card' style='background: #FFF; color:black; text-align:center;'>
        <img src="img/makanan3.png" width="120">
        <h3>Kentang Goreng</h3>
        <p>Renyah</p>
        <h3>Rp 19.000</h3>
        <a href="#" class="btn">buy</a>
    </div>

    <div class='card' style='background: #FFF; color:black; text-align:center;'>
        <img src="img/makanan4.png" width="120">
        <h3>Kentang Goreng</h3>
        <p>Renyah</p>
        <h3>Rp 19.000</h3>
        <a href="#" class="btn">buy</a> 
    </div>
     
    <div class='card' style='background: #FFF; color:black; text-align:center;'>
        <img src="img/makanan5.png" width="120">
        <h3>Kentang Goreng</h3>
        <p>Renyah</p>
        <h3>Rp 19.000</h3>
        <a href="#" class="btn">buy</a>
    </div>
    <div class='card' style='background: #FFF; color:black; text-align:center;'>
        <img src="img/minum1.png" width="120">
        <h3>ES STOPBERRY</h3>
        <p>BUTUH YG MANIS MANIS KAMI SEDIAKAN</p>
        <h3>Rp 19.000</h3>
        <a href="#" class="btn">buy</a>
    </div>

    <div class='card' style='background: #FFF; color:black; text-align:center;'>
        <img src="img/minum2.png" width="120">
        <h3>ES DUREN</h3>
        <p>PENGEN DUREN KAMI SEDIAKAN</p>
        <h3>Rp 19.000</h3>
        <a href="#" class="btn">buy</a>
    </div>

    <div class='card' style='background: #FFF; color:black; text-align:center;'>
        <img src="img/minum3.png" width="120">
        <h3>ES TARO</h3>
        <p>KEPEDASAN KAMI SEDIAKAN</p>
        <h3>Rp 19.000</h3>
        <a href="#" class="btn">buy</a>
    </div>
    <div class='card' style='background: #FFF; color:black; text-align:center;'>
        <img src="img/makanan5.png" width="120">
        <h3>Kentang Goreng</h3>
        <p>Renyah</p>
        <h3>Rp 19.000</h3>
        <a href="#" class="btn">buy</a>
    </div>
    </div>
    </body>
    </html>
    
  
