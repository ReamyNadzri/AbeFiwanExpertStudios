
<div id="id01" class="w3-modal" style=" z-index: 9999;">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

    
  
      <div class="w3-center w3-margin"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">&times;</span><br>
        <img src="sources/logo.jpg" style="text-align:center; width:400px"><br>
        <h2>Development Phase Notification</h2>
        <p> This website is currently under development. Some features may not be fully functional or available at this time. We appreciate your understanding and welcome your feedback to improve the platform.
        </p>
        
        <a onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-round w3-hover-shadow w3-round-xlarge w3-center" style="margin-bottom:10px;width:80%;background: #FFBF00">Okay, Let's Go</a><br>
            
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
        500
    )
});
</script>
