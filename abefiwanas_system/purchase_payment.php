<?PHP 
# Memanggil fail header
include('header.php'); 
# Menyemak kewujudan data pembolehubah session['nama_pembeli']
if(empty($_SESSION['customerName']))
{   # jika data tidak wujud, sistem akan membuka fail pembeli_login
    die("<script>alert('Please login first before buying any car.');
    window.location.href='cust_login.php';</script>");
}

# memanggil fail connection
include ('connection.php');

########################################################################################################################################

# arahan mencari data dari jadual car yang tidak wujud di jadual purchase

$arahan_sql_cari="select * from car,model,images where
        car.numPlate not in(select numPlate from purchase)
        and car.model_ID=model.model_ID and car.idimg=images.idimg
        and (car.carName like '%".$_GET['carName']."%' 
        and model.modelName like '%".$_GET['modelName']."%' 
        and car.yearManufac like '%".$_GET['yearManufac']."%')";

      # melaksanakan proses carian 
      $laksana_arahan=mysqli_query($condb,$arahan_sql_cari);
    
      if($rekod=mysqli_fetch_array($laksana_arahan))
      {
        # mengambil data GET dan mengumpukan dalam bentuk array
        $data_get= array(
            'numPlate'=>$_GET['numPlate'],
            'carName'=>$_GET['carName'],
            'carType'=>$_GET['carType'],
            'color'=>$_GET['color'],
            'yearManufac'=>$_GET['yearManufac'],
            'initialPrice'=>$_GET['initialPrice'],
            'modelName'=>$_GET['modelName']
        )?>

<!-- Memaparkan maklumat -->
<div class="w3-container" style="margin-left:20%;margin-right:20%"><br><br>
<h1>Payment Details</h1><br>
    
        
        <h3>&emsp;Customer Information&emsp;</h3>
        <div class="w3-col w3-container" style="">
            <div class="w3-col w3-hover-shadow w3-card w3-round-xlarge" style="width:32%;text-align:center;"><br>
                <b>Full Name</b><br>
                <?PHP echo $_SESSION['customerName'];?><br><br>
            </div>
            <div class="w3-col w3-hover-shadow w3-card w3-round-xlarge" style="width:33%;text-align:center;margin-left:10px"><br>
                <b>IC Number</b><br>
                <?PHP echo $_SESSION['customer_ID'];?><br><br>
            </div>
            <div class="w3-col w3-hover-shadow w3-card w3-round-xlarge" style="width:32%;text-align:center;margin-left:10px"><br>
                <b>Contact</b><br>
                <?PHP echo $_SESSION['customerTelNum'];?><br><br>
            </div>
 

        </div>
    
    
    <br><br><br><br><br>
        
    <h3>&emsp;Car Information&emsp;</h3>
        <div class="w3-col w3-container" style="">
            <div class="w3-col w3-hover-shadow w3-card w3-round-xlarge" style="margin-bottom:15px">
                <img class="mw396" data-testid="cover-image" style="height:auto;width:350px;margin:20px" src="data:image/jpg;charset=utf8;base64,
                <?php echo base64_encode($rekod['image']); ?> " > </div><br><br>

            <div class="w3-col w3-hover-shadow w3-card w3-round-xlarge" style="width:24%;text-align:center;"><br>
                <b>Plat Registration</b><br>
                <?PHP echo $_GET['numPlate'];?><br><br>
            </div>
            <div class="w3-col w3-hover-shadow w3-card w3-round-xlarge" style="width:24%;text-align:center;margin-left:10px"><br>
                <b>Name</b><br>
                <?PHP echo $_GET['carName'];?><br><br>
            </div>
            <div class="w3-col w3-hover-shadow w3-card w3-round-xlarge" style="width:24%;text-align:center;margin-left:10px"><br>
                <b>Types </b><br>
                <?PHP echo $_GET['carType'];?><br><br>
            </div>
            <div class="w3-col w3-hover-shadow w3-card w3-round-xlarge" style="width:24%;text-align:center;margin-left:10px"><br>
                <b>Model </b><br>
                <?PHP echo $_GET['modelName'];?><br><br>
           </div>
        </div><br><br>
        <div class="w3-col" style="height:12px"></div>
        <div class="w3-col w3-container" style="">
            <div class="w3-col w3-hover-shadow w3-card w3-round-xlarge" style="width:24%;text-align:center;"><br>
                <b>Color </b><br>
                <?PHP echo $_GET['color'];?><br><br>
            </div>
            <div class="w3-col w3-hover-shadow w3-card w3-round-xlarge" style="width:24%;text-align:center;margin-left:10px"><br>
                <b>Year Manufactured </b><br>
                <?PHP echo $_GET['yearManufac'];?><br><br>
            </div>
            <div class="w3-col w3-hover-shadow w3-card w3-round-xlarge" style="color:blue;width:49%;text-align:center;margin-left:10px"><br>
                <b>Price</b><br>
                RM&ensp;<?PHP echo $_GET['initialPrice'];?><br><br>
            </div>
            <br><br><br><br><br>
        </div>
        <div class="w3-col w3-container" style="">
            <div class="w3-hover-shadow w3-card w3-round-xlarge" style="text-align:center;"><br>
                <b>Descriptions</b><br>
                <?PHP echo $_GET['desccar'];?><br><br>
            </div><br><br>
        </div><br><br>
        
<div class="w3-center" style="text-align: center"><bR>
<img src="sources/iklan.png" style="width:110%">
<hr>
</div>
<h5 style="text-align:center">&emsp;
Pay deposit with the reservation. We will call you and arrange a schedule<br>to test drive the vehicle. Are you happy? We will take care of all your payments.<br>If not? Deposits and reservations will be refunded<br>if you are not satisfied&emsp;</h5>

<!-- borang untuk masukkan nilai deposit -->
<br>
        <h3>&emsp;Deposit payment using credit card&emsp;</h3>

        
        <div class="w3-col w3-hover-shadow w3-card w3-round-xlarge" style="width:95%;margin-left:15px">
        <form action='purchase_process.php?

            <?PHP echo http_build_query($data_get); ?>' method='POST'>
            <div class="w3-margin w3-col" style="width:10%">
            Accepted Cards
        </div>
            <div class="w3-margin icon-container" style="margin-left:50px">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <div><hr>
                </div>
            
            <div class="w3-margin w3-col" style="width:10%">
            Deposit :
            </div>
            <div class="w3-margin w3-col" style="width:70%">
                <input size='21' id="" type='text' name='deposit' placeholder='Minimum deposit RM1500' required><br><br>
                <input size='21' type='text' name='name_on_card' placeholder = 'Nama atas kad ' required><br>
                <input size='21' type='text' name='card_no' placeholder = 'Nombor depan kad' maxlength='12' required><br>
                <input size='3' maxlength='2' type='text' name='mm' placeholder = 'MM' required>            
                <input size='3' maxlength='4' type='text' name='mm' placeholder = 'YYYY' required>
                <input size='3' maxlength='3' type='text' name='cc' placeholder = 'CCV'required><br><br>  
                <input size='40'type='text' name='alamat' placeholder = 'Alamat Bil' required><br>
                <input maxlength='5' type='text' name='poskod' placeholder = 'Poskod' required><br>   
                <hr>
                <input class="w3-btn w3-card-2 w3-round-xlarge" style="background: #FFBF00" type='submit' value='Book'>
            </div>
        </form>
    </div><br><br>
</div><br><Br><BR>
<?php } include "footer.php" ?>