<?php 
include ('header.php'); 
//include ('popup.php'); 
?>



<body class="" style="background-color: #FFFAF0;">
    
        <link rel="stylesheet" href="style.css">
        <title>Legacy Kueh System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.cdnfonts.com/css/product-sans" rel="stylesheet">

        <div class="w3-row">
            <div class="w3-col s1 w3-text-white w3-left" style="width: 10%; height: 10%">/</div>
            <div class="w3-col s1 w3-text-white w3-right" style="width: 10%; height: 10%">/</div>
            <div class="w3-rest w3-white" style="">


                <div class="w3-container w3-center" style="margin-top: 2%;">
                    <img src="sources/header/logo.png" alt="" width="100px">
                    <h2><b>Legacy Kueh</b> by Abe Fiwan Expert Studios</h2>
                    <form action="searchingkueh.php" method="get">
                        <div class="w3-center" style="text-align: center">
                            <button class="w3-button w3-hover-green w3-border w3-round-large" name="search" id="">Mulakan Carian Resipi</button>
                        </div>
                    </form>

                </div>



                <hr>
                <h3 style="margin-left: 15px;"><b>Bahan Popular</b></h3>

                <div class="w3-row w3-text-white w3-large w3-text-shadow w3-center" style="position:static">
                    <div class="w3-col s3 w3-display-container" style="padding: 5px; position: relative; z-index: 1;">
                        <img src="sources/index/almond.jpg" alt="" class="w3-round-large w3-hover-opacity w3-card" style="height: 150px; width: 100%; object-fit: cover;">
                        <div class="w3-display-bottomleft w3-container"><p>Kacang Almond</p></div>
                    </div>
                    <div class="w3-col s3 w3-display-container" style="padding: 5px;">
                        <img src="sources/index/daunpisang.jpg" alt="" class="w3-round-large w3-hover-opacity w3-card" style="height: 150px; width: 100%; object-fit: cover;">
                        <div class="w3-display-bottomleft w3-container"><p>Daun Pisang</p></div>
                    </div>
                    <div class="w3-col s3 w3-display-container" style="padding: 5px;">
                        <img src="sources/index/gulamelaka.jpg" alt="" class="w3-round-large w3-hover-opacity w3-card" style="height: 150px; width: 100%; object-fit: cover;">
                        <div class="w3-display-bottomleft w3-container"><p>Gula Melaka</p></div>
                    </div>
                    <div class="w3-col s3 w3-display-container" style="padding: 5px;">
                        <img src="sources/index/kari.jpg" alt="" class="w3-round-large w3-hover-opacity w3-card" style="height: 150px; width: 100%; object-fit: cover;">
                        <div class="w3-display-bottomleft w3-container"><p>Daun Kari</p></div>
                    </div>
                </div>
                <div class="w3-row w3-text-white w3-large w3-text-shadow w3-center">
                    <div class="w3-col s3 w3-display-container" style="padding: 5px;">
                        <img src="sources/index/kelapa.jpg" alt="" class="w3-round-large w3-hover-opacity w3-card" style="height: 150px; width: 100%; object-fit: cover">
                        <div class="w3-display-bottomleft w3-container"><p>Isi Kelapa</p></div>
                    </div>
                    <div class="w3-col s3 w3-display-container" style="padding: 5px;">
                        <img src="sources/index/pandan.jpg" alt="" class="w3-round-large w3-hover-opacity w3-card" style="height: 150px; width: 100%; object-fit: cover">
                        <div class="w3-display-bottomleft w3-container"><p>Daun Pandan</p></div>
                    </div>
                    <div class="w3-col s3 w3-display-container" style="padding: 5px;">
                        <img src="sources/index/pisang.jpg" alt="" class="w3-round-large w3-hover-opacity w3-card" style="height: 150px; width: 100%; object-fit: cover">
                        <div class="w3-display-bottomleft w3-container"><p>Pisang</p></div>
                    </div>
                    <div class="w3-col s3 w3-display-container" style="padding: 5px;">
                        <img src="sources/index/ubi.jpg" alt="" class="w3-round-large w3-hover-opacity w3-card" style="height: 150px; width: 100%; object-fit: cover">
                        <div class="w3-display-bottomleft w3-container"><p>Ubi Kayu</p></div>
                    </div>
                </div>
                <hr>
                <br>
                <h3 style="margin-left: 15px;"><b>Resipi-resipi yang boleh anda cuba sekarang!</b></h3>

                <h4 style="margin-left: 15px;">Kuih-muih dari Terengganu</h4>         <!--SEARCHING USING DB-->
                <div class="w3-row w3-text-white">
                    <div class="w3-col s3" style="padding: 5px;">
                      <div class="w3-card w3-round-large w3-display-container">
                        <img src="sources/index/chekMekMolek.jpg" class="w3-round-large" style="height: 200px; width: 100%; object-fit: cover">
                        <div class="w3-display-bottomleft w3-container">
                            <h4>Chek Mek Molek</h4>
                            <p class="w3-small">Dari Mak Kita</p>
                        </div>
                      </div>
                    </div>
                  
                    <div class="w3-col s3" style="padding: 5px;">
                      <div class="w3-card w3-round-large w3-display-container">
                        <img src="sources/index/kayuKeramat.jpg" class="w3-round-large" style="height: 200px; width: 100%; object-fit: cover">
                        <div class="w3-display-bottomleft w3-container">
                            <h4>Kayu Keramat</h4>
                            <p class="w3-small">Dari Mak Kita</p>
                        </div>
                      </div>
                    </div>
                  
                    <div class="w3-col s3" style="padding: 5px;">
                      <div class="w3-card w3-round-large w3-display-container">
                        <img src="sources/index/pulutNyior.jpg" class="w3-round-large" style="height: 200px; width: 100%; object-fit: cover">
                        <div class="w3-display-bottomleft w3-container">
                            <h4>Pulut Nyior</h4>
                            <p class="w3-small">Dari Mak Kita</p>
                        </div>
                        
                      </div>
                    </div>
                    <div class="w3-col s3" style="padding: 5px;">
                        <div class="w3-card w3-round-large w3-display-container">
                          <img src="sources/index/tokHajiSerban.jpg" class="w3-round-large" style="height: 200px; width: 100%; object-fit: cover">
                          <div class="w3-display-bottomleft w3-container">
                            <h4>Tok Haji Serban</h4>
                            <p class="w3-small">Dari Mak Kita</p>
                        </div>
                        </div>
                    </div>
                </div>

                <hr>

                <h4 style="margin-left: 15px;">Kuih-muih dari Johor</h4>         <!--SEARCHING USING DB-->
                <div class="w3-row w3-text-white">
                    <div class="w3-col s3" style="padding: 5px;">
                      <div class="w3-card w3-round-large w3-display-container">
                        <img src="sources/index/chekMekMolek.jpg" class="w3-round-large" style="height: 200px; width: 100%; object-fit: cover">
                        <div class="w3-display-bottomleft w3-container">
                            <h4>Chek Mek Molek</h4>
                            <p class="w3-small">Dari Mak Kita</p>
                        </div>
                      </div>
                    </div>
                  
                    <div class="w3-col s3" style="padding: 5px;">
                      <div class="w3-card w3-round-large w3-display-container">
                        <img src="sources/index/kayuKeramat.jpg" class="w3-round-large" style="height: 200px; width: 100%; object-fit: cover">
                        <div class="w3-display-bottomleft w3-container">
                            <h4>Kayu Keramat</h4>
                            <p class="w3-small">Dari Mak Kita</p>
                        </div>
                      </div>
                    </div>
                  
                    <div class="w3-col s3" style="padding: 5px;">
                      <div class="w3-card w3-round-large w3-display-container">
                        <img src="sources/index/pulutNyior.jpg" class="w3-round-large" style="height: 200px; width: 100%; object-fit: cover">
                        <div class="w3-display-bottomleft w3-container">
                            <h4>Pulut Nyior</h4>
                            <p class="w3-small">Dari Mak Kita</p>
                        </div>
                        
                      </div>
                    </div>
                    <div class="w3-col s3" style="padding: 5px;">
                        <div class="w3-card w3-round-large w3-display-container">
                          <img src="sources/index/tokHajiSerban.jpg" class="w3-round-large" style="height: 200px; width: 100%; object-fit: cover">
                          <div class="w3-display-bottomleft w3-container">
                            <h4>Tok Haji Serban</h4>
                            <p class="w3-small">Dari Mak Kita</p>
                        </div>
                        </div>
                    </div>
                </div>



            </div>
            
        </div>

        
<?php 
          include ('footer.php'); 
          include ('popup.php'); 
        ?>



                                </div> <!--must include in next page-->
                            </div>
                        </div>
                    </div>      
                </div>
        </body><!--until here-->

        