<!-- memanggil fail header -->
<?PHP include('header.php'); ?>

<div class="w3-container w3-center w3-white">
<br>
<img src="gambar/logo_resit.png">
<h2><b>RESIT PEMBELIAN KERETA</b></h2>
<hr>
<!-- Memaparkan maklumat pembeli -->
<h3>Maklumat Pembeli</h3>
<b>Nama Pembeli : </b><?PHP echo $_SESSION['nama_pembeli'];?><br>
<b>Nokp Pembeli : </b><?PHP echo $_SESSION['nokp_pembeli'];?><br>
<b>Notel Pembeli : </b><?PHP echo $_SESSION['notel_pembeli'];?><br>
<hr>
<!-- Memaparkan maklumat kereta yang dibeli -->
<h3>Maklumat Kereta</h3>
<b>No Plat Kereta : </b><?PHP echo $_GET['noplat'];?><br>
<b>Nama Kereta : </b><?PHP echo $_GET['jenis'];?><br>
<b>Model Kereta : </b><?PHP echo $_GET['nama_model'];?><br>
<b>Warna Kereta : </b><?PHP echo $_GET['warna'];?><br>
<b>Tahun Keluaran Kereta : </b><?PHP echo $_GET['tahun_keluaran'];?><br>
<b>Harga Awal Kereta : RM </b><?PHP echo $_GET['harga_awal'];?><br>
<hr>
<!-- Memaparkan maklumat Pembelian -->
<h3>Maklumat Pembelian</h3>
<b>Tarikh Pembelian : </b><?PHP echo $_GET['tarikh_pembelian'];?><br>
<b>Deposit : RM </b><?PHP echo $_GET['deposit'];?><br>
<b>Baki Bayaran : RM </b><?PHP echo $_GET['baki_bayaran'];?><br>
<hr>
</div>

<div class="w3-container w3-center w3-white">
<i>Terbang tinggi si helang buta</i><br>
<i>Hinggap sebentar ditepi perigi</i><br>
<i>kami kata "saya jual kereta"</i><br>
<i>Terima kasih jumpa lagi</i><br><br><br>