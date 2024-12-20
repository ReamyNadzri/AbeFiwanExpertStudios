<?php
# Memanggil fail header_admin.php
include ('header_admin.php');
# Memanggil fail connection dari folder luaran
 # memanggil fail connection
 include ('connection.php');

 # memanggil fail connection
 include ('../connection.php');

if(empty($_GET['id'])){
  die("<script>alert('We detected that you trying to by passed the login form. Access Denied!');window.location.href='error401.php';</script>");
}

?>




<!DOCTYPE html>
<title>Laman Utama Admin</title>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-ios.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <link rel="stylesheet" href="https://bootstrapmade.com/assets/css/demo.css?v=5.3">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

</head>

<?PHP 


# -----------------------------------------------------------------------------
# arahan SQL untuk mencari bilangan kereta yang ada yang pernah berdaftar (jadual kereta)
$arahan_sql_bilkereta="select count(numPlate) as bil_kereta from car";
# Laksanakan arahan mencari bilangan kereta yang ada yang pernah berdaftar
$laksana_sql_bilkereta=mysqli_query($condb, $arahan_sql_bilkereta);
# pembolehubah $rekod_bilkereta mengambil data bilangan kereta yang pernah berdaftar
$rekod_bilkereta=mysqli_fetch_array($laksana_sql_bilkereta);
#------------------------------------------------------------------------------
# arahan SQL untuk mencari bilangan kereta yang telah ada di jual (jadual pembelian)
$arahan_sql_bilkeretajual="select count(numPlate) as bil_kereta from purchase";
# laksanakan arahan  mencari bilangan kereta yang telah ada di jual
$laksana_sql_bilkeretajual=mysqli_query($condb,$arahan_sql_bilkeretajual);
# pembolehubah $rekod_bilkeretajual mengambil data bilangan kereta yang telah dijual
$rekod_bilkeretajual=mysqli_fetch_array($laksana_sql_bilkeretajual);
# -----------------------------------------------------------------------------
# arahan SQL untuk mengira jumlah harga_awal kereta yang telah dijual
$arahan_sql_untung="select sum(initialPrice) as untung from car
where numPlate in(select numPlate from purchase)";
# laksanakan arahan mengira jumlah harga_awal kereta yang telah dijual
$laksana_sql_untung=mysqli_query($condb,$arahan_sql_untung);
# pemboleh ubah $rekod_untung mengambil data jumlah keuntungan
$rekod_untung=mysqli_fetch_array($laksana_sql_untung);
# -----------------------------------------------------------------------------
?>

