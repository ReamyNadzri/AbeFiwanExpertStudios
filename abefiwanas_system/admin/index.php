<?php
# Memulakan fungsi session
session_start();



?>


<!DOCTYPE html>
<html>
<title>AFAS Admin Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-center w3-red">
  <h5>ABE FIWAN AUTO SALES 2019 @ 2023</h5>
</div>
<br>

<div class="w3-container w3-center w3-middle">
  <img src="../sources/admin.png" style="max-width:800px">

  <h2>WARNING!</h2>
  <h4>Now you in admin AFAS site.</h4>
  <h4>Please enter your information down below.</h4><br>

  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-red w3-large w3-round-large">Login</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

    
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">&times;</span>
        <img src="sources/admin.jpg" alt="Avatar" style="width:100px;" class="w3-circle w3-border w3-margin-top">
      </div>

      <form class="w3-containter w3-center w3-round-large" action='' method='POST'><br>
        <b>Admin ID</b> <input type='text' name='admin_ID'><br><br>

        <b>Password</b> <input type='password' name='adminPass'><br><br>
        <input type='submit' class="w3-center w3-round-large w3-button w3-bar w3-red" value='Login'><br>
        <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember My ID <br><br>
      </form>

    </div>
  </div>
</div>
<br>
<br>

<br>
<br>
    <footer class="w3-container w3-red w3-center">
      <h5>ABE FIWAN AUTO SALES 2019 @ 2023</h5>
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
        $_SESSION['adminid']=$rekod['admin_ID'];
        $_SESSION['adminPass']=$rekod['adminPass'];
        
        
        # mengarahkan fail laman_utama.php dibuka
        echo "<script>window.location.href='mainpage.php';</script>";
    }
    else
    {
        # login gagal. kembali ke laman sebelumnya
        echo "<script>alert('Login Failure');
      </script>";
    }
}    
?>
  <?PHP include ('footer.php'); ?>
<!--
  <div class="container my-auto">
    <div class="row">
      <div class="col-lg-4 col-md-8 col-12 mx-auto">
        <div class="card z-index-0 fadeIn3 fadeInBottom">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1" style="background-color: #F24C3D">
              <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
              <div class="row mt-3">
                <div class="col-2 text-center ms-auto">
                  <a class="btn btn-link px-3" href="javascript:;">
                    <i class="fa fa-facebook text-white text-lg" aria-hidden="true"></i>
                  </a>
                </div>
                <div class="col-2 text-center px-1">
                  <a class="btn btn-link px-3" href="javascript:;">
                    <i class="fa fa-github text-white text-lg" aria-hidden="true"></i>
                  </a>
                </div>
                <div class="col-2 text-center me-auto">
                  <a class="btn btn-link px-3" href="javascript:;">
                    <i class="fa fa-google text-white text-lg" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form role="form" class="text-start">
              <div class="input-group input-group-outline my-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control">
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control">
              </div>
              <div class="form-check form-switch d-flex align-items-center mb-3">
                <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
              </div>
              <div class="text-center">
                <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
              </div>
              <p class="mt-4 text-sm text-center">
                Don't have an account?
                <a href="../pages/sign-up.html" class="text-primary text-gradient font-weight-bold">Sign up</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
-->
</body>