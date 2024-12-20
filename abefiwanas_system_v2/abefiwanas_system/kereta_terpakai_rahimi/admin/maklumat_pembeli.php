<?PHP
# Memanggil fail header_admin.php
include ('header_admin.php');
# Memanggil fail connection dari folder luaran
include ('../connection.php');

# arahan SQL mencari kereta yang masih belum dijual
$arahan_sql_cari="select* from pembeli";
# Melaksanakan arahan SQL mencari kereta yang masih belum dijual
$laksana_sql_cari=mysqli_query($condb,$arahan_sql_cari);
?>
<!-- menyediakan header bagi jadual -->
<h4>Senarai Pembeli Kereta</h4>
<table class="w3-table-all" id='saiz' border='1'>
    <tr class="w3-light-blue">
        <td>Bil</td>
        <td>Pembeli</td>
        <td>No KP</td>
        <td>No Telefon</td>
        <td>Kata Laluan</td>
        <td></td>
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
            <td>".$rekod['nama_pembeli']."</td>
            <td>".$rekod['nokp_pembeli']."</td>
            <td>".$rekod['notel_pembeli']."</td>
            <td>".$rekod['katalaluan']."</td>
            <td><a href='hapus.php?jadual=pembeli&medan_kp=nokp_pembeli&kp=".$rekod['nokp_pembeli']."' onClick=\"return confirm('Anda pasti ingin padam data ini?')\" >Hapus</a></td>
        </tr>";
    }
    ?>
</table>