<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-center w3-red">
  <h5>AUTO USED CAR RAHIMI 2019 @ 2020</h5>
</div>
<br>

<div class="w3-container w3-center w3-middle">
  <img src="../gambar/logo_resit.png" style="max-width:230px">
  <img src="../gambar/adminpage2.png" style="max-width:250px">
  <h2>WARNING!</h2>
  <h4>Now you in admin AUCaR site.</h4>
  <h4>Please enter your information down below.</h4><br>

  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-red w3-large w3-round-large">Daftar Masuk</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

    
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">&times;</span>
        <img src="../gambar/adminpage2.png" alt="Avatar" style="width:40%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-containter w3-center w3-round-large" action='' method='POST'><br>
        <b>No Kad Pengenalan</b> <input type='text' name='nokp'><br><br>

        <b>Kata Laluan</b> <input type='password' name='katalaluan'><br><br>
        <input type='submit' class="w3-center w3-round-large w3-button w3-bar w3-light-blue" value='Daftar Masuk'><br>
        <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Ingat No KP Saya <br><br>
      </form>

    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
    <footer class="w3-container w3-red w3-center">
      <h5>AUTO USED CAR RAHIMI 2019 @ 2020</h5>
    </footer>
  </div>
</div>
</body>
</html>



<?PHP 
# menyemak kewujudan data POST
if (!empty($_POST))
{
    # memanggil fail connection
    include ('connection.php');

    # memanggil fail connection
    include ('../connection.php');

    # mengambil data POST
    $admin_ID=$_POST['admin_ID'];
    $adminPass=$_POST['adminPass'];

    # arahan SQL untuk mencari data dari jadual admin
    $arahan_sql_cari="select* 
    from admin 
    where admin_ID='$admin_ID' and adminPass='$adminPass'
    limit 1 ";

    # melaksanakan proses carian 
    $laksana_arahan=mysqli_query($condb,$arahan_sql_cari);

    # jika terdapat 1 baris rekod di temui
    if(mysqli_num_rows($laksana_arahan)==1)
    {
        # login berjaya

        # pembolehubah $rekod mengambil data yang di temui semasa proses mencari
        $rekod=mysqli_fetch_array($laksana_arahan);

        #mengumpukkan kepada pembolehubah session
        $_SESSION['admin_ID']=$rekod['admin_ID'];
        $_SESSION['adminPass']=$rekod['adminPass'];
        
        # mengarahkan fail laman_utama.php dibuka
        echo "<script>window.location.href='main_page.php';</script>";
    }
    else
    {
        # login gagal. kembali ke laman sebelumnya
        echo "<script>alert('Login Failure');
      </script>";
    }
}    
?>