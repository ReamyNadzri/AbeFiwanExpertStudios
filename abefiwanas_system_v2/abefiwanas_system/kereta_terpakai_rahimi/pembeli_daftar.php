<!--Memanggil fail header-->
<?PHP include('header.php'); ?>

<!--Menyediakan form bagi daftar pengguna baru-->

<div class="w3-row w3-light-blue">
  <div class="w3-half w3-container w3-light-blue">

<p><h4>Daftar Pembeli Baru</h4></p>
<form action="" class="w3-container w3-round-xlarge w3-margin w3-card-4 w3-light-grey" method='POST'><br>
Nama Penuh <input class="w3-input w3-border w3-round-large" type='text' name='nama' required autofocus><br>
No.KP  <input class="w3-input w3-border w3-round-large" type='text' name='nokp' placeholder='cth: 123456789012' pattern= '[0-9]{12}'
oninvalid='this.setCustomValidity("Sila masukkan 12 digit nombor sahaja")'
oninput='thisCustomValidity("")'
required><br>
No.Telefon <input class="w3-input w3-border w3-round-large" type='text' name='notel'><br>
Kata Laluan <input class="w3-input w3-border w3-round-large" type='password' name='katalaluan'><br>
<input class="w3-button w3-round-large w3-border" type='submit' value='Daftar Pengguna'></P>
</form> 

<div class="w3-margin w3-card-4 w3-half w3-container w3-border w3-round-large w3-light-grey">
<h5>Dapatkan promosi dan potongan harga dengan menggunakan code A21 dengan 5% off</h4>
</div>
<br>
<br>
</div>
</div>
<br>



<?PHP 
# menyemak kewujudan data POST
if (!empty($_POST))
{
    # memanggil fail connection
    include ('connection.php');

    # mengambil data POST
    $nama=$_POST['nama'];
    $notel=$_POST['notel'];
    $nokp=$_POST['nokp'];
    $katalaluan=$_POST['katalaluan'];

    # -- data validation --
    if(empty($nama) or empty($notel) or empty($nokp) or empty($katalaluan))
    {
        die("<script>alert('Lengkapkan maklumat yang dikehendaki.');
        window.history.back();</script>");
    }

    # --- data validation
    if(strlen($nokp)!=12 or !is_numeric($nokp))
    {
        die("<script>alert('Ralat pada nokp');
        window.history.back();</script>");
    }
 
    # arahan SQL untuk menyimpan data
    $arahan_sql_simpan="insert into pembeli
    (nama_pembeli,nokp_pembeli,notel_pembeli,katalaluan)
    values
    ('$nama','$nokp','$notel','$katalaluan')";

    # melaksanakan proses menyimpan dalam syarat IF
    if(mysqli_query($condb,$arahan_sql_simpan))
    {
        # jika proses menyimpan berjaya. papar info dan buka laman pembeli_login.php
        echo "<script>alert('Pendaftaran Berjaya');
        window.location.href='pembeli_login.php';</script>";
    }
    else
    {
        # jika proses menyimpan gagal, kembali ke laman sebelumnya
        echo "<script>alert('Pendaftaran gagal');
        window.history.back();</script>";
    }
}
?>
<div class="w3-container w3-white">
<?PHP include ('footer.php'); ?>
</div>