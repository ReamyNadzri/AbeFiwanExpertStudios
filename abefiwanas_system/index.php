<?php 
include ('header.php'); 
//include ('popup.php'); 
?>

</div>


<style>
.mySlides {display:none;}
</style>


<!--Advertisement-->
<div class="w3-section w3-display-container" style="height:350px">
<div class="" style>
  <img class="mySlides" src="sources/ads01.png" style="width:100%;opacity:40%">
  <img class="mySlides" src="sources/ads02.png" style="width:100%;opacity:40%">
  <img class="mySlides" src="sources/ads03.png" style="width:100%;opacity:40%">
  <img class="mySlides" src="sources/ads04.png" style="width:100%;opacity:40%">
  <img class="mySlides" src="sources/ads05.png" style="width:100%;opacity:40%">
  <div class="w3-display-middle w3-large">

<!-- SEARCHING -->
    <div class="banner w3-center">
      <div class="" style="height:20%">
      <h1>
        <b><a href="" class="typewrite ads" name="" data-period="2000" data-type='[ "1st Best Car Selling Platform in Malaysia", "Guaranteed & Trusted by AFAS", "Abe Fiwan Auto Sales" ]'>
        <span class="wrap"></span>
        </a></b>
        </h1>
      </div>
      
      
      <div>
        <a href="purchase_listing.php?search=a" class="w3-button w3-round-xlarge w3-round" style="background: #FFBF00; margin-bottom:10px" >Find Now!</a><br>
        <a href="purchase_listing.php?search=proton" class="w3-button w3-grey w3-opacity w3-round-xxlarge w3-round" style="color:white">Proton</a>
        <a href="purchase_listing.php?search=perodua" class="w3-button w3-grey w3-opacity w3-round-xxlarge w3-round" >Perodua</a>
        <a href="purchase_listing.php?search=suzuki" class="w3-button w3-grey w3-opacity w3-round-xxlarge w3-round" >Suzuki</a>
        <a href="purchase_listing.php?search=volvo" class="w3-button w3-grey w3-opacity w3-round-xxlarge w3-round" >Volvo</a><br><div style="margin-top:10px">
        <a href="purchase_listing.php?search=toyota" class="w3-button w3-grey w3-opacity w3-round-xxlarge w3-round" >Toyota</a>
        <a href="purchase_listing.php?search=mercedes" class="w3-button w3-grey w3-opacity w3-round-xxlarge w3-round" >Mercedes</a>
        <a href="purchase_listing.php?search=mazda" class="w3-button w3-grey w3-opacity w3-round-xxlarge w3-round" >Mazda</a></div>

      </div>
      </div>
    
    
    <!----text moving animation--->
    <style> 
    .ads {
        
        text-align: center;
        color:black;
        padding-top:10em;
        
    }

    *{ color:black; text-decoration: none;}
  </style>

  <script>
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
  </script>

  </div>
</div>

<br><br><br>

<!--- image ads animation--->
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
  setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>



