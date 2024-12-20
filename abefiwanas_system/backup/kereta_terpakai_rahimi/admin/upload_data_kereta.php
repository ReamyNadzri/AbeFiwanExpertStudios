<!-- Memanggil fail header_admin.php-->
<?PHP include('header_admin.php'); ?>
<!-- form untuk upload fail data-->
<form  action='' method='POST' enctype='multipart/form-data'>
<h4>Sila Pilih Fail txt yang ingin diupload</h4>
<input type='file' name='bilik'>
<button  type='submit' name='btn-upload'>Muat Naik</button>
</form>
       
<?PHP 
if (isset($_POST['btn-upload']))
{
    include ('../connection.php');
    # mengambil nama sementara fail
    $namafailsementara=$_FILES["bilik"]["tmp_name"];
    # mengambil nama fail
    $namafail=$_FILES['bilik']['name'];
    # mengambil jenis fail
    $jenisfail=pathinfo($namafail,PATHINFO_EXTENSION);   
    # menguji jenis fail dan saiz fail
    if($_FILES["bilik"]["size"]>0 AND $jenisfail=="txt")
    {
        # membuka fail yang diambil
        $fail_data_kereta=fopen($namafailsementara,"r");
        # mendapatkan data dari fail baris demi baris
        while (!feof($fail_data_kereta)) 
        {   
            # mengambil data sebaris sahaja bg setiap pusingan
            $ambilbarisdata = fgets($fail_data_kereta);
    
            #memecahkan baris data mengikut tanda pipe
            $pecahkanbaris = explode("|",$ambilbarisdata);
            # selepas pecahan tadi akan diumpukan kepada 6 pembolehubah
            list($noplat,$jenis,$warna,$tahun_keluaran,$harga_awal,$id_model) = $pecahkanbaris;
            
            # arahan SQl untuk menyimpan data
            $arahan_sql_simpan="insert into kereta
            (noplat,jenis,warna,tahun_keluaran,harga_awal,id_model) values
            ('$noplat','$jenis','$warna','$tahun_keluaran','$harga_awal','$id_model')";            
            
            # memasukkan data kedalam jadual kereta
            $laksana_arahan_simpan=mysqli_query($condb, $arahan_sql_simpan);     
            echo"<script>alert('import fail Data Selesai.');
            window.location.href='maklumat_kereta.php';</script>";            
        }                  
    fclose($fail_data_kereta);
    }
    else  {
        echo"<script>alert('hanya fail berformat txt sahaja dibenarkan');</script>";
    }
}
?> 
