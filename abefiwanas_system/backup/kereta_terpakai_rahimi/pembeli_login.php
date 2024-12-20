<!--Memanggil fail header-->
<?PHP include('header.php'); ?>

<!--Menyediakan form bagi daftar masuk pengguna baru-->

<div class="w3-row w3-light-blue">
  <div class="w3-half w3-container w3-light-blue w3-">

<h4>Daftar Masuk Pembeli</h4>

<form action='' class="w3-container w3-round-xlarge w3-margin w3-card-3 w3-light-grey" method='POST'>
<br>
    <label>No.KP</label><input class="w3-input w3-border w3-round-large" type='text' name='nokp'><br>
    <label>Kata Laluan</label><input class="w3-input w3-border w3-round-large" type='password' name='katalaluan'><br>
<input class="w3-button w3-round-large w3-border" type='submit' value='Daftar Masuk'>
<br><br>
</form>
</div>
</div>

<div class="w3-half">
</div>



<?PHP 
# menyemak kewujudan data POST
if (!empty($_POST))
{
    # memanggil fail connection
    include ('connection.php');

    # mengambil data POST
    $nokp=$_POST['nokp'];
    $katalaluan=$_POST['katalaluan'];

    # arahan SQL untuk mencari data dari jadual pembeli
    $arahan_sql_cari="select* 
    from pembeli 
    where nokp_pembeli='$nokp' and katalaluan='$katalaluan'
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
        $_SESSION['nama_pembeli']=$rekod['nama_pembeli'];
        $_SESSION['nokp_pembeli']=$rekod['nokp_pembeli'];
        $_SESSION['notel_pembeli']=$rekod['notel_pembeli'];
        
        # mengarahkan fail index.php dibuka
        echo "<script>window.location.href='index.php';</script>";
    }
    else
    {
        # login gagal. kembali ke laman sebelumnya
        echo "<script>alert('login gagal');
        window.history.back();</script>";
    }
}
?>
<div class="w3-container">
<?PHP include ('footer.php'); ?>
</div>