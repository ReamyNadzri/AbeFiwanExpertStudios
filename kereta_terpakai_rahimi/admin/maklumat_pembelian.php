<?PHP
# Memanggil fail header_admin.php
include ('header_admin.php');
# Memanggil fail connection dari folder luaran
include ('../connection.php');

# arahan SQL mencari kereta yang masih belum dijual
$arahan_sql_cari="select* from pembeli,pembelian,kereta,model
where pembelian.nokp_pembeli=pembeli.nokp_pembeli AND
pembelian.noplat=kereta.noplat and
kereta.id_model=model.id_model";
# arahan SQL mencari kereta yang masih belum dijual
$laksana_sql_cari=mysqli_query($condb,$arahan_sql_cari);
?>
<!-- menyediakan header bagi jadual -->
<h4>Senarai Pembeli Kereta</h4>
<table class="w3-table-all" id='saiz' border='1'>
    <tr class="w3-light-blue">
        <td>Bil</td>
        <td>Nama</td>
        <td>No KP</td>
        <td>No Telefon</td>
        <td>No Plat</td>
        <td>Nama Kereta</td>
        <td>Model</td>
        <td>Warna</td>
        <td>Tahun Keluaran</td>
        <td>Harga Awal</td>
        <td>Tarikh Pembelian</td>
        <td>Deposit</td>
        <td>Baki Bayaran</td>
        
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
            <td>".$rekod['noplat']."</td>
            <td>".$rekod['jenis']."</td>
            <td>".$rekod['nama_model']."</td>
            <td>".$rekod['warna']."</td>
            <td>".$rekod['tahun_keluaran']."</td>
            <td>".$rekod['harga_awal']."</td>
            <td>".$rekod['tarikh_pembelian']."</td>
            <td>".$rekod['deposit']."</td>
            <td>".$rekod['baki_bayaran']."</td>
        </tr>";
    }
    ?>
</table>