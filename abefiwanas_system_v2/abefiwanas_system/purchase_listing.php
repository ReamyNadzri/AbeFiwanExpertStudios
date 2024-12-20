<?php include ('header.php'); ?><br>

<div class="w3-container w3-row w3-center w3-round-large" style="margin:0 auto;width:60%;"><br>
    <h1 >Find your favorites car here!</h1>
    <div class="w3-col w3-padding w3-container w3-card w3-round-large" style=" margin-bottom:10px">
        
        <form class="" method="GET" action='purchase_listing.php'>
        
            <input class="w3-col w3-input w3-round" style="width:90%" type="text" name="search"
            placeholder="What car are you looking for?">
            
            <div class="w3-col" style="width:10%">
                <button class="w3-button w3-round" ><i class="material-icons"  name='submit'>search</i></a>
            </div>

           
        </form>
        
    </div>
    <br><br>

<?php
 
  if(!empty($_GET['search'])){
    
        # memanggil fail connection
        include ('connection.php');

        # mengambil data GET
        $model=$_GET['search'];

        $result=0;
 
           
########################################################################################################################################
      
        # arahan mencari data dari jadual car yang tidak wujud di jadual purchase
        $arahan_sql_cari="select * from car,model,images where
        car.numPlate not in(select numPlate from purchase)
        and car.model_ID=model.model_ID and car.idimg=images.idimg
        and (car.carName like '%".$model."%' 
        or model.modelName like '%".$model."%' 
        or car.yearManufac like '%".$model."%')";
    
        # melaksanakan proses carian 
        $laksana_arahan=mysqli_query($condb,$arahan_sql_cari);
    
        # jika terdapat data yang ditemui
        if(mysqli_num_rows($laksana_arahan)>0)
        {
            # papar header kepada jadual
            echo "";
            
    
            # pembolehubah $rekod mengambil semua data yang ditemui 
            while($rekod=mysqli_fetch_array($laksana_arahan))
            {
                # mengumpukan nilai tatasusunan untuk data GET
                $data_get= array(
                    'numPlate'=>$rekod['numPlate'],
                    'carName'=>$rekod['carName'],
                    'carType'=>$rekod['carType'],
                    'color'=>$rekod['color'],
                    'yearManufac'=>$rekod['yearManufac'],
                    'fileimgname'=>$rekod['fileimgname'],
                    'desccar'=>$rekod['desccar'],
                    'initialPrice'=>$rekod['initialPrice'],
                    'modelName'=>$rekod['modelName'],
                 
                    
                    );
    
                    $result++;
                # Memaparkan data yang ditemui semasa proses carian baris demi baris

 
                // Get image data from database 

                echo"
                <a href=purchase_view.php?".http_build_query($data_get).">
                <div class='w3-col w3-container w3-card w3-round-large' style='margin-bottom:15px;text-align:left; width: 100%; height: 200px;'>
                    <div class='w3-quarter w3-border' style='height: 100%;'> "?>
                    

                    <img class="mw396" data-testid="cover-image" style="height:180px;width:auto ;padding-top:10px" src="data:image/jpg;charset=utf8;base64,
                    <?php echo base64_encode($rekod['image']);?>" /> 
                    </div>
                    <?php  echo"
                   

                    <div class='w3-threequarter' style='height:60px;padding-left:10px; padding-bottom:10px'>
                        <h3><b>".$rekod['carName']."</b></h3>
    
                    </div>
                    <div class='w3-threequarter style='padding-top:5px'>
                        ".$rekod['carType']."
                        <div class='w3-half ' style='height: 40px;padding-left:10px'>
                            ".$rekod['modelName']."
                        </div>
    
                    </div>
                    <div class='w3-threequarter '>
                        ".$rekod['yearManufac']."
                        <div class='w3-half ' style='height: 40px;padding-left:10px'>
                            ".$rekod['color']."
                        </div>
    
                    </div>
                    <div class='w3-threequarter'>
                    <div class='w3-half' style='color:blue;text-align:right;height: 40px;padding-left:10px'>
                            <h3 class=''><b>RM ".$rekod['initialPrice']."</b></h3>
                        </div>
    
                        <div class='w3-half ' style='height: 40px;padding-top:5px'>
                            <a class='w3-button w3-round w3-right w3-round-xlarge' style='margin-left:5px; background: #FFBF00' href=purchase_view.php?".http_build_query($data_get).">View More<br></a>
                            <a class='w3-button w3-round w3-right w3-round-xlarge' style=' background: #FFBF00' href=purchase_payment.php?".http_build_query($data_get).">Buy Now<br></a>
                        </div>
                        
                    </div>

                </div></a>";
            }
            echo"";
        }
        else
        {
            # jika semua data dalam jadual car wujud dalam jadual purchase.
            echo "<i><br><br>The car you are looking for may not be in stock or has been sold out.<br>You can continue searching next :)<br><br></i>";
           
        }
  }else{
        # jika data GET tidak wujud.
        echo "<script>alert('Please enter the model of the car.');
        window.location.href='purchase_searching.php';</script>";
  }

  
  ?>
      


</div>



<br>

<?PHP include ('footer.php'); ?>