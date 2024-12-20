<?PHP 
# Memanggil fail header
include('header.php');
?>

<!--------Borang -->
<div class="w3-row ">
  <div class="w3-col w3-light-blue" style="width:20%"><br><br><br><br><br><br><br><br><br><br><br></div>
    <div class="w3-col w3-light-blue" style="width:60%">
        <div class="w3-col w3-light-blue">
    
        <form class="w3-container w3-round-large w3-margin w3-card-4 w3-light-grey" method='GET' action='pembelian_senarai.php'> 
         <h3>Carian:</h3>    
          <label>Jenama</label>
          <input class="w3-input w3-round-large w3-border" type="text" name='model'></p>
         <input class="btn3 w3-button w3-bar w3-round-large w3-light-blue" type ="submit" value="cari"><br><br><br>
        </form>
 
        </div>
    </div>
  <div class="w3-col w3-container w3-light-blue" style="width:20%"><br><br><br><br><br><br><br><br><br><br><br></div>
</div>


<br>
<?PHP



# menyemak kewujudan data GET yang dihantar dari fail index
if(!empty($_GET['model']))
{
    # memanggil fail connection
    include ('connection.php');

    # mengambil data GET
    $model=$_GET['model'];

    # arahan mencari data dari jadual kereta yang tidak wujud di jadual pembelian
    $arahan_sql_cari="select* from kereta,model where
    kereta.noplat not in(select noplat from pembelian)
    and kereta.id_model=model.id_model
    and (kereta.jenis like '%".$model."%' 
    or model.nama_model like '%".$model."%' )";

    # melaksanakan proses carian 
    $laksana_arahan=mysqli_query($condb,$arahan_sql_cari);

    # jika terdapat data yang ditemui
    if(mysqli_num_rows($laksana_arahan)>0)
    {
        # papar header kepada jadual
        echo "
        <div>
        
        <table border='1' width='90%'>
        <tr>
            <th width='5%'>No Plat<br></th>
            <th width='20%'>Jenis Kereta</th>
            <th width='20%'>Model</th>
            <th width='20%'>Warna Kereta</th>
            <th width='20%'>Tahun Keluaran</th>
            <th width='20%'>Harga Awal</th>
            <th></th>
        </tr>";
        

        # pembolehubah $rekod mengambil semua data yang ditemui 
        while($rekod=mysqli_fetch_array($laksana_arahan))
        {
            # mengumpukan nilai tatasusunan untuk data GET
            $data_get= array(
                'noplat'=>$rekod['noplat'],
                'jenis'=>$rekod['jenis'],
                'warna'=>$rekod['warna'],
                'tahun_keluaran'=>$rekod['tahun_keluaran'],
                'harga_awal'=>$rekod['harga_awal'],
                'nama_model'=>$rekod['nama_model']
                );

            # Memaparkan data yang ditemui semasa proses carian baris demi baris
            echo "<tr>
                    <td>".$rekod['noplat']."</td>
                    <td>".$rekod['jenis']."</td>
                    <td>".$rekod['nama_model']."</td>
                    <td>".$rekod['warna']."</td>
                    <td>".$rekod['tahun_keluaran']."</td>
                    <td>".$rekod['harga_awal']."</td>
                    <td><a href=purchase_payment.php?".http_build_query($data_get).">Beli<br></a></td>
                  </tr>";
        }
        echo"</table></div>";
    }
    else
    {
        # jika semua data dalam jadual kereta wujud dalam jadual pembelian.
        echo "Kereta yang dicari mungkin tiada dalam simpanan atau telah habis dijual. Anda boleh teruskan mencari disebelah :)";
       
    }
}
else
{
    # jika data GET tidak wujud.
    echo "<script>alert('Masukkan model kereta');
    window.location.href='index.php';</script>";
}

?>
   <div class="w3-container">
    <div class="w3-panel w3-white w3-card-2">
        <p>Setiap pembelian boleh dibuat samada dengan bayaran penuh atau sekurang-kurangnya 10% deposit daripada harga asal kereta</p>
    </div>
    </div>