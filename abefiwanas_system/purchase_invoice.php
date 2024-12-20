

<!-- memanggil fail header -->
<?PHP include('header.php'); ?>

<div class="w3-container w3-center w3-white">
    <br>
    <img  src="sources/logo.png" style="width:200px">
    <h2><b>CAR BOOKING INVOICE</b></h2>
    <hr>
    <h3>Customer Information</h3>
    <div class=" w3-col" style="width:50%;text-align:right;">
        
                <!-- Memaparkan maklumat pembeli -->
        
        <b>Customer Name : </b><br>
        <b>Customer IC Num. : </b><br>
        <b>Customer Contact : </b><br>
        <hr>
    </div>
    <div class=" w3-col" style="width:50%;text-align:left;">
    
        &ensp;<?PHP echo $_SESSION['customerName'];?><br>
        &ensp;<?PHP echo $_SESSION['customer_ID'];?><br>
        &ensp;<?PHP echo $_SESSION['customerTelNum'];?><br>
        <hr>
    </div>
</div>

<div class="w3-container w3-center w3-white">
    <h3>Car Information</h3>
    <div class=" w3-col" style="width:50%;text-align:right;">
                <!-- Memaparkan maklumat kereta yang dibeli -->
        
        <b>Num Plat Regist. : </b><br>
        <b>Car Name : </b><br>
        <b>Car Model : </b><br>
        <b>Car Color : </b><br>
        <b>Year Manufacture : </b><br>
        <b>Initial Price : </b><br>
        <hr>
    
        
    </div>
    <div class=" w3-col" style="width:50%;text-align:left;">
        &ensp;<?PHP echo $_GET['numPlate'];?><br>
        &ensp;<?PHP echo $_GET['carName'];?><br>
        &ensp;<?PHP echo $_GET['carType'];?><br>
        &ensp;<?PHP echo $_GET['color'];?><br>
        &ensp;<?PHP echo $_GET['yearManufac'];?><br>
        &ensp;RM <?PHP echo $_GET['initialPrice'];?><br>
        <hr>
    </div>

    <div class="w3-container w3-center w3-white">
        <h3>Purchase Information</h3>
        <div class=" w3-col" style="width:50%;text-align:right;">
                <!-- Memaparkan maklumat Pembelian -->
                
            <b>Purchase Date : </b><br>
            <b>Deposit : </b><br>
            <b>Balance of payment : </b><br>
            <hr>
        </div>
        <div class=" w3-col" style="width:50%;text-align:left;">
        &ensp;<?PHP echo $_GET['purchaseDate'];?><br>
        &ensp;RM <?PHP echo $_GET['deposit'];?><br>
        &ensp;RM <?PHP echo $_GET['balancePayment'];?><br>
        <hr>
        </div>

        <button class='w3-btn w3-ios-grey w3-round-xlarge' onclick='handlePrint()' name='print' type='button' value='Print'>Print
        <button class='w3-btn w3-ios-grey w3-round-xlarge' href='index.php' onclick='' name='print' type='button' value='Home' style="margin-left:10px">Home
        

        <script type="text/javascript">
         const handlePrint = () => {
            var actContents = document.body.innerHTML;
            document.body.innerHTML = actContents;
            window.print();
         }
      </script>
   
</div><br><br><br>