<body
  style="background-image: none!important; background-color: white; scroll-behavior: smooth; overflow: scroll!important;">
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


  <!-- memaparkan maklumat hasil carian di atas 

  <div class="w3-container w3-round-xlarge" style="max-width:1110px">
    <div class="w3-container w3-panel w3-card-4 w3-round-xlarge w3-ios-blue"><br>

      <div class="inner-width">
        <div class="col text">
          <i class="fas fa-car-alt"></i>
          <div class="num">
            <?//PHP echo $rekod_bilkereta['bil_kereta']; ?>
          </div>
          Numbers of Cars
        </div>

        <div class="col">
          <i class="fas fa-cart-arrow-down"></i>
          <div class="num">
            <?//PHP echo $rekod_bilkeretajual['bil_kereta']; ?>
          </div>
          Sold
        </div>

        <div class="col">
          <i class="fas fa-pause"></i>
          <div class="num">
            <?//PHP echo $rekod_bilkereta['bil_kereta']-$rekod_bilkeretajual['bil_kereta']; ?>
          </div>
          Available
        </div>

        <div class="col">
          <i class="far fa-money-bill-alt"></i>
          <div class="num">
            <?//PHP echo $rekod_untung['untung']; ?>
          </div>
          Total Sale
          <br><br>
        </div>
      </div>
    </div>
    <br>
  </div>


  <script type="text/javascript">
    $(".num").counterUp({
      delay: 10,
      time: 1500
    });
  </script>
  -->


  <!-- Dashboard -->
  <header class="w3-container" style="padding: top 5px;">
    <h5><b><i class="fa fa-dashboard"></i> Admin Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16" style="background-color: #58508d!important">
        <div class="w3-left"><i class="fas fa-car w3-xxxlarge" style="padding-top: 10px;"></i></div>
        <div class="w3-right">
          <h2>
            <?PHP echo $rekod_bilkereta['bil_kereta']; ?>
          </h2>
        </div>
        <div class="w3-clear"></div>
        <h3>Total Cars</h3>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16" style="background-color: #bc5090!important">
        <div class="w3-left"><i class="fas fa-cart-arrow-down w3-xxxlarge" style="padding-top: 10px;"></i></div>
        <div class="w3-right">
          <h2>
            <?PHP echo $rekod_bilkeretajual['bil_kereta']; ?>
          </h2>
        </div>
        <div class="w3-clear"></div>
        <h3>Sold</h3>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16" style="background-color: #ff6361!important">
        <div class="w3-left"><i class="fas fa-pause w3-xxxlarge" style="padding-top: 10px;"></i></div>
        <div class="w3-right">
          <h2>
            <?PHP echo $rekod_bilkereta['bil_kereta']-$rekod_bilkeretajual['bil_kereta']; ?>
          </h2>
        </div>
        <div class="w3-clear"></div>
        <h3>Available</h3>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16" style="background-color: #ffa600!important">
        <div class="w3-left"><i class="far fa-money-bill-alt w3-xxxlarge" style="padding-top: 10px;"></i></div>
        <div class="w3-right">
          <h2>RM
            <?PHP echo $rekod_untung['untung']; ?>
          </h2>
        </div>
        <div class="w3-clear"></div>
        <h3>Total Sale</h3>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(".num").counterUp({
      delay: 10,
      time: 1500
    });
  </script>

  <div class="w3-container">
    <p>New Visitors</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
    </div>

    <p>New Users</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

    <p>Bounce Rate</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
    </div>
  </div>

  <hr>
  
  <!--
  <section id="clients" class="clients">
    <div class="container aos-init aos-animate" data-aos="zoom-in">

      <div class="clients-slider swiper swiper-initialized swiper-horizontal">
        <div class="swiper-wrapper align-items-center" id="swiper-wrapper-4677dc3b4c65e2b7" aria-live="off"
          style="transform: translate3d(-1587.2px, 0px, 0px); transition-duration: 0ms;">
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0"
            role="group" aria-label="1 / 8"><img src="sources/honda.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1"
            role="group" aria-label="2 / 8"><img src="sources/nissan.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 8">
            <img src="source/smitsubishi.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 8">
            <img src="sources/proton.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 8">
            <img src="sources/mercedes.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 8">
            <img src="sources/ford.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6" role="group" aria-label="7 / 8">
            <img src="sources/volvo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="7" role="group"
            aria-label="8 / 8"><img src="sources/mazda.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 8"><img
              src="sources/honda.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="2 / 8"><img
              src="sources/nissan.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 8"><img
              src="sources/mitsubishi.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 8"><img
              src="sources/proton.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide" data-swiper-slide-index="4" role="group" aria-label="5 / 8"><img
              src="sources/mercedes.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide" data-swiper-slide-index="5" role="group" aria-label="6 / 8"><img
              src="sources/ford.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide" data-swiper-slide-index="6" role="group" aria-label="7 / 8"><img
              src="sources/volvo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="7" role="group"
            aria-label="8 / 8">
            <img src="sources/mazda.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0"
            role="group" aria-label="1 / 8"><img src="sources/honda.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1"
            role="group" aria-label="2 / 8"><img src="sources/nissan.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 8">
            <img src="sources/mitsubishi.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 8">
            <img src="sources/proton.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 8">
            <img src="sources/mercedes.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 8">
            <img src="sources/ford.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6" role="group" aria-label="7 / 8">
            <img src="sources/volvo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="7" role="group" aria-label="8 / 8">
            <img src="sources/mazda.png" class="img-fluid" alt=""></div>
        </div>
        <div
          class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
          <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span
            class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
            aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet" tabindex="0"
            role="button" aria-label="Go to slide 8"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>

    </div>
  </section>
  -->

</body>

</html>