<!DOCTYPE html>
<html lang="en" dir="ltr">
<title>W3.CSS</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

    <title></title>
    
<div class="w3-white">

<!--------Iklan 02 -->

<br>
<br>
<div class='w3-containter w3-margin w3-card-4 w3-margin w3-light-blue w3-center w3-saya'><br>
<h4>Kenapa perlu membeli dengan kami</h4>
Pelbagai Jenis Kereta mengikut keperluan anda
<br>
<br> 
</div>

<div class="w3-row-padding w3-center w3-margin-top w3-card-3 w3-margin-bottom">

    <div class="w3-quarter w3-container w3-round ">
        <div class="w3-container w3-card-2"><br>
            <img src='gambar/saga.png' class='w3-image'>
            <p class='w3-cyan w3-round'>Segmen A</p>
        </div>
    </div>
    <div class="w3-quarter w3-container w3-round">
        <div class="w3-container w3-card-2"><br>
            <img src='gambar/accord.png' class='w3-image'>
            <p class='w3-cyan w3-round'>Segmen D</p>
        </div>
    </div>
    <div class="w3-quarter w3-container w3-round">
        <div class="w3-container w3-card-2"><br>
            <img src='gambar/exora.png' class='w3-image'>
            <p class='w3-cyan w3-round'>MPV</p>
        </div>
    </div>
    <div class="w3-quarter w3-container w3-round">
        <div class="w3-container w3-card-2"><br>
            <img src='gambar/x70.png' class='w3-image'>
            <p class='w3-cyan w3-round'>SUV</p>
        </div>
    </div>
</div>
<br>
</div>


<!--------Iklan 03 -->

<div class="w3-container w3-center">
 <img class='w3-image' src='gambar/jenama.png'>
</div>



<!--------Iklan 04 -->

<div class="w3-display-container w3-content w3-section" style="max-width:1250px">
  <img class="mySlides w3-animate-fading" src="gambar/1.jpg" alt="Lights" style="width:100%">
  <img class="mySlides w3-animate-fading" src="gambar/2.jpg" alt="Lights" style="width:100%">
  <img class="mySlides w3-animate-fading" src="gambar/3.jpg" alt="Lights" style="width:100%">
  <img class="mySlides w3-animate-fading" src="gambar/4.jpg" alt="Lights" style="width:100%">

 
<script>
var myIndex = 0;
carousel();
  function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}
</script>

  <div class="w3-padding w3-display-bottomleft w3-xxxlarge w3-tangerine">"Make it as simple as possible, but not simpler."</div>
  <div class="w3-padding w3-display-bottomleft w3-large "><i>Albert Einstein<i></div>

</div>

<!--------Cara bayaran -->
<div class="w3-row w3-center">

  <div class="w3-half w3-panel w3-center">
    <h3>Payment Methods</h3>
    <img class="w3-animate-left" src="gambar/payment.png">
  </div>
<div>

    <div class="w3-container w3-social-buttons">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div>


<!--------Hakcipta -->
  <div class="w3-container w3-center w3-red">
    <p>Tapak kami membolehkan sesiapa sahaja membeli dan menjual di rantau ini dengan mudah dan mudah. AUCar menghubungkan berjuta-juta pembeli dan penjual di Malaysia setiap bulan dengan menyampaikan pengalaman pengguna yang luar biasa di laman web ini. Setiap rakyat Malaysia boleh mencari sesuatu untuk membeli di AUCaR</p>
  </div>

</div>

<div class="w3-container w3-center w3-white">
 <img src="gambar/logo_resit.png">
 <p>Hakcipta &copy : 2019-2020 AUCaR</p>
</div>
<!-------- -->

</div>
</body>
</html> 
