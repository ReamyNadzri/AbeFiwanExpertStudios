<?php 
include ('header.php'); 
//include ('popup.php'); 
?>

<body class="" style="background-color: #FFFAF0;">
    
        <link rel="stylesheet" href="style.css">
        <title>Legacy Kueh System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/product-sans" rel="stylesheet">


                    <!--CONTENT START HERE-->
                    <div class="container">
                        <div class="row">
                            <div class="col-3 my-4">
                                <img src="..." class="img-fluid text-center" alt="test image" style="min-height:350px;">
                            </div>
                            <div class="col gy-4">
                                <div class="col-12 bg-primary">
                                    <input class="w-100 p-1 border-0 shadow-none fw-bolder fs-2" type="text" name="kuehName" placeholder="Tajuk: Kuih Lapis Atok">
                                </div>
                                <div class="col-12">
                                    
                                        <div class="d-flex align-items-center my-2">
                                            <!-- Avatar -->
                                            <img src="avatar.jpg" alt="Profile Picture" class="rounded-circle border" width="50" height="50">
                                            <!-- Text -->
                                            <div class="ms-3">
                                                <h6 class="mb-0">Haziq Akram</h6>
                                                <small class="text-muted">@cook_111408822</small>
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="col-12">
                                    <textarea class="w-100 p-1 border-0 shadow-none" name="kuehDesc" placeholder="Share kisah resepi anda"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 col-md-3 py-3">
                                <h1 class="fw-bolder">Ramuan</h1>
                                <div class="row gy-3">
                                    <div class="col">Sajian</div>
                                    <div class="col">
                                        <input type="text" class="rounded" placeholder="2 Orang">
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary border-0" type="button" id="button-addon1"><i
                                                    class="bi bi-justify"></i></button>
                                            <input type="text" class="form-control" placeholder=""
                                                aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                                    class="bi bi-three-dots"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary border-0" type="button" id="button-addon1"><i
                                                    class="bi bi-justify"></i></button>
                                            <input type="text" class="form-control" placeholder=""
                                                aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                                    class="bi bi-three-dots"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-9 py-3">
                                <h1 class="fw-bolder">Langkah</h1>
                                <div class="row gy-3">
                                    <div class="col">Tempoh Masak</div>
                                    <div class="col text-start">
                                        <input type="text" class="rounded" placeholder="1 jam 30 minit">
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary border-0" type="button" id="button-addon1"><i
                                                    class="bi bi-justify"></i></button>
                                            <input type="text" class="form-control" placeholder=""
                                                aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                                    class="bi bi-three-dots"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary border-0" type="button" id="button-addon1"><i
                                                    class="bi bi-justify"></i></button>
                                            <input type="text" class="form-control" placeholder=""
                                                aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                                    class="bi bi-three-dots"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary border-0" type="button" id="button-addon1"><i
                                                    class="bi bi-justify"></i></button>
                                            <input type="text" class="form-control" placeholder=""
                                                aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                                    class="bi bi-three-dots"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary border-0" type="button" id="button-addon1"><i
                                                    class="bi bi-justify"></i></button>
                                            <input type="text" class="form-control" placeholder=""
                                                aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                                    class="bi bi-three-dots"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 


                    <?php 
          include ('footer.php'); 
        ?>



                                </div> <!--must include in next page-->
                            </div>
                        </div>
                    </div>      
                </div>
        </body><!--until here-->