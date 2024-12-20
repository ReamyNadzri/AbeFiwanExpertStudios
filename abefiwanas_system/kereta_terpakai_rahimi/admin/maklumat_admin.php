<?PHP 
# Memanggil fail header_admin.php
include ('header_admin.php');
# Memanggil fail connection dari folder luaran
include ('../connection.php');

#----------- Bahagian 2 : Proses penyimpan data-------
# Menyemak kewujudan data POST
if(!empty($_GET))
{   # mengambil data POST
    $nama=$_GET['nama'];
    $nokp=$_GET['nokp'];
    $notel=$_GET['notel'];
    $katalaluan=$_GET['katalaluan'];
    
    # data validation - adakah data POST yang diambil empty
    if(empty($nama) or empty($notel) or empty($nokp) or empty($katalaluan))
    {
        die("<script>alert('Lengkapkan maklumat yang dikehendaki.');
        window.history.back();</script>");
    }

    # data validation - format nokp betul atau tidak
    if(strlen($nokp)!=12 or !is_numeric($nokp))
    {
        die("<script>alert('Ralat pada nokp');
        window.history.back();</script>");
    }

    # Arahan untuk menyimpan data ke dalam jadual admin
    $arahan_sql_simpan="insert into admin
    (nama_admin,nokp_admin,notel_admin,katalaluan)
    values
    ('$nama','$nokp','$notel','$katalaluan')";

    # melaksanakan proses menyimpan dalam syarat IF
    if(mysqli_query($condb,$arahan_sql_simpan))
    {
        # proses menyimpan data berjaya. papar mesej
        echo "<script>alert('Pendaftaran Berjaya');
        window.location.href='maklumat_admin.php';
        </script>";
    }
    else
    {
        # proses menyimpan data gagal. papar mesej
        echo "<script>alert('Pendaftaran gagal');
        window.history.back();</script>";
    }
}
# ----------- bahagian 1 : memaparkan data dalam bentuk jadual
    # arahan SQL mencari kereta yang masih belum dijual
    $arahan_sql_cari="select* from admin";
    # melaksanakan arahan sql cari tersebut    
    $laksana_sql_cari=mysqli_query($condb,$arahan_sql_cari);
?>
<!-- menyediakan header bagi jadual -->
<!-- selepas header akan diselitkan dengan borang untuk mendaftar kereta baru -->
<h4>Senarai administrator</h4>
<table class="w3-table-all" id='saiz' border='1'>
    <tr class="w3-light-blue">
        <td>Bil</td>
        <td>nama_admin</td>
        <td>nokp_admin</td>
        <td>notel_admin</td>
        <td>katalaluan_admin</td>
        <td></td>
    </tr>
    <tr>
    <!-- menyediakan borang untuk mendaftar kereta baru -->
    <form action='' method='GET'>
        <td>#</td>
        <td><input type='text' name='nama'></td>
        <td><input type='text' name='nokp'></td>
        <td><input type='text' name='notel'></td>
        <td><input type='password' name='katalaluan'></td>
        <td><input type='submit' value='simpan'></td>
    </form>
    </tr>
    <?PHP 
    $bil=0;
    # pemboleh ubah $rekod mengambail semua data yang ditemui oleh $laksana_sql_cari
    while ($rekod=mysqli_fetch_array($laksana_sql_cari))
    {
        # sistem akan memaparkan data $rekod baris demi baris sehingga habis
        echo "
        <tr>
            <td>".++$bil."</td>
            <td>".$rekod['nama_admin']."</td>
            <td>".$rekod['nokp_admin']."</td>
            <td>".$rekod['notel_admin']."</td>
            <td>".$rekod['katalaluan']."</td>
            <td>| <a href='hapus.php?jadual=admin&medan_kp=nokp_admin&kp=".$rekod['nokp_admin']."' onClick=\"return confirm('Anda pasti ingin padam data ini?')\" >Hapus</a> |
                | <a href='kemaskini_admin.php?nama=".$rekod['nama_admin']."&nokp=".$rekod['nokp_admin']."&notel=".$rekod['notel_admin']."&katalaluan=".$rekod['katalaluan']."' onClick=\"return confirm('Anda pasti ingin mengubahsuai data ini?')\" >Kemaskini</a> |</td>
        </tr>";
    }
    ?>
</table>