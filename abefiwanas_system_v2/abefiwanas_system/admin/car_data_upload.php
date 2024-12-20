<!-- Memanggil fail header_admin.php-->
<?PHP include('header_admin.php'); ?>
<!-- form untuk upload fail data-->
<form  action='' method='POST' enctype='multipart/form-data'>
<h4>Please choose the txt file that you want to upload</h4>
<input type='file' name='bilik'>
<button  type='submit' name='btn-upload'>Upload</button>
</form>

<hr>
<form action="uploadimg.php" method="post" enctype="multipart/form-data">
<h4>Please choose the image file that you want to upload</h4>
    <label>Select Image File:</label><br>
    <input type="file" name="image">
    <input type="submit" name="submit" value="Upload">
</form>

<h4>Noted!! For images submition please open phpMyAdmin for updating the images ids by using manual. The system is limited to sync the images ids with the car information. We apologize for any inconvenience caused</h4>

<?php 
// Include the database configuration file  
include 'connection.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert =$condb->query("INSERT into images (image, datecreate) VALUES ('$imgContent', NOW())") ; 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>


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
