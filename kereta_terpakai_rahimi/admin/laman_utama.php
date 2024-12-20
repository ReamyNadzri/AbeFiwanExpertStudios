<!DOCTYPE html>
<title>Laman Utama Admin</title>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-ios.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
  </head>

<?PHP 
# Memanggil fail header_admin.php
include ('header_admin.php');
# Memanggil fail connection dari folder luaran
include ('../connection.php');

# -----------------------------------------------------------------------------
# arahan SQL untuk mencari bilangan kereta yang ada yang pernah berdaftar (jadual kereta)
$arahan_sql_bilkereta="select count(noplat) as bil_kereta from kereta";
# Laksanakan arahan mencari bilangan kereta yang ada yang pernah berdaftar
$laksana_sql_bilkereta=mysqli_query($condb,$arahan_sql_bilkereta);
# pembolehubah $rekod_bilkereta mengambil data bilangan kereta yang pernah berdaftar
$rekod_bilkereta=mysqli_fetch_array($laksana_sql_bilkereta);
#------------------------------------------------------------------------------
# arahan SQL untuk mencari bilangan kereta yang telah ada di jual (jadual pembelian)
$arahan_sql_bilkeretajual="select count(noplat) as bil_kereta from pembelian";
# laksanakan arahan  mencari bilangan kereta yang telah ada di jual
$laksana_sql_bilkeretajual=mysqli_query($condb,$arahan_sql_bilkeretajual);
# pembolehubah $rekod_bilkeretajual mengambil data bilangan kereta yang telah dijual
$rekod_bilkeretajual=mysqli_fetch_array($laksana_sql_bilkeretajual);
# -----------------------------------------------------------------------------
# arahan SQL untuk mengira jumlah harga_awal kereta yang telah dijual
$arahan_sql_untung="select sum(harga_awal) as untung from kereta
where noplat in(select noplat from pembelian)";
# laksanakan arahan mengira jumlah harga_awal kereta yang telah dijual
$laksana_sql_untung=mysqli_query($condb,$arahan_sql_untung);
# pemboleh ubah $rekod_untung mengambil data jumlah keuntungan
$rekod_untung=mysqli_fetch_array($laksana_sql_untung);
# -----------------------------------------------------------------------------
?>

<!-- memaparkan maklumat hasil carian di atas -->

<body>

<div class="w3-container w3-round-xlarge" style="max-width:1110px">
  <div class="w3-container w3-panel w3-card-4 w3-round-xlarge w3-ios-blue"><br>

    <div class="inner-width">
      <div class="col text">
        <i class="fas fa-car-alt"></i>
        <div class="num"> <?PHP echo $rekod_bilkereta['bil_kereta']; ?> </div>
        Bilangan Kereta
      </div>

      <div class="col">
          <i class="fas fa-cart-arrow-down"></i>
        <div class="num"> <?PHP echo $rekod_bilkeretajual['bil_kereta']; ?> </div>
        Telah Terjual
      </div>

      <div class="col">
        <i class="fas fa-pause"></i>
        <div class="num"><?PHP echo $rekod_bilkereta['bil_kereta']-$rekod_bilkeretajual['bil_kereta']; ?></div>
        Belum Terjual
      </div>

      <div class="col">
        <i class="far fa-money-bill-alt"></i>
        <div class="num"><?PHP echo $rekod_untung['untung']; ?></div>
        Jumlah Jualan
      </div>
    </div>
  </div>
  <br>
</div>


<script type="text/javascript">
  $(".num").counterUp({delay:10,time:1500});
</script>


</body>
</html>
