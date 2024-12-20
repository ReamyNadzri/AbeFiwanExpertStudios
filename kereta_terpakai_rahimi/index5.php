<!DOCTYPE html>
<html>
<title>Sistem Tempahan Kereta Sewa</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<!-- Tajuk di atas -->
<div class="w3-container w3-cyan">
    <h1><b>Sistem Tempahan Kereta Sewa Terbaik Langkawi</b></h1>
</div>

<!-- Navigasi -->
<div class='w3-bar w3-black'>
<a href='index.php' class='w3-bar-item w3-button'>Laman Utama</a><a href='penyewa_login.php' class='w3-bar-item w3-button'>Daftar Masuk</a>
    <a href='penyewa_daftar.php' class='w3-bar-item w3-button'>Daftar Pengguna Baru</a></div>
<!-- isi kandungan -->
<div class="w3-row w3-light-blue w3-margin-bottom ">
  <div class="w3-quarter w3-container w3-margin-top w3-margin-bottom ">
       
    <div class="w3-container w3-white w3-card-2 w3-round-large w3-animate-left">
        <h4>Carian Kereta Sewa</h4>
        <form class='w3-margin' action='tempahan_senarai.php' method='POST'>
            <label class="w3-text-blue"><b>Tarikh Mula</b></label> 
            <input class='w3-input w3-border w3-round-xxlarge' type='date' name='tarikh_masuk' value='2019-11-20' min='2019-11-20'>
    
            <label class="w3-text-blue"><b>Tarikh Keluar</b></label> 
            <input class='w3-input w3-border w3-round-xxlarge' type='date' name='tarikh_keluar' value='2019-11-21' min='2019-11-21'>
            <br>
            <input  class="w3-button w3-round-xxlarge w3-red w3-bar" type='submit' value='Cari Kekosongan'>
        </form>
    </div>
  </div>
  <div class="w3-threequarter ">
  <img src='images/bg-car2.jpg' class='w3-image w3-opacity-min'>
  </div>
</div>

<!--iklan -->
<div class='w3-containter w3-center'>
<h4>Kenapa perlu menyewa dengan kami</h4>
Pelbagai Jenis Kereta mengikut keperluan anda

<div class="w3-row-padding w3-center w3-margin-top w3-margin-bottom">
    <div class="w3-quarter w3-container ">
        <div class="w3-container w3-card-2">
            <img src='images/smallcar.jpg' class='w3-image'>
            <p class='w3-cyan'>Kereta Kecil</p>
        </div>
    </div>
    <div class="w3-quarter w3-container ">
        <div class="w3-container w3-card-2">
            <img src='images/mediumcar.jpg' class='w3-image'>
            <p class='w3-cyan'>Kereta Sederhana</p>
        </div>
    </div>
    <div class="w3-quarter w3-container">
        <div class="w3-container w3-card-2">
            <img src='images/mpv.jpg' class='w3-image'>
            <p class='w3-cyan'>MPV</p>
        </div>
    </div>
    <div class="w3-quarter w3-container">
        <div class="w3-container w3-card-2">
            <img src='images/van.jpg' class='w3-image'>
            <p class='w3-cyan'>Van</p>
        </div>
    </div>
</div>
</div>
<!-- footer -->
<div class="w3-container w3-cyan w3-center">
    <h6><b>Syarikat Sewa Kereta Pantas</b></h6>
    <p class='w3-tiny'>Jeti Feri Pulau Langkawi</p>
    <p class='w3-tiny'>Hubungi</p>
    <p class='w3-tiny'><b>| Azlan : 013-8860698 | Azlinda : 013-8860699 |</b></p>
</div>
</body>
</html>