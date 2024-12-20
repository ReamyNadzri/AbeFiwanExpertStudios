<!-- Memanggil fail header_admin.php-->
<?PHP include('header_admin.php'); 

# Memanggil fail connection dari folder luaran
include ('../connection.php');

      
        # arahan mencari data dari jadual car yang tidak wujud di jadual purchase
        $arahan_sql_cari="select * from images order by datecreate desc ";

        # melaksanakan proses carian 
        $laksana_arahan=mysqli_query($condb,$arahan_sql_cari);
    
        # jika terdapat data yang ditemui
        if(mysqli_num_rows($laksana_arahan)>0)
        {
            # papar header kepada jadual
            echo "<hr>
            <a href='car_img_upload.php' class='w3-button w3-round w3-hover-shadow w3-round-xlarge w3-center' style='margin-bottom:10px;width:40%;background: #FFBF00'>
            Upload Car Images <b> Click Here! </b></a>
            
            <br>
                 ";
            
    
            # pembolehubah $rekod mengambil semua data yang ditemui 
            while($rekod=mysqli_fetch_array($laksana_arahan))
            {
                # mengumpukan nilai tatasusunan untuk data GET
                $data_get= array(
                    'numPlate'=>$rekod['idimg'],
                    'carName'=>$rekod['image'],
                    'carType'=>$rekod['sideimages1'],
                    'color'=>$rekod['sideimages2'],
                    'yearManufac'=>$rekod['sideimages3'],
                    'desccar'=>$rekod['datecreate']
                  
                    );
    
                     #mengumpukkan kepada pembolehubah session
                     $_SESSION['idimg']=$rekod['idimg'];

                # Memaparkan data yang ditemui semasa proses carian baris demi baris

 
                // Get image data from database 

                echo"
                
                <a href=purchase_view.php?".http_build_query($data_get).">
                <div class='w3-col w3-container w3-card w3-round-large' style='margin-bottom:15px;text-align:left; width: 100%; height: auto; padding-bottom:20px'>
                   "?>
                    

                    <img class="mw396" data-testid="cover-image" style="height:auto;width:200px ;padding-top:10px;padding-bottom:10px" src="data:image/jpg;charset=utf8;base64,
                    <?php echo base64_encode($rekod['image']);?>" /> 
                    
                    <img class="mw396" data-testid="cover-image" style="height:auto;width:200px ;padding-top:10px;padding-bottom:10px" src="data:image/jpg;charset=utf8;base64,
                    <?php echo base64_encode($rekod['sideimages1']);?>" /> 
                    
                    <img class="mw396" data-testid="cover-image" style="height:auto;width:200px ;padding-top:10px;padding-bottom:10px" src="data:image/jpg;charset=utf8;base64,
                    <?php echo base64_encode($rekod['sideimages2']);?>" /> 
                    
                    <img class="mw396" data-testid="cover-image" style="height:auto;width:200px ;padding-top:10px;padding-bottom:10px" src="data:image/jpg;charset=utf8;base64,
                    <?php echo base64_encode($rekod['sideimages3']);?>" /> 
                    
                    <?php  echo"<h5>Images ID : ".$rekod['idimg']."</h5>
                    <div class='' style='height: 40px;padding-top:5px'>
                            
                            <a class='w3-button w3-round w3-round-xlarge' style='margin-left:5px; background: #FFBF00' href=car_info.php?idimg=".$rekod['idimg'].">Select<br></a>
                            <a href='delete.php?jadual=images&medan_kp=idimg&kp=".$rekod['idimg']."' onClick=\"return confirm('Confirm delete this images?')\" >Delete</a>
                            
                        </div></div>";
                
                    echo"";
            }
            echo"";
        }
        else
        {
            # jika semua data dalam jadual car wujud dalam jadual purchase.
            echo "<i><br><br>The car you are looking for may not be in stock or has been sold out.<br>You can continue searching next :)<br><br></i>";
           
        }
  
  ?>
      
?>

