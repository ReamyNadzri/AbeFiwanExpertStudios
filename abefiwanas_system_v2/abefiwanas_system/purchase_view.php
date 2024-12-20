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
            'fileimgname'=>$_GET['fileimgname'],
            'desccar'=>$_GET['desccar'],####################################
            'initialPrice'=>$_GET['initialPrice'],##########################
            'modelName'=>$_GET['modelName']
        )?>

<!-- Javascript for image selector-->
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8; 
  cursor: pointer; 
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>



<!-- Memaparkan maklumat -->
<div class="w3-container" style="margin-left:20%;margin-right:20%"><br><br>
<h1><?php echo $_GET['carName']." ".$_GET['carType'];?> </h1><br>
        
        
        <div class="w3-col w3-container" style="">
            <div class="w3-col w3-hover-shadow w3-card w3-round-xlarge" style="margin-bottom:15px">
          
                <div class="container w3-margin w3-center w3-grey">
                    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                    <img id="expandedImg" class="w3-center" style="height:400px">
                    <div id="imgtext"></div>
                </div>

                <div class="row ">
                    <div class="column w3-padding w3-border">
                        <img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($rekod['image']); ?> "
                            alt="Main Image"   style="width:60%" onclick="myFunction(this);">
                    </div>
                    <div class="column w3-padding w3-border">
                        <img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($rekod['sideimages1']); ?> " 
                            alt="Side Image 1" style="width:60%" onclick="myFunction(this);">
                    </div>
                    <div class="column w3-padding w3-border">
                        <img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($rekod['sideimages2']); ?> " 
                            alt="Side Image 2" style="width:60%" onclick="myFunction(this);">
                    </div>
                    <div class="column w3-padding w3-border">
                        <img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($rekod['sideimages3']); ?> " 
                            alt="Side Image 3" style="width:60%" onclick="myFunction(this);">
                    </div>
                </div>

                
            
            </div><br><br><br><br><br><br>

                <script>
                    function myFunction(imgs) {
                    var expandImg = document.getElementById("expandedImg");
                    var imgText = document.getElementById("imgtext");
                    expandImg.src = imgs.src;
                    imgText.innerHTML = imgs.alt;
                    expandImg.parentElement.style.display = "block";
                }
                </script>
<hr>
            <h3>&emsp;Details&emsp;</h3>
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
        <div class="w3-center" style="text-align: center"><br><br>
            <img src="sources/iklan.png" style="width:110%">
            <hr>
        </div>

        
            <a href="purchase_payment.php?<?php echo http_build_query($data_get);?>" class="w3-button w3-round w3-hover-shadow w3-round-xlarge w3-center" style="margin-bottom:10px;width:100%;background: #FFBF00">Do you like what you see?<b> Book Now!</b></a><br>
            <a href="purchase_searching.php?" class="w3-button w3-round w3-hover-shadow w3-round-xlarge w3-center" style="width:100%;background: #FFBF00">Not interested what you see?<b> Find More!</b></a><br><br>
        

<!-- calculator bulanan -->
<br>
        <h3>&emsp;Loan Calculator&emsp;</h3>
      

        <style>
    #calctext{
        padding-left: 20px;
        padding-top: 5px;
        color:white;

    }
    #calcsmalltext{
        padding-left: 20px;
    }
    #jaraktext{
        padding-right: 40px;
    }
    #pm{
        font-size:small;
        color:white;
        
    }
    #ps{
        font-size:x-small;
        color:white;
        opacity: 50%;
        
    }
   
