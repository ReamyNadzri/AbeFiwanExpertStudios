<!-- Memanggil fail header_admin.php -->
<?PHP include ('header_admin.php'); ?>
<!-- menyediakan borang untuk mengemaskini data admin-->
<form action='' method='POST'>
Nama Admin <input type='text' name='nama_baru' value='<?PHP echo $_GET['nama']; ?>'><br>
No KP Admin <input type='text' name='nokp_baru' value='<?PHP echo $_GET['nokp']; ?>'><br>
No Tel Admin <input type='text' name='notel_baru' value='<?PHP echo $_GET['notel']; ?>'><br>
Kata Laluan Admin <input type='password' name='katalaluan_baru' value='<?PHP echo $_GET['katalaluan']; ?>'><br>
<input class="w3-button w3-light-blue" type='submit' value='Kemas Kini'>
</form>

<?PHP 
# menyemak kewujudan data POST
if(!empty($_POST))
{
    # Memanggil fail connection dari folder luaran
    include ('../connection.php');

    # mengambil data POST
    $nama_baru=$_POST['nama_baru'];
    $nokp_baru=$_POST['nokp_baru'];
    $notel_baru=$_POST['notel_baru'];
    $katalaluan_baru=$_POST['katalaluan_baru'];
    $nokp_lama=$_GET['nokp'];

    # Arahan untuk mengemaskini data ke dalam jadual admin
    $arahan_sql_update="update admin set 
    nama_admin='$nama_baru',
    nokp_admin='$nokp_baru',
    notel_admin='$notel_baru',
    katalaluan='$katalaluan_baru'
    where
    nokp_admin='$nokp_lama'";

    # melaksanakan proses mengemaskini dalam syarat IF
    if(mysqli_query($condb,$arahan_sql_update))
    {
        # peroses mengemaskini berjaya.
        echo "<script>alert('Kemaskini Berjaya');
        window.location.href='maklumat_admin.php';
        </script>";
    }
    else
    {
        # proses mengemaskini gagal
        echo "<script>alert('Kemaskini gagal');
        window.history.back();</script>";
    }
}

?>