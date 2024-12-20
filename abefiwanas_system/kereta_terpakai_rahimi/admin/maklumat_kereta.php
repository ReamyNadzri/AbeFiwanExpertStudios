<?PHP
# Memanggil fail header_admin.php
include ('header_admin.php');
# Memanggil fail connection dari folder luaran
include ('../connection.php');

#----------- Bahagian 2 : Proses penyimpan data-------
# Menyemak kewujudan data POST
if(!empty($_POST))
{
    # mengambil data POST
    $noplat=$_POST['noplat'];
    $nama_kereta=$_POST['nama_kereta'];
    $id_model=$_POST['id_model'];
    $warna_kereta=$_POST['warna_kereta'];
    $tahun_keluaran=$_POST['tahun_keluaran'];
    $harga_awal=$_POST['harga_awal'];
    # Arahan untuk menyimpan data ke dalam jadual kereta
    $arahan_sql_simpan="insert into kereta
    values
    ('$noplat','$nama_kereta','$warna_kereta','$tahun_keluaran','$harga_awal','$id_model')";

    # melaksanakan proses menyimpan dalam syarat IF
    if(mysqli_query($condb,$arahan_sql_simpan))
    {
        # proses menyimpan data berjaya. papar mesej
        echo "<script>alert('Pendaftaran Berjaya');</script>";
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
$arahan_sql_cari="select* from kereta,model where kereta.noplat not in (select noplat from pembelian) and kereta.id_model=model.id_model";
# melaksanakan arahan sql cari tersebut
$laksana_sql_cari=mysqli_query($condb,$arahan_sql_cari);
?>
<!-- menyediakan header bagi jadual -->
<!-- selepas header akan diselitkan dengan borang untuk mendaftar kereta baru -->
<h4>Senarai Kereta yang belum di Jual</h4>
<table class="w3-table-all" id='saiz' border='1'>
    <tr class="w3-light-blue">
        <td>Bil</td>
        <td>No Plat</td>
        <td>Nama Kereta</td>
        <td>Model</td>
        <td>Warna Kereta</td>
        <td>Tahun Keluaran Kereta</td>
        <td>Harga Awal Kereta</td>
        <td></td>
    </tr>
    <tr>
    <!-- menyediakan borang untuk mendaftar kereta baru -->
    <form action='' method='POST'>
        <td>#</td>
        <td><input type='text' name='noplat'></td>
        <td><input type='text' name='nama_kereta'></td>
        <td>
        <!-- menghasilkan drop down yg dinamik (mengambil data dari jadual) -->
        <select name='id_model' required>
                <option disabled selected value>Pilih kategori</option>
                <?PHP
                
                # arahan mencari data dari jadual model 
                $arahan_sql_carimodel= "SELECT* from model";
                # melaksanakan arahan mencari tersebut
                $laksana_sql_carimodel=mysqli_query($condb,$arahan_sql_carimodel);
                # pembolehubah $rekod_model mengambil data baris demi bari 
                while($rekod_model=mysqli_fetch_array($laksana_sql_carimodel))
                {
                    # memaparkan nilai pemboleh ubah $rekod_model['nama_model'] dalam bentuk dropdown list
                    echo"<option value='".$rekod_model['id_model']."'>
                    ".$rekod_model['nama_model']."</option>";        
                }
                ?>
            </select>       
        </td>
        <td><input type='text' name='warna_kereta'></td>
        <td><input type='text' name='tahun_keluaran'></td>
        <td><input type='text' name='harga_awal'></td>
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
            <td>".$rekod['noplat']."</td>
            <td>".$rekod['jenis']."</td>
            <td>".$rekod['nama_model']."</td>
            <td>".$rekod['warna']."</td>
            <td>".$rekod['tahun_keluaran']."</td>
            <td>".$rekod['harga_awal']."</td>
            <td><a href='hapus.php?jadual=kereta&medan_kp=noplat&kp=".$rekod['noplat']."' onClick=\"return confirm('Anda pasti ingin padam data ini?')\" >Hapus</a></td>
        </tr>";
    }
    ?>
</table>