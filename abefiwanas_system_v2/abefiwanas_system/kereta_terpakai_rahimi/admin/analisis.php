<?PHP
# Memanggil fail header_admin.php
include ('header_admin.php');
# Memanggil fail connection dari folder luaran
include ('../connection.php');

# menyemak kewujudan data POST
if(!empty($_POST))
{
    $tambahan="AND tarikh_pembelian like '%".$_POST['bulan']."%'";
}
else
{
    $tambahan=" ";
}

# arahan SQL untuk mencari data penjualan mengikut bulan
$arahan_sql_cari="select* from pembeli,pembelian,kereta,model
where pembelian.nokp_pembeli=pembeli.nokp_pembeli AND
pembelian.noplat=kereta.noplat and
kereta.id_model=model.id_model AND
pembelian.noplat=kereta.noplat $tambahan";

# melaksanakan arahan SQL mencari data penjualan
$laksana_sql_cari=mysqli_query($condb,$arahan_sql_cari);
?>

<!-- Menyediakan form untuk memilih bulan-->
<h4>Senarai Pembeli Kereta</h4>
<form class="w3-container w3-light-blue w3-input" action='' method='POST'>
<select name='bulan'>
    <option value selected disabled>Pilih Bulan tarikh masuk</option>
    <option value='-01-'>Januari</option>
    <option value='-02-'>Februari</option>
    <option value='-03-'>Mac</option>
    <option value='-04-'>April</option>
    <option value='-05-'>Mei</option>
    <option value='-06-'>Jun</option>
    <option value='-07-'>Julai</option>
    <option value='-08-'>Ogos</option>
    <option value='-09-'>September</option>
    <option value='-10-'>Oktober</option>
    <option value='-11-'>November</option>
    <option value='-12-'>Disember</option>
</select>
<input class="w3-button w3-round-xlarge w3-green" type='submit' value='cari'>
<br><br>
</form>

<!-- menyediakan header untuk jadual yang hendak memaparkan data yang dicari -->

<table class="w3-table-all" id='saiz' border='1'>
    <tr class="w3-light-blue">
        <td>Bil</td>
        <td>Nama</td>
        <td>No KP</td>
        <td>No Tel</td>
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
    # pembolehubah $rekod mengambil data yang dicari
    while ($rekod=mysqli_fetch_array($laksana_sql_cari))
    {
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