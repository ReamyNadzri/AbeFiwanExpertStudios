<?PHP
# Memanggil fail header_admin.php
include ('header_admin.php');
# Memanggil fail connection dari folder luaran
include ('../connection.php');

?>
<style>

    .pad{
        padding-left:30px;
        padding-top:30px;
    }
    </style>

<form action="car_img_upload.php" method="post" enctype="multipart/form-data" style="margin: 0 auto;width:75%">
    <h3>Select Main Image File:</h3>
    <div class="w3-hover-shadow w3-card w3-round-xlarge" style="height:100px">
        <input class="pad" type="file" name="image">
    </div><br>

    <h3>Select Side Image 1 File:</h3>
    <div class="w3-hover-shadow w3-card w3-round-xlarge" style="height:100px">
        <input class="pad" type="file" name="sideimage1">
    </div><br>

    <h3>Select Side Image 2 File:</h3>
    <div class="w3-hover-shadow w3-card w3-round-xlarge" style="height:100px">
        <input class="pad" type="file" name="sideimage2">
    </div><br>

    <h3>Select Side Image 3 File:</h3>
    <div class="w3-hover-shadow w3-card w3-round-xlarge" style="height:100px">
        <input class="pad" type="file" name="sideimage3">
        
    </div><br><br>
    <input class="w3-center w3-button w3-round-xlarge" size="15" style="background: #FFBF00; " type="submit" name="submit" value="Upload Files"><br><br><br>
</form>

<?php 
      
// If file upload form is submitted 
$status = $statusMsg = "Please upload only ( '.jpg', '.png', '.jpeg', '.gif' ) FORMAT ONLY!. Click OK to continue."; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"]) && !empty($_FILES["sideimage1"]["name"]) && !empty($_FILES["sideimage2"]["name"]) && !empty($_FILES["sideimage3"]["name"])) { 
        
        // Get file info main images
        $fileName0 = basename($_FILES["image"]["name"]); 
        $fileType0 = pathinfo($fileName0, PATHINFO_EXTENSION); 

        // Get file info sideimage 1
        $fileName1 = basename($_FILES["sideimage1"]["name"]); 
        $fileType1 = pathinfo($fileName1, PATHINFO_EXTENSION); 

        // Get file info sideimage 2
        $fileName2 = basename($_FILES["sideimage2"]["name"]); 
        $fileType2 = pathinfo($fileName2, PATHINFO_EXTENSION);
        
        // Get file info sideimage 3
        $fileName3 = basename($_FILES["sideimage3"]["name"]); 
        $fileType3 = pathinfo($fileName3, PATHINFO_EXTENSION);
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 

        if(in_array($fileType0, $allowTypes) && in_array($fileType1, $allowTypes) && in_array($fileType2, $allowTypes) && in_array($fileType3, $allowTypes)){ 
            
            $image0 = $_FILES['image']['tmp_name']; 
            $imgContent0 = addslashes(file_get_contents($image0));
            
            $image1 = $_FILES['sideimage1']['tmp_name']; 
            $imgContent1 = addslashes(file_get_contents($image1)); 
            
            $image2 = $_FILES['sideimage2']['tmp_name']; 
            $imgContent2 = addslashes(file_get_contents($image2)); 

            $image3 = $_FILES['sideimage3']['tmp_name']; 
            $imgContent3 = addslashes(file_get_contents($image3)); 
         
            // Insert image content into database 
            $insert =$condb->query("INSERT into images (image, sideimages1, sideimages2, sideimages3, datecreate) VALUES ('$imgContent0','$imgContent1','$imgContent2','$imgContent3', NOW())") ; 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
                
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
 
}
 
// Display status message 
echo "<script>alert('".$statusMsg."');</script>"; 
?>






