<?php include ("header.php");?>
<br><br>
<h1 style="color:red;text-align:center"><b>Testing Environment for Abe Fiwan Auto Sales</b></h1><br><br>



<!-- borang untuk masukkan nilai deposit -->
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
                    <input id="downpay" size="2" type="text" required onkeyup="calc();"><br><i style="font-size: x-small;">Min. 10% down payment</i></p>
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
  
               

            
   
        </form>


        

 
</div>
