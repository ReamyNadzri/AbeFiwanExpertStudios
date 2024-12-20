<?php include("header.php") ?>
<div id="id01" class="w3-modal" style="">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:800px">

    
  
      <div class="w3-center w3-margin"><br>
        
        <img src='admin/sources/error.png' style="text-align:center; width:400px">
        <h2>Sorry for the Inconvenience</h2>
        <h5> Dear valued customer,</h5><p>
            We are writing to apologize for the inconvenience of our website being currently closed to the public.<br>
            We are currently undergoing maintenance and upgrades, and we expect the website to be back up and running by 12:00 AM on July 28, 2023.<br><br>
            We understand that this may be an inconvenience, and we apologize for any frustration it may cause. We appreciate your patience and understanding as we work to improve our website.
            In the meantime, if you have any questions or concerns, please do not hesitate to contact us. We will be happy to assist you.<br><BR>

Thank you for your continued support.
        </p>
        <a onclick="document.getElementById('id01').style.display='none'" href="index.php" class="w3-button w3-round w3-hover-shadow w3-round-xlarge w3-center" style="margin-bottom:10px;width:80%;background: #FFBF00">Go Back</a><br>
            
        <br>
      </div>


    </div>
</div>
           

<script>
  window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.getElementById('id01').style.display='block';
        },
        100
    )
});
</script>