</style>
<div class="w3-round w3-border calculation" id="c12" style="margin:0 auto;height:340px; background:#00238b">
    
        
        <form>
        
            <div class="w3-threequarter w3-round w3-border w3-light-grey" style="margin:20px; width:70%;height:300px">
   
            <div class="w3-half jaraktext" style="">
                    <p id="calcsmalltext">Car Price (RM)<br>
                    <input style="padding-right:20px"size="26" type="text" value="<?php echo $_GET['initialPrice']; ?>" required></P>
                </div>
                <div class="w3-half" style="">
                 
                    <p id="">Down Payment (%)<br>
                
                    <input id="cdown" class="color:black" size="20" type="text" disabled required onkeyup="calc();">
                    <input id="downpay" size="1" type="text" required onkeyup="calc();">%<br><i style="font-size: x-small;">Min. 10% down payment</i></p>
                </div>

                <!---------------------------------------------------->
            
                <div class="w3-half jaraktext" style="">
                    <p id="calcsmalltext">Interest Rate (RM)<br>
                    <input id="interest" style="padding-right:20px"size="26" type="text"  required onkeyup="calc();">
                    <br><i style="font-size: x-small;">Min. 3.5% interest rate</i></p>
                    
                </div>

                <div class="w3-half " style="">
                 
                    <p id="loan">Loan Tenure<br>
                    <input id="year" size="1" type="text"  required onkeyup="calc();">&ensp;Years</p>
                </div>
                
            </div>
               
               <div class="w3-quarter">
                   <p id="pm">Your Estimated Monthly Payment:</p>
                   <b><h1  class="" style="color:#FFBF00; font-weight:bold ; ">
                       <span  style="font-size: small;" >RM
                       <input class="" id="bulanan" size="1" disabled style="color:#FFBF00; font-weight:bold ; font-size: 480% ;opacity:100%"></span>
                       </h1></b>
                   <hr>
                   <p id="ps">All Interest rates and calculated<br>amounts are estimations only. Actual<br>amounts may differ based on your<br>individual credit profile.
   
                   
               </div>  

                <script>
                    //ambik nilai peratus dan papar
                    let dpay = 0;
                    let interest = 3.5;
                    let year = 9;
                    var total = 0;
                    var dp = 0;
                    let carprice =  <?php echo $_GET['initialPrice'];?>;

                    //papar data
                    document.getElementById('downpay').value = dpay;
                    document.getElementById('interest').value = interest;
                    document.getElementById('year').value = year;

                    //document.getElementById('bulanan').value = carprice.toFixed(2);

                    //pengiraan
                    total = carprice + (carprice * (interestrate/100) *year);
                    dp = (total * (percentage /100)).toFixed(2);

                    document.getElementById('cdown').value = dp;
                    
                    //fungsi kiraan down payment dgn keuntungan bank
                    function calc() {
                        
                        //ambil data
                        const price = <?php echo $_GET['initialPrice'];?>;
                        const interestrate = document.getElementById('interest').value;
                        const year = document.getElementById('year').value;
                        const percentage = document.getElementById('downpay').value;

                        //
                        const total = price + (price * ((interestrate/100) *year));
                        const dp = total * (percentage /100);
                        document.getElementById('cdown').value = dp.toFixed(2);

                        //monthly
                        const month = (total - dp) / (year * 12);
                        //month = month / (year * 12);
                        document.getElementById('bulanan').value = month.toFixed(0);

                   }


                </script>  
        </form>
</div>


    <br><br><br>
    <div class="w3-container">

  <div class="" style="r">
    <h3>Other Vehicles You May Like</h3>
  </div>
  <div class="w3-col w3-left w3-container w3-round-xlarge w3-card w3-border w3-center" style="width:48%">
    <a href="purchase_listing.php?search=honda">
      <div class="w3-container" style="width:100%;margin-top:20px">
        <img class="w3-round-large" src="sources/ads06.jpg" >
      </div>
      <h4><b>Perodua MYVI 1.3 SE ZHS (A)</b></h4>
        <div class="w3-container w3-margin">
          </a>
        </div>
    </div>

    <div class="w3-col w3-right w3-container w3-round-xlarge w3-card w3-border w3-center" style="width:48%">
    <a href="purchase_listing.php?search=vios">
      <div class="w3-container" style="width:100%;margin-top:20px">
        <img class="w3-round-large" src="sources/ads07.jpg">
      </div>
      <h4><b>Toyota VIOS 1.5 E FACELIFT (A)</b></h4>
      <div class="w3-container w3-margin">
        </a>
      </div>
    </div>

    <br>
  <br>
</div>
</div><br><Br><BR>
<?php } include "footer.php" ?>