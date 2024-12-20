<?php
# Memulakan fungsi session
session_start();



?>


<!DOCTYPE html>
<html>
<title>AFAS Admin Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css">
<link href="https://fonts.cdnfonts.com/css/product-sans" rel="stylesheet">
<body style="font-family: 'Product Sans', sans-serif; background:white;">

<style>
  h1, h2, h3, h4, h5{
    font-family: 'Product Sans', sans-serif;
  }
  </style>

  <!--------Banner -->

  <div class="w3-row">
    <div class="w3-col w3-container" style="width:16%">
      <img class="w3-col w3-margin w3-row-padding" style="height:60px; width: 155px;" src='sources/logo.png'>
    </div>
    <div class="w3-col" style="width:80%; padding-top: 20px">
      <h2 style=" font-size: 35px;position:relative;bottom:10px">Admin<b>Dashboard</b></h2>
    </div>
    <div class="w3-col w3-container" style="width:10%"></div>
  </div>

  <!--------Tajuk -->



  <!--------Bar -->
<div style="background-color: #30A2FF">
  <div class="w3-bar w3-27374D" style="background-color: #30A2FF; font-weight: bold; margin:0 auto; width:80%;height:75px">
    <a href="mainpage.php?id=9956" class="w3-bar-item w3-button" style="width:16.66%;height:auto">
    <div class="w3-left"><i class="fas fa-home w3-xlarge" style="padding: 10px 0px;position:relative;right:2px;top:10px;height:60px"></i></div><br>
    MAIN PAGE</a>
    <div class="w3-dropdown-hover" style="width: 16.66%;">
      <button class="w3-button" style="width: 100%;">
      <div class="w3-left"><i class="fas fa-book w3-xlarge" style="padding: 10px 0px;;position:relative;right:-10px;top:10px;height:60px"></i></div><br>
      INFORMATION</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4" >
        <a href='car_info.php' class="w3-bar-item w3-button">CAR</a>
        <a href='buyer_info.php' class="w3-bar-item w3-button">CUSTOMER</a>
        <a href='purchase_info.php' class="w3-bar-item w3-button">PURCHASE</a>
        <a href='admin_info.php' class="w3-bar-item w3-button">ADMIN</a>
      </div>
    </div>
    <a href="analysis.php" class="w3-bar-item w3-button" style="width: 16.66%;">
    <div class="w3-left"><i class="fas fa-chart-line w3-xlarge" style="padding: 10px 0px;;position:relative;right:-4px;top:10px;height:60px"></i></div><br>
    MONTHLY SALES</a>
    <a href='car_data_upload.php' class="w3-bar-item w3-button" style="width: 16.66%;">
    <div class="w3-left"><i class="fas fa-paper-plane w3-xlarge" style="padding: 10px 0px;;position:relative;right:-8px;top:10px;height:60px"></i></div><br>
    DATA UPLOAD</a>

    <div class="w3-dropdown-hover" style="width: 16.66%;">
      <button class="w3-button" style="width: 100%;">
      <div class="w3-left"><i class="fas fa-cog w3-xlarge" style="padding: 10px 0px;;position:relative;right:-28px;top:10px;height:60px"></i></div><br>
      SETTING</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <input name='reSize1' type='button' class="w3-bar-item w3-button" value='&nbsp;Reset&nbsp;'
          onclick="resizeText(2)" />
        <input name='reSize' type='button' class="w3-bar-item w3-button" value='&nbsp;Zoom In&nbsp;'
          onclick="resizeText(1)" />
        <input name='reSize2' type='button' class="w3-bar-item w3-button" value='&nbsp;Zoom Out&nbsp;'
          onclick="resizeText(-1)" />
      </div>
    </div>
    <a href='logout.php' class="w3-bar-item w3-button" style="width: 16.66%;">
    <div class="w3-left"><i class="fas fa-lock w3-xlarge" style="padding: 10px 0px;position:relative;right:-30px;top:10px;height:60px"></i></div><br>
    LOG OUT</a>
  </div>
</div>

  <div style="margin-left:70px">
    <div style="margin-right:70px">


      <?PHP

# Menyemak nama fail semasa
$namafail = basename($_SERVER['PHP_SELF']);
# Menguji adakah fail semasa bukan index.php dan pembolehubah session tidak mempunyai nilai


# Jika pembolehubah session['adminName'] mempunyai nilai (not empty) bermaksud 
# admin telah login dan paparkan senarai menu utama
if(!empty($_SESSION['adminName']))
    {
        echo"
            |<a href='main_page.php'>Main Page</a> |
            <a href='car_info.php'>Car Information</a> |
            <a href='buyer_info.php'>Buyer</a> |
            <a href='purchase_info.php'>Purchase</a> |
            <a href='admin_info.php'>Admin</a> |
            <a href='analysis.php'>Analysis monthly sale</a> |
            <a href='car_data_upload.php'>Car data upload</a> |
            <a href='logout.php'>logout</a> | Change the font size |
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
          if (multiplier == 2) {
            elem.style.fontSize = "1em";
          } else {
            elem.style.fontSize = (parseFloat(currentSize) + (multiplier * 0.2)) + "em";
          }
        }
      </script>
      <hr>