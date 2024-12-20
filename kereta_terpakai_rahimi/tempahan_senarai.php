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
    <div class='w3-row w3-light-blue w3-margin-bottom '>
  <div class='w3-quarter w3-container w3-margin-top w3-margin-bottom '>
       
    <div class='w3-container w3-white w3-card-2 w3-round-large w3-animate-left'>
        <h4>Carian Kereta Sewa</h4>
        <form class='w3-margin' action='tempahan_senarai.php' method='POST'>
            <label class='w3-text-blue'><b>Tarikh Mula</b></label> 
            <input class='w3-input w3-border w3-round-xxlarge' type='date' name='tarikh_masuk' value='2019-11-20' min='2019-11-20'>
    
            <label class='w3-text-blue'><b>Tarikh Keluar</b></label> 
            <input class='w3-input w3-border w3-round-xxlarge' type='date' name='tarikh_keluar' value='2019-11-21' min='2019-11-21'>
            <br>
            <input  class='w3-button w3-round-xxlarge w3-red w3-bar' type='submit' value='Cari Kekosongan'>
        </form>
    </div>
  </div>
  <div class='w3-threequarter w3-white'>



        <div class='w3-row w3-margin-top w3-animate-opacity'>

            <div class='w3-half w3-container '>
            <b>Jenis kereta :</b>Viva<br>
            <b>No kereta :</b>abc123<br>
            <b>jenis_model kereta :</b>produa<br>
            <b>harga_sewaan Semalam :</b>RM 80.00<br>
            <b>Bil Hari :</b>1 Hari<br>
            <b>Jumlah Bayaran :</b>RM 80<br>
            </div>
            <div class='w3-quarter w3-container '>
            <img class='w3-image ' src='images/kereta/a1.jpg'><br><br>
            <a class='w3-button w3-round-xxlarge w3-red w3-bar' href='tempahan_bayar.php?noplat=abc123&jenis_model=produa&harga_sewaan=80.00&jenis=Viva&masuk=2019-11-20&keluar=2019-11-21&jumlah_hari=1'>Tempah</a>

            </div>
        
        </div><hr>
      
        <div class='w3-row w3-margin-top w3-animate-opacity'>

            <div class='w3-half w3-container '>
            <b>Jenis kereta :</b>kancil<br>
            <b>No kereta :</b>bbc2312<br>
            <b>jenis_model kereta :</b>produa<br>
            <b>harga_sewaan Semalam :</b>RM 100.00<br>
            <b>Bil Hari :</b>1 Hari<br>
            <b>Jumlah Bayaran :</b>RM 100<br>
            </div>
            <div class='w3-quarter w3-container '>
            <img class='w3-image ' src='images/kereta/a2.jpg'><br><br>
            <a class='w3-button w3-round-xxlarge w3-red w3-bar' href='tempahan_bayar.php?noplat=bbc2312&jenis_model=produa&harga_sewaan=100.00&jenis=kancil&masuk=2019-11-20&keluar=2019-11-21&jumlah_hari=1'>Tempah</a>

            </div>
        
        </div><hr>
      
        <div class='w3-row w3-margin-top w3-animate-opacity'>

            <div class='w3-half w3-container '>
            <b>Jenis kereta :</b>Kancil<br>
            <b>No kereta :</b>KBC2721<br>
            <b>jenis_model kereta :</b>produa<br>
            <b>harga_sewaan Semalam :</b>RM 50.00<br>
            <b>Bil Hari :</b>1 Hari<br>
            <b>Jumlah Bayaran :</b>RM 50<br>
            </div>
            <div class='w3-quarter w3-container '>
            <img class='w3-image ' src='images/kereta/a2.jpg'><br><br>
            <a class='w3-button w3-round-xxlarge w3-red w3-bar' href='tempahan_bayar.php?noplat=KBC2721&jenis_model=produa&harga_sewaan=50.00&jenis=Kancil&masuk=2019-11-20&keluar=2019-11-21&jumlah_hari=1'>Tempah</a>

            </div>
        
        </div><hr>
      
        <div class='w3-row w3-margin-top w3-animate-opacity'>

            <div class='w3-half w3-container '>
            <b>Jenis kereta :</b>Gen2<br>
            <b>No kereta :</b>SD1657D<br>
            <b>jenis_model kereta :</b>proton<br>
            <b>harga_sewaan Semalam :</b>RM 100.00<br>
            <b>Bil Hari :</b>1 Hari<br>
            <b>Jumlah Bayaran :</b>RM 100<br>
            </div>
            <div class='w3-quarter w3-container '>
            <img class='w3-image ' src='images/kereta/a3.jpg'><br><br>
            <a class='w3-button w3-round-xxlarge w3-red w3-bar' href='tempahan_bayar.php?noplat=SD1657D&jenis_model=proton&harga_sewaan=100.00&jenis=Gen2&masuk=2019-11-20&keluar=2019-11-21&jumlah_hari=1'>Tempah</a>

            </div>
        
        </div><hr>
      
        <div class='w3-row w3-margin-top w3-animate-opacity'>

            <div class='w3-half w3-container '>
            <b>Jenis kereta :</b>Sienta<br>
            <b>No kereta :</b>VE3215<br>
            <b>jenis_model kereta :</b>toyota<br>
            <b>harga_sewaan Semalam :</b>RM 250.00<br>
            <b>Bil Hari :</b>1 Hari<br>
            <b>Jumlah Bayaran :</b>RM 250<br>
            </div>
            <div class='w3-quarter w3-container '>
            <img class='w3-image ' src='images/kereta/a4.jpg'><br><br>
            <a class='w3-button w3-round-xxlarge w3-red w3-bar' href='tempahan_bayar.php?noplat=VE3215&jenis_model=toyota&harga_sewaan=250.00&jenis=Sienta&masuk=2019-11-20&keluar=2019-11-21&jumlah_hari=1'>Tempah</a>

            </div>
        
        </div><hr>
        </div>
    </div><hr>
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