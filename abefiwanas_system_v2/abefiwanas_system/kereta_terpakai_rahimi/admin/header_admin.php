<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

<!--------Banner -->

<div class="w3-row">
  <div class="w3-col w3-container" style="width:30%"><img src="../gambar/adminpage.png">
  </div>
  <div class="w3-col" style="width:60%"><h2>Administrator Preview</h2></div>
  <div class="w3-col w3-container" style="width:10%"></div>
</div>

<!--------Tajuk -->



<!--------Bar -->

<div class="w3-bar w3-blue">
<a href="laman_utama.php" class="w3-bar-item w3-button">Laman Utama</a>
  <div class="w3-dropdown-hover">
    <button class="w3-button">Maklumat</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
    <a href='maklumat_kereta.php' class="w3-bar-item w3-button">Kereta</a>
            <a href='maklumat_pembeli.php' class="w3-bar-item w3-button">Pembeli</a>
            <a href='maklumat_pembelian.php' class="w3-bar-item w3-button">Pembelian</a>
            <a href='maklumat_admin.php' class="w3-bar-item w3-button">Admin</a>
    </div>
  </div>
  <a href="analisis.php" class="w3-bar-item w3-button">Analisis Jualan Bulanan</a>
  <a href='upload_data_kereta.php' class="w3-bar-item w3-button">Upload Data Kereta</a> 
            <a href='logout.php' class="w3-bar-item w3-button">Logout</a>

    <div class="w3-dropdown-hover">
    <button class="w3-button">Setting</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <input  name='reSize1' type='button' class="w3-bar-item w3-button" value=' Reset' onclick="resizeText(2)" />
            <input  name='reSize' type='button' class="w3-bar-item w3-button" value='&nbsp;Besarkan&nbsp;' onclick="resizeText(1)" />
            <input  name='reSize2' type='button' class="w3-bar-item w3-button" value='&nbsp;Kecilkan&nbsp;' onclick="resizeText(-1)" />
</div>
</div>
</div>


<div style="margin-left:70px">

<div class="w3-container">
<h2>Selamat Datang ke Halaman Admin</h2>
<p>ADMIN APPOVED.</p>
<?PHP
# Memulakan fungsi session
session_start();

# Menyemak nama fail semasa
$namafail = basename($_SERVER['PHP_SELF']);
# Menguji adakah fail semasa bukan index.php dan pembolehubah session tidak mempunyai nilai


# Jika pembolehubah session['nama_admin'] mempunyai nilai (not empty) bermaksud 
# admin telah login dan paparkan senarai menu utama
if(!empty($_SESSION['nama_admin']))
    {
        echo"
            |<a href='laman_utama.php'>Laman Utama</a> |
            <a href='maklumat_kereta.php'>maklumat kereta</a> |
            <a href='maklumat_pembeli.php'>maklumat pembeli</a> |
            <a href='maklumat_pembelian.php'>maklumat pembelian</a> |
            <a href='maklumat_admin.php'>maklumat admin</a> |
            <a href='analisis.php'>analisis jualan bulanan</a> |
            <a href='upload_data_kereta.php'>upload data kereta</a> |
            <a href='logout.php'>logout</a> | ubah saiz tulisan | 
            <input  name='reSize1' type='button' value='reset' onclick=\"resizeText(2)\" />
            <input  name='reSize' type='button' value='&nbsp;+&nbsp;' onclick=\"resizeText(1)\" />
            <input  name='reSize2' type='button' value='&nbsp;-&nbsp;' onclick=\"resizeText(-1)\" />
            ";
    }
?>
<!-- Fungsi resizeText - tujuan fungsi untuk membesarkan saiz tulisan menggunakan id='saiz' -->
<script>
function resizeText(multiplier) {
    var elem = document.getElementById("saiz");
    var currentSize = elem.style.fontSize || 1;
    if(multiplier==2)
    {
        elem.style.fontSize = "1em";
    } 
    else 
    {
    elem.style.fontSize = ( parseFloat(currentSize) + (multiplier * 0.2)) + "em";
    }
}
</script>
<hr>