<!--- listing car--->
<div class=" w3-round-xlarge" style="margin:0 auto; width: 80%"> 


  <div class="w3-center" style="text-align:center">
    <h2><img src='sources/new/favorites.png' style="text-align:center; width:40px"> Recommended for you <img src='sources/new/favorites.png' style="text-align:center; width:40px"></h2><hr color="#FFBF00" size="8%">
  </div>

  <div class="w3-cell-row w3-center" style="text-align:center">

    <div class="w3-cell w3-container w3-round-xlarge w3-card w3-border w3-center" style="">
    <a href="purchase_listing.php?search=proton">
      <h3 class="w3-center"><br><b>Popular Car Listing</b><br></h3>
      <div class="w3-container w3-center" >
        <img  src="sources/popularcar.png" style="height:180px; width:auto; text-align:center">
      </div>
      <h4><b>All-new Proton Car</b></h4>
      <h3>Starting from <b>RM 110,000</b></h3>
        <div class="w3-container w3-margin">
          </a>
        </div>
    </div>

    <div class="w3-cell" style="width:10px"></div>

    <div class="w3-cell w3-container w3-round-xlarge w3-card w3-border w3-center" >
    <a href="purchase_listing.php?search=perodua">
      <h3 class="w3-center"><br><b>Best Car Selling</b><br></h3>
      <div class="w3-container w3-center">
        <img  src="sources/bestcar.png" style="height:180px; width:auto; text-align:center">
      </div>
      <h4><b>King of the Highway</b></h4>
      <h3>Starting from <b>RM 36,800</b></h3>
      <div class="w3-container w3-margin">
        </a>
      </div>
    </div>

    <div class="w3-cell" style="width:10px"></div>

    <div class="w3-cell w3-container w3-round-xlarge w3-card w3-border w3-center">
      <a href="purchase_listing.php?search=mercedes">
        <h3 class="w3-center"><br><b>Continental Car Listing</b><br></h3>
      <div class="w3-container w3-center">
        <img src="sources/conticar.png" style="height:180px; width:auto; text-align:center">
      </div>
      <h4><b>Best Performance Luxury Car</b></h4>
      <h3>Starting from <b>RM 231,900</b></h3>
      <div class="w3-container w3-margin">
        
        </a>
      </div>
    </div>
  </div>
  <br><br>

  <div class="" style="text-align:center">
    <h2>How to Buy?</h2><hr color="#FFBF00" size="8%">
  </div>
  <div class="w3-container" style="text-align:center"> 
    <img src="sources/howtobuy.png" style="width:85%;">
    <br><br>
  </div>

  <div class="" style="text-align:center">
    <h2><img src='sources/new/japan.png' style="text-align:center; width:40px"> Japanese Cars (JDM) <img src='sources/new/japan.png' style="text-align:center; width:40px"></h2><hr color="#FFBF00" size="8%">
  </div>

  <div class="w3-cell-row w3-center">
  
  <div class="w3-cell w3-container w3-round-xlarge w3-card w3-border w3-center" >
    <a href="purchase_listing.php?search=honda">
      <h3 class="w3-center"><br><b>Honda The Power of Dream</b><br></h3>
      <div class="w3-container w3-center">
        <img src="sources/j1.png" style="height:180px; width:auto; text-align:center">
      </div>
      <h4><b>All-new Honda Accord 2023</b></h4>
      <h3>Find <b>Now!</b></h3>
        <div class="w3-container w3-margin">
          </a>
        </div>
    </div>

    <div class="w3-cell" style="width:10px"></div>

    <div class="w3-cell w3-container w3-round-xlarge w3-card w3-border w3-center">
    <a href="purchase_listing.php?search=toyota">
      <h3 class="w3-center"><br><b>Toyota Move your World</b><br></h3>
      <div class="w3-container" >
        <img  src="sources/j2.png" style="height:125px; width:auto; text-align:center; margin-top:12%; margin-bottom:3%">
      </div>
      <h4><b>Toyota Camry now in Hybrid</b></h4>
      <h3>Find <b>Now!</b></h3>
      <div class="w3-container w3-margin">
        </a>
      </div>
    </div>

    <div class="w3-cell" style="width:10px"></div>

    <div class="w3-cell w3-container w3-round-xlarge w3-card w3-border w3-center">
      <a href="purchase_listing.php?search=mitsubishi">
        <h3 class="w3-center"><br><b>Mitsubishi Drive your Ambition</b><br></h3>
      <div class="w3-container">
        <img src="sources/j3.png" style="height:180px; width:auto; text-align:center">
      </div>
      <h4><b>Mitsibishi Triton 4x4 for off-road</b></h4>
      <h3>Find <b>Now!</b></h3>
      <div class="w3-container w3-margin">
        
        </a>
      </div>
      
    </div>
    <br>
  <br>
</div>
<br>
</div>
<br><br>

<?PHP
include ('footer.php'); ?>
