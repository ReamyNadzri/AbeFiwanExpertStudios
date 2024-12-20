<?php include ('header.php'); ?>

<div class="w3-row">
  <div class="w3-half w3-container">

<h2>User Login</h2>

<form action="" class="w3-container w3-round-xlarge w3-margin w3-card-4 w3-light-grey" method='POST'><br>
    <label>ID Numbers</label><input class="w3-input w3-border w3-round-large" type='text' name='customer_ID'><br>
    <label>Password</label><input class="w3-input w3-border w3-round-large" type='password' name='customerPass'><br>
<input class="w3-button w3-round-large w3-border" type='submit' value='Login'>
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
    $customer_ID=$_POST['customer_ID'];
    $customerPass=$_POST['customerPass'];

    # arahan SQL untuk mencari data dari jadual pembeli
    $arahan_sql_cari="select* 
    from customer 
    where customer_ID='$customer_ID' and customerPass='$customerPass'
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
        $_SESSION['customerName']=$rekod['customerName'];
        $_SESSION['customer_ID']=$rekod['customer_ID'];
        $_SESSION['customerTelNum']=$rekod['customerTelNum'];
        
        # mengarahkan fail index.php dibuka
        echo "<script>window.location.href='index.php';</script>";
    }
    else
    {
        # login gagal. kembali ke laman sebelumnya
        echo "<script>alert('Your IDs or password maybe incorrect! Try again :(');
        window.history.back();</script>";
    }
}
?>
<?PHP include ('footer.php'); ?>