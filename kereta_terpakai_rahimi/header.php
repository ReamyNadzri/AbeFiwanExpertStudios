<?PHP
session_start();
date_default_timezone_set("Asia/Kuala_Lumpur");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-ios.css">


  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>

<style>
.w3-tangerine {
  font-family: "Tangerine", serif;
}
w3-saya {
  font-family: "Comic Sans MS", cursive, sans-serif;
}
</style>
<body>

<!--------Tajuk -->

<div class="w3-blue w3-center">
 <img src='gambar/banner.png'>
</div>

<!--------Menu -->

<div class="w3-bar w3-indigo">
  <a href="index.php" class="w3-bar-item w3-button">Laman Utama</a>


<?PHP
if(empty($_SESSION['nama_pembeli']))
{
?>



  <div class="w3-dropdown-hover">
    <button class="w3-button">Ahli</button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <a href="pembeli_daftar.php" class="w3-bar-item w3-button">Daftar Pembeli Baru</a>
      <a href="pembeli_login.php" class="w3-bar-item w3-button">Daftar Masuk</a>
    </div>
  </div>

<?PHP
}
else
{
?>

  <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>


<?PHP
}
?>
</div>
