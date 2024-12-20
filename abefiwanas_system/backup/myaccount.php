<?php
    include("header.php");
?>
<div style="background:#00238b">
<br>

<style>
    .text{
        padding-left:20px;

    }
    .profile{
        height:600px
    }


    </style>

    <div class="w3-container w3-white w3-border w3-round-large" style="margin:0 auto; width:60%;height:650px; background-color: fff8e8;">
        <br><h2 class="text">Welcome, <?php echo $_SESSION['customerName'];?> <i>(beta release)</i></h2>

        <div class="w3-quarter profile"><br>
            <a href='myaccount.php' class="w3-bar-item w3-button" style="width:180px; text-align:left">
                <img class="w3-circle" src="admin/sources/admin.jpg" style="height:40px;width:auto">
                
                <?php
                
                    echo "".$_SESSION['customerName']."";
                ?>
            </a>

            <br><br>
            <a href='purchases.php' class="w3-bar-item w3-button" style="width:180px; text-align:left">
                <img class="w3-circle" src="admin/sources/cart.jpg" style="height:40px;width:40px">
                My Purchases
            </a>      
        </div>

        <div class="w3-threequarter w3-border w3-white">
            
            <h4 class="text">My Profile</h4>
            <p style="position:relative;right:-20px;top:-30px; color:grey">Manage your account.</p>

            <div class="w-blue" style="position:relative;top:-50px">
                <div class="w3-third" style="text-align:right">
                   <p>
                    IC Number :<br><br>
                    Full Name :<br><br>
                    Phone Number :<br><br>
                    Password :
                   </p>
                   
                   
                </div>
                <div class="w3-twothird">
                    <br><br>
                    <form action="" method="POST">
                        <p style="position:relative;top:-44px;left:18px"><?php echo $_SESSION['customer_ID'];?></p>
                        <input type='text' name='name' style="position:relative;top:-64px;left:5px" value='<?php echo $_SESSION['customerName'];?>'><br>
                        <input type='text' name='numtel' style="position:relative;top:-62px;left:5px" value='<?php echo $_SESSION['customerTelNum'];?>'><br>
                        
                        <input type='password' name='pass' style="position:relative;top:-60px;left:5px" id="myInput"value='<?php echo $_SESSION['customerPass'];?>'><br>
                        <p style="position:relative;top:-74px"><input type="checkbox" style="position:relative;top:-2px" onclick="myFunction()"> Show Password</p>
                        
                        <input class="w3-button" style="background: #FFBF00;position:relative;top:-90px" type='submit' value='Save'>
                    </form>
                    

                    <script>
                    function myFunction() {
                    var x = document.getElementById("myInput");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                    }
                    </script>

                </div>
            </div>
            
        </div>

            


    </div>
    

    <?PHP 
# menyemak kewujudan data POST
if(!empty($_POST))
{
    # Memanggil fail connection dari folder luaran
    include ('connection.php');
    


    # mengambil data POST
    $customerName=$_POST['name'];
    $customerPass=$_POST['pass'];
    $customerTelNum=$_POST['numtel'];

    $customer_ID=$_SESSION['customer_ID'];
    
    # Arahan untuk mengemaskini data ke dalam jadual admin

    
    $arahan_sql_update="UPDATE customer SET customerName='$customerName',customerTelNum='$customerTelNum',customerPass='$customerPass' WHERE customer_ID ='$customer_ID';";

    # melaksanakan proses mengemaskini dalam syarat IF
    if(mysqli_query($condb,$arahan_sql_update))
    {
        $_SESSION['customerName']=$customerName;
        $_SESSION['customerPass']=$customerPass;
        $_SESSION['customerTelNum']=$customerTelNum;
        mysqli_close($condb);
        # peroses mengemaskini berjaya.
        echo "<script>alert('Save Success');
        window.location.href='myaccount.php';
        </script>";
    }
    else
    {
        # proses mengemaskini gagal
        echo "<script>alert('Save Failed');
        window.history.back();</script>";
    }
}

?>
</div>