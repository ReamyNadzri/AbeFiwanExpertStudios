<head><title>Sistem Pembelian Barangan Antik</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<style>
.w3-tangerine {
  font-family: 'Tangerine', serif;
}
</style>
</head>

<body>

<div class="w3-container w3-orange">
<h1 class="w3-tangerine w3-xxxlarge"><b>Sistem Jualan Barang Antik</b></h1>
</div>


<!-- Navigasi -->
<div class="w3-bar w3-black">
<a href="index.php" class="w3-bar-item w3-button">Laman Utama</a><a href="pembeli_login.php" class="w3-bar-item w3-button">Daftar Masuk</a>
    <a href="pembeli_daftar.php" class="w3-bar-item w3-button">Daftar Pengguna Baru</a></div>
<div class="w3-row w3-margin-top">

  <div class="w3-quarter w3-container w3-margin-top w3-margin-bottom ">  
  <div class="w3-container w3-white w3-card-2 w3-round-large w3-animate-left">

    <h4>Carian Barang Antik</h4>
        <form class="w3-margin" action="barang_senarai.php" method="POST">
            <label><b>Nama Barang</b></label>
            <input class="w3-select w3-input w3-border w3-round-xxlarge" type="text" name="nama_barang">
            <hr>
            <input class="w3-button w3-red w3-bar w3-round-xxlarge" type="submit" value="cari">
        </form>
            <hr>
    </div>
    </div>
    <div class="w3-threequarter">
    <div class="w3-panel w3-card-2">
        <p>Setiap tempahan boleh dibuat samada dengan bayaran penuh atau sekurang-kurangnya 10% deposit daripada harga asal barang</p>
    </div> 
       
<table class="w3-table-all">
    <tbody><tr>
        <td width="50%">
        <b>No siri Barang :</b>2<br>
        <b>Nama barang :</b>duit Syiling Melaka<br>
        <b>Jenis barang :</b>Mata Wang<br>
        <b>Jangkaan Tahun :</b>1920<br>
        <b>Harga : RM </b>4000.00<br>
        <b>Bayaran Minimum Desposit : RM </b>400<br>
        <a class="w3-button w3-round-xxlarge w3-red" href="barang_bayar.php?nosiri_barang=2&amp;nama_barang=duit+Syiling+Melaka&amp;jenis=Mata+Wang&amp;tahun_keluaran=1920&amp;harga=4000.00&amp;gambar=duit.jpg" onclick="return confirm('Anda pasti ingin membeli barang ini?')" style="width:50%">Pilih</a></td>     
        
        <td>
        <img class="w3-image" src="images/barang/duit.jpg" style="width:40%">
        </td>
    </tr>
    
    <tr>
        <td width="50%">
        <b>No siri Barang :</b>3<br>
        <b>Nama barang :</b>Duit Kelantan<br>
        <b>Jenis barang :</b>Mata Wang<br>
        <b>Jangkaan Tahun :</b>1905<br>
        <b>Harga : RM </b>6000.00<br>
        <b>Bayaran Minimum Desposit : RM </b>600<br>
        <a class="w3-button w3-round-xxlarge w3-red" href="barang_bayar.php?nosiri_barang=3&amp;nama_barang=Duit+Kelantan&amp;jenis=Mata+Wang&amp;tahun_keluaran=1905&amp;harga=6000.00&amp;gambar=duit2.jpg" onclick="return confirm('Anda pasti ingin membeli barang ini?')" style="width:50%">Pilih</a></td>     
        
        <td>
        <img class="w3-image" src="images/barang/duit2.jpg" style="width:40%">
        </td>
    </tr>
    </tbody></table>





      
    </div> 
</div>
<div class="w3-container w3-margin-top w3-card w3-text-grey">
Jualan Rawak
<div class="w3-row w3-margin-bottom w3-margin-top">
<div class="w3-col m2 w3-center">
      <img class="w3-image" src="images/barang/keris2.jpg" style="width:80%;height:150;">
      <p>Keris Melaka</p>
      <p>RM 25000.00</p>
      </div><div class="w3-col m2 w3-center">
      <img class="w3-image" src="images/barang/perabot2.jpg" style="width:80%;height:150;">
      <p>Kerusi teh</p>
      <p>RM 1500.00</p>
      </div><div class="w3-col m2 w3-center">
      <img class="w3-image" src="images/barang/duit.jpg" style="width:80%;height:150;">
      <p>duit Syiling Melaka</p>
      <p>RM 4000.00</p>
      </div><div class="w3-col m2 w3-center">
      <img class="w3-image" src="images/barang/pasu2.jpg" style="width:80%;height:150;">
      <p>Pasu Parsi</p>
      <p>RM 56000.00</p>
      </div><div class="w3-col m2 w3-center">
      <img class="w3-image" src="images/barang/manuskrip.jpg" style="width:80%;height:150;">
      <p>Manuskrip arab</p>
      <p>RM 35000.00</p>
      </div><div class="w3-col m2 w3-center">
      <img class="w3-image" src="images/barang/map2.jpg" style="width:80%;height:150;">
      <p>Peta </p>
      <p>RM 1800.00</p>
      </div></div>
</div>

<div class="w3-row w3-dark-gray">
  <div class="w3-third w3-container">
    <h4 class="w3-text-orange"><b>Pembayaran</b></h4>
    <p>Pembayaran lebih mudah <br>dengan menggunakan kad</p>
    <img src="images/payment.png">
  </div>
  <div class="w3-third w3-container">
  <h4 class="w3-text-orange"><b>Media Sosial</b></h4>
  <p>Ikuti perkembangan kami di <br>pelbagai media sosial</p>
  <img src="images/mediasosial.png">
  </div>
  <div class="w3-third w3-container">
  <h4 class="w3-text-orange"><b>Pemberitahuan</b></h4>
  <p>
  Semua barangan yang dijual<br>
  di dalam aplikasi ini<br>
  merupakan barangan yang tulen<br>
  dan telah mendapat sijil penarafan<br>
  daripada muzium Negara Gohead Gostan
  </p>
  </div>
</div>




</body>