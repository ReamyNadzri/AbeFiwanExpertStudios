<?php
    include("header.php");
?>
<div style="background:#00238b">
<br>

<style>
    .text{
        padding-left:20px;

    }
    .profile{
        height:600px
    }


    </style>

    <div class="w3-container w3-white w3-border w3-round-large" style="margin:0 auto; width:60%;height:650px; background-color: fff8e8;">
        <br><h2 class="text">Welcome, <?php echo $_SESSION['customerName'];?> <i>(beta release)</i></h2>

        <div class="w3-quarter profile"><br>
            <a href='myaccount.php' class="w3-bar-item w3-button" style="width:180px; text-align:left">
                <img class="w3-circle" src="admin/sources/admin.jpg" style="height:40px;width:auto">
                
                <?php
                
                    echo "".$_SESSION['customerName']."";
                ?>
            </a>

            <br><br>
            <a href='purchase.php' class="w3-bar-item w3-button" style="width:180px; text-align:left">
                <img class="w3-circle" src="admin/sources/cart.jpg" style="height:40px;width:40px">
                My Purchases
            </a>      
        </div>

        <div class="w3-threequarter w3-border w3-white">
            
            <h4 class="text">My Purchases</h4>
            <p style="position:relative;right:-20px;top:-30px; color:grey">View your invoice here.</p>

            <?php

                include('connection.php');

                $arahan_sql_purchase="select * from purchase, customer, car, model where purchase.customer_ID = '".$_SESSION['customer_ID']."' and purchase.customer_ID = customer.customer_ID and purchase.numPlate = car.numPlate and car.model_ID = model.model_ID;;";

                
                $purchase_sql=mysqli_query($condb,$arahan_sql_purchase);

                if(mysqli_num_rows($purchase_sql)>0)
                {
                    # papar header kepada jadual
                    echo "";

                    while($rekod=mysqli_fetch_array($purchase_sql))
                    {
                        # mengumpukan nilai tatasusunan untuk data GET
                        $data_get= array(
                            'purchase_ID'=>$rekod['purchase_ID'],
                            'customer_ID'=>$rekod['customer_ID'],
                            'numPlate'=>$rekod['numPlate'],
                            'purchaseDate'=>$rekod['purchaseDate'],
                            'deposit'=>$rekod['deposit'],
                            'balancePayment'=>$rekod['balancePayment'],
                            'customerName'=>$rekod['customerName'],
                            'customerTelNum'=>$rekod['customerTelNum'],
                            'customerPass'=>$rekod['customerPass'],
                            'carName'=>$rekod['carName'],
                            'carType'=>$rekod['carType'],
                            'modelName'=>$rekod['modelName'],
                            'color'=>$rekod['color'],
                            'yearManufac'=>$rekod['yearManufac'],
                            'initialPrice'=>$rekod['initialPrice'],
                            'desccar'=>$rekod['desccar'],
                        );
                       

                        # Memaparkan data yang ditemui semasa proses carian baris demi baris

                        echo"
                        <div class='w3-border w3-round-large text w3-margin' style='width:95%; padding-top:10px;padding-bottom:10px;'>
                        Number Plate : ".$rekod['numPlate']."             <br>
                        Purchase Date : ".$rekod['purchaseDate']."        <br>
                        Deposit (RM) : ".$rekod['deposit']."              <br>
                        Bal. Payment (RM) : ".$rekod['balancePayment']."  <br>
                        <br>
                        <a class='w3-button w3-round-large' style='background: #FFBF00' href=purchase_invoice.php?".http_build_query($data_get).">Invoice<br></a>
                        <br></div> 
                       ";
                    }
                    echo"";
                }
                else
                {
                    # jika semua data dalam jadual car wujud dalam jadual purchase.
                    echo "<i class='text' >You did not purchases any car here.</i><br><br>";
                   
                }
            ?>
        </div>
    </div>