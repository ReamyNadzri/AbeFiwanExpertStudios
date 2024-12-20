
<div id="id01" class="w3-modal" style="">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

    
  
      <div class="w3-center w3-margin"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">&times;</span>
        <img src="sources/maintenance.jpg" style="text-align:center; width:200px">
        <h2>Testing Phase</h2>
        <p> The purpose of the testing phase is to verify that every page looks great and works correctly.
            We thoroughly test each page of the website, checking it’s structure,
            content, & functionality, to ensure there are no errors or bugs.
        </p>
        <p>
            If you find any errors or bugs on our website, it is important to report them to the website owner so that they can be fixed.
            You can usually find a “Contact Us” link on the website where you can report the issue.
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
