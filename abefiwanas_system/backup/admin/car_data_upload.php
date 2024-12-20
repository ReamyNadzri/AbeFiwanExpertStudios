<!-- Memanggil fail header_admin.php-->
<?PHP include('header_admin.php'); ?>
<!-- form untuk upload fail data-->
<form  action='' method='POST' enctype='multipart/form-data'>
<h4>Please choose the txt file that you want to upload</h4>
<input type='file' name='bilik'>
<button  type='submit' name='btn-upload'>Upload</button>
</form>

<hr>
<a href="car_img_upload.php" class="w3-button w3-round w3-hover-shadow w3-round-xlarge w3-center" style="margin-bottom:10px;width:40%;background: #FFBF00">
Upload Car Images <b> Click Here! </b></a>

<br>
       
<?PHP 
if (isset($_POST['btn-upload']))
{
    include ('../connection.php');
    # mengambil nama sementara fail
    $namafailsementara=$_FILES["bilik"]["tmp_name"];
    # mengambil nama fail
    $namafail=$_FILES['bilik']['name'];
    # mengambil carType fail
    $carTypefail=pathinfo($namafail,PATHINFO_EXTENSION);   
    # menguji carType fail dan saiz fail
    if($_FILES["bilik"]["size"]>0 AND $carTypefail=="txt")
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
            list($plateNum,$carType,$color,$yearManufac,$initialPrice,$model_ID) = $pecahkanbaris;
            
            # arahan SQl untuk menyimpan data
            $arahan_sql_simpan="insert into kereta
            (plateNum,carType,color,yearManufac,initialPrice,model_ID) values
            ('$plateNum','$carType','$color','$yearManufac','$initialPrice','$model_ID')";            
            
            # memasukkan data kedalam jadual kereta
            $laksana_arahan_simpan=mysqli_query($condb, $arahan_sql_simpan);     
            echo"<script>alert('import fail Data Selesai.');
            window.location.href='car_info.php';</script>";            
        }                  
    fclose($fail_data_kereta);
    }
    else  {
        echo"<script>alert('hanya fail berformat txt sahaja dibenarkan');</script>";
    }
}
?> 
