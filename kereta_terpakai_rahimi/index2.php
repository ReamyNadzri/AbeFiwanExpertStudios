
<div class="popup" onclick="myFunction()">Click me!
  <span class="popuptext" id="myPopup">Popup text</span>
</div>

<div class="popup" onclick="document.getElementById('id01').style.display='block'">

<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">




<script>
// When the user clicks on <div>, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>

</div>
</div>
</div>