<?PHP
# Memanggil fail header_admin.php
include ('header_admin.php');
# Memanggil fail connection dari folder luaran
include ('../connection.php');

# arahan SQL mencari kereta yang masih belum dijual
$arahan_sql_cari="select* from customer";
# Melaksanakan arahan SQL mencari kereta yang masih belum dijual
$laksana_sql_cari=mysqli_query($condb,$arahan_sql_cari);
?>
<!-- menyediakan header bagi jadual -->
<h4>Customer List</h4>
<table class="w3-table-all" id='saiz' border='1'>
    <tr class="w3-light-blue">
        <td>Bil</td>
        <td>Customer</td>
        <td>ID</td>
        <td>Phone Number</td>
        <td>Password</td>
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
            <td>".$rekod['customerName']."</td>
            <td>".$rekod['customer_ID']."</td>
            <td>".$rekod['customerTelNum']."</td>
            <td>".$rekod['customerPass']."</td>
            <td><a href='hapus.php?jadual=customer&medan_kp=customer_ID&kp=".$rekod['customer_ID']."' onClick=\"return confirm('Confirm delete this item??')\" >Delete</a></td>
        </tr>";
    }
    ?>
</table>
<br>
<br>
<br>