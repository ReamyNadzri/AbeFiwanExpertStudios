<?PHP
session_start();
date_default_timezone_set("Asia/Kuala_Lumpur");
?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
        <head>
            <link rel="stylesheet" href="style.css">
            <title>Legacy Kueh System</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link href="https://fonts.cdnfonts.com/css/product-sans" rel="stylesheet">
            
            <div class="" style="background-color: #FFFAF0;">

                <style>
                    .button:hover{
                        background-color: #AF2B1E;
                    }
                    .sidebar {
                        position: fixed;
                    }

                    body {
                        font-family: 'Product Sans', sans-serif;                                   
                        margin: 0;
                    
                    }
                    h1{
                        font-family: 'Product Sans', sans-serif; 
                    
                    }
                    h2, h3, h4{
                        font-family: 'Product Sans', sans-serif;
                    
                    }
                    p{
                        font-family: 'Product Sans', sans-serif; 
                    
                    }
                    a{
                        font-family: 'Product Sans', sans-serif; 
                    
                    }
                    .topnavi {
                        border-top: 2px solid black; /* Creates a top border */
                        border-left: none;          /* Ensures no border on the left */
                        border-right: none;         /* Ensures no border on the right */
                        border-bottom: none;        /* Ensures no border on the bottom */
                    }
                    
                </style>
                
                
                <div class="" style="height: 18px;width: 100%; position: fixed; background-color: #FFFAF0; z-index: 0;" ></div>
                <div class="w3-row">

                
                    
                    <div class="w3-round-large w3-row" style="margin:10px;">


                        <!--sidebar of kueh system-->
                        <div class="sidebar w3-container w3-border w3-round-large w3-cell w3-white" style="width: 15%; height:98%;">
                        
                                <img class="" style="margin-top:20px; margin-left: 20px;" src="sources/header/logo.png" alt="" width="50px">
                                <span></span>
                                <span class="w3-xlarge" style="padding-left: 10px; ;margin-top: 25px;">LegacyKueh</span>
            
                            
                            <a href="index.php" class="w3-bar-item w3-button w3-round w3-large" style="margin-left :6px; margin-right: 10px ;width: 94%; text-align: left; margin-top: 30px ">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADW0lEQVR4nO1ZTU9TQRSdLtStG8X4sVB/ggv8/gsmSo2Ksb47M/e9e6GQoEZiIroD/4CJK3VhYogLFcNawY1f/8CNW3GFARSKmDud1xIMhtJ5r9D0JJO8tK9n5szMvXPmVqkOOth6KDHvA8ugLT/VSF+0pR+AvOjbDCB/9t9FWg90qa0GQD4LSBNgaUkjr2ykybtg+bUxyZlWj18hlo9q5MlVA6xoS+8AaShC7k6SZC8i7pAmz8YkxzXyDUCecu/Wf/cmIjrSEhFguBcs/XSzizwHSKNRVN6z0d+LMG15TFua92JmTcyXVZ7QlkbqW4SfX4vjA5vlMqZ8UCOPr1qduyoPaEv3fYd/5FkpVQjBC5YGwdJyLmLAcK8P1GUTc09ofo1UTMWA7buksgrsekzQ7Uw6cWJ4uBYzpv9wFh1MpjGhskUhjRlAmgh+TrhZsjR/neiQyhiSPCQTauSVCPl0MGKZGT9DoyonuNSMbou9Cmg73IldaeScaBbunEGuiL2R56YJo5i0n5m3KmdopOlq30mpeTJn8ty2GlI5AyzdrAqhx02TORdbDbpulTOspZPeAn1smkysuBOSY3zU+tYDXX5FvjdPhvxbyIrF4k6VM8rl8i7vJH61hRCNPNsWWwuQvgYLdrkUBRldI33H/ad8jEy3RfoFy48CkDH4FDgVZHQN9U3v/YqcD7JPU4sSxCo0alEsLZVKg7uDkEq1o+p+eSwI4Ub6RH7gM9Z4QNK+E550IW8bbwwdC0qeWnk/Q0Hu6eugoJFe+IPwZXB2uXbKweTFDKuMAMh3fHKZAejbn0knUndKiw9SKAjNHxm+mBYfTMznVJaQUk1djFuZENusICtRr6DQslRsVNZIxaQxI0W2zXJJ8khjYk2raEyuqKwhdadazEjZ0/JYI+eMvOtT7EJqDNfUg52YXMqokgBWZTPXsTgAsRbuUqQHusQ1S5Nn+QyQb/krbG3QUmKSwJYVaJkYgZRspNrRyN8Kcj0A5Gdrzeh6YiCryuP6tiIpAfITbemTpFA/4DlA/gaWPwDSQxnU/64FPju2VkzgOvDSvwmArqp2EQN5pObQ0O0kxsTc0/ZidB6HZiZikBc7YrZFArA0orYjwCYX0m0GyPfUdoaJuSe3v7M76EA5/AVk6Osx7S8vQwAAAABJRU5ErkJggg==" alt="Cari Kueh" style="padding-bottom:3px;margin-right:8px;text-align:center; width:25px">
                                Cari
                            </a><br>
                            <a href="index.php" class="w3-bar-item w3-button w3-round w3-large" style="margin-left :6px; margin-right: 10px ;width: 94%; text-align: left; color: #181513;">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAABpUlEQVR4nO1bQUoEMRDML/QPih72EfoLMZ2Um1b8gPgG96DCnHyZ+guV3UNLEFFkJ8m6C7KxGnKaYSZddLqrq4lzW2gCvZaYXgRqY8vHtBDozPVoAn0tOf8NhDfXo0mD85/L9WhScZAAgBFgPAJgDjAmQbAKmOvRhGVQt5MHnKjuhpAmpZXf6TICBHrsofMqf4fOQzg/6g4Aj3S/Aoe/6w+AqEMrAPndrgHwSxwMSCAAYAQYjwCYA4xJMLIKDKWKwjII8gAjEQKZoJEKg72A/aZK/In5bW2GTs8uDvOUNW9qbOX+PQseXQIgUZ+bevis9sjlTn8AoH0SmzW9rgHwy8P//wDgKs8JQGAETMYiiUcgMgcMTIJgFTCWQZAHGIlQJBMcfvIEUmGwFwCbIbAbNLbDoB5gFEQiFaFhUypVm+5VMEpioCZoFEVBVdgoi4NzAatVCc4FQudzAdnQcLQ6aV4BgNpaGwD/cQu7EQDdK2x6tsLGi7e+azfHv4BMi7UBkJhu8i3s2o8E6aH4HUkHHumpuvGoj3463a/s6arl+ryPeltz8B08HyWRfLUk0QAAAABJRU5ErkJggg==" alt="external-bar-cryp-finance-line-line-icons-royyan-wijaya-4" style="padding-bottom:3px;margin-right:8px;text-align:center; width:25px">
                                Statistik Resipi
                            </a><br>
                            <a href="index.php" class="w3-bar-item w3-button w3-round w3-large" style="margin-left :4px; margin-right: 10px ;width: 94%; text-align: left; color: #181513;">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC7UlEQVR4nO2YPWgUURDHX2yiVoKiqFgYBUVE0EIsREUUlKBWFhriZWfem92ZyyVGjBIsItiLvSIIQbEWBG1sJJVaih8QtUmMVSxihMQoj+SSycUEvX13t4H9wYNj3+5/Zm7fm5l9xuTk5OTkZBGi0g4kYT8i5hazkkBKLoLjn0jy2w//28ZywawEEHkfkkyUnZ8bjn/4OZNFCoXCanDcDSRvFzrOr9HJG33N3xNR8bJ/xmSByPFRJP686B+fCeAMuOTs3+aA5AvGxWMNdR6sdCDJVIVj4+D4BTq+Zoxp8gMd9/lrfq4ikCkkjhrjPHGrdh5IhsGKO9/Ts2apZ4horSUmdDyigwDi1ro6Xyh0r/MOqyzzkog2/Ovz/l7/DKrgvaapF0DSO2+ch6oxPvMn8JAKotfUCyB+P2fYSlvVOlba5tOsvDP1oL1YXK8LVKlUaq5Wq1QqNeua8T/LsGqsTY6r4jSYVg8dD5b1vLapNQteO/FAaj3HD+cCqEe74Suu2sC30+ohyR21DzrDeLmcQce31BLqC6B3Q+ndDOPlcgaJB8oGo5gxrR5YceoNPDC1Rm+6yPGJ1Hpx8aQuiKbWgJPRssEkSTam1UPs2qSW0IipJZfieKsu/6F0gfhrWdfbCKW72JCTdtWEPQuny8/rkkqR5Kl63b5dDgIQX1ep+Uko3QojcgRJpsstsLWd20MeAIDjX7Pa0xHJYRMS/1UFJGOqAj+qQXp+rPbXmI3lXBBha5ND4HhyPtXJaC02WgfzNiT+plLqJMbxwaB53/fvkCT7TY3ooOIBdPIpWF2AJNmrss5EyHW/FBFzi26xozjeEyptNmRAig+mBZ+ODQvA8dWqA0CUnUD8sWEBOPngU6ypB/39/avQ8XflwKnyXOSS0zpF+ntNFgEn95Wj40B8d2aoAy0n90xWAShu0Y3ZovVMMkxEm02WIercXXmgO+v8K0iSXWaF0OQPfYH4Cjrp8X3U7DlpTk5OTo7JFH8A2rgNKR9hmJYAAAAASUVORK5CYII=" alt="appointment-reminders" style="padding-bottom:3px;margin-right:5px;text-align:center; width:30px">
                                Notifikasi
                            </a>
                            <a href="index.php" class="w3-bar-item w3-button w3-round w3-large" style="margin-left :6px; margin-right: 10px ;width: 94%; text-align: left; color: #181513;">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABEElEQVR4nO2aMQ4CIRBFuYceyFNswRc2TOKRLOxMLPVEa6XGQi+gMbpZCxKbAYT8l9Ay+8KfKWCNIZWyXK7m1oUdvNzh5ZF7GTUJL9cSAtAU+ZzEw/qw7/p+ZjICTZExTrklUojobVayNiKbwcvC+nBU7QUnw2vfvCLvovqN7WTIK5IgbkhdhyJVnIhrp0cW6jKuwNTKBSgSgSeiABitCIyWAmC0IjBaCoDRisBoKQBGKwKjpQAYrQiMlgJgtCJMFwRhbb1cktye/FhGgxIfjpQiJd5HVBlFqpb4Fnk9wZmawZTVQ9UyaK3Z0YqI5dT6E6yTUxtTy8mmianV9f0MPpyrb/bppxrZwoVb1SLE5OEJ3fVbDkbibuIAAAAASUVORK5CYII=" alt="book-stack" style="padding-bottom:3px;margin-right:8px;text-align:center; width:25px">
                                Koleksi Anda
                            </a><br>

                            <p class="w3-small" style="padding-left: 5px;">Untuk mulakan perkongsian anda dan simpan resipi yang anda minat, sila <a href="register.php">daftar atau log masuk.</a></p>



                        </div>

                        <div class="w3-round-large w3-border" style="margin-left:15.6%;"> <!--main content-->
                            <!--TOP NAVIGATION-->
                            
                            <div class="w3-container w3-border-top w3-round-large w3-rest w3-white w3-row " style="width: 83.4%; position: fixed; padding: 8px;">
                                
                                <div class="w3-cell w3-left" style="width:35%;"> <!--IF CONDITION HERE (search hidden)-->

                                    <form class="" method="GET" action='purchase_listing.php'>
                        
                                        <div class="w3-col w3-round w3-white w3-border w3-round-xxlarge w3-padding">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAADW0lEQVR4nO1ZTU9TQRSdLtStG8X4sVB/ggv8/gsmSo2Ksb47M/e9e6GQoEZiIroD/4CJK3VhYogLFcNawY1f/8CNW3GFARSKmDud1xIMhtJ5r9D0JJO8tK9n5szMvXPmVqkOOth6KDHvA8ugLT/VSF+0pR+AvOjbDCB/9t9FWg90qa0GQD4LSBNgaUkjr2ykybtg+bUxyZlWj18hlo9q5MlVA6xoS+8AaShC7k6SZC8i7pAmz8YkxzXyDUCecu/Wf/cmIjrSEhFguBcs/XSzizwHSKNRVN6z0d+LMG15TFua92JmTcyXVZ7QlkbqW4SfX4vjA5vlMqZ8UCOPr1qduyoPaEv3fYd/5FkpVQjBC5YGwdJyLmLAcK8P1GUTc09ofo1UTMWA7buksgrsekzQ7Uw6cWJ4uBYzpv9wFh1MpjGhskUhjRlAmgh+TrhZsjR/neiQyhiSPCQTauSVCPl0MGKZGT9DoyonuNSMbou9Cmg73IldaeScaBbunEGuiL2R56YJo5i0n5m3KmdopOlq30mpeTJn8ty2GlI5AyzdrAqhx02TORdbDbpulTOspZPeAn1smkysuBOSY3zU+tYDXX5FvjdPhvxbyIrF4k6VM8rl8i7vJH61hRCNPNsWWwuQvgYLdrkUBRldI33H/ad8jEy3RfoFy48CkDH4FDgVZHQN9U3v/YqcD7JPU4sSxCo0alEsLZVKg7uDkEq1o+p+eSwI4Ub6RH7gM9Z4QNK+E550IW8bbwwdC0qeWnk/Q0Hu6eugoJFe+IPwZXB2uXbKweTFDKuMAMh3fHKZAejbn0knUndKiw9SKAjNHxm+mBYfTMznVJaQUk1djFuZENusICtRr6DQslRsVNZIxaQxI0W2zXJJ8khjYk2raEyuqKwhdadazEjZ0/JYI+eMvOtT7EJqDNfUg52YXMqokgBWZTPXsTgAsRbuUqQHusQ1S5Nn+QyQb/krbG3QUmKSwJYVaJkYgZRspNrRyN8Kcj0A5Gdrzeh6YiCryuP6tiIpAfITbemTpFA/4DlA/gaWPwDSQxnU/64FPju2VkzgOvDSvwmArqp2EQN5pObQ0O0kxsTc0/ZidB6HZiZikBc7YrZFArA0orYjwCYX0m0GyPfUdoaJuSe3v7M76EA5/AVk6Osx7S8vQwAAAABJRU5ErkJggg==" alt="Cari Kueh" style="padding-bottom:3px;margin-right:8px;text-align:center; width:25px">
                                            <input type="text" class="w3-cell w3-input" style="width: 85%; height: 25px;" placeholder="Cari kuih-muih dan resipi">
                                        
                                        </div>
                                    </form>

                                </div>
                                <div class="w3-cell w3-right">  <!--KONGSI-->
                                    <a href="share.php" class="w3-bar-item w3-button w3-round-large " style="background: #228B22; margin-left :6px; margin-right: 10px ;width: 94%; text-align: left; color: white;">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADvElEQVR4nO2bSWgUQRSG2yVxOYiCKHhwQVExIm45KUZPguLFs6JeRczJgwt4c01UhLiBBsQtghqNUS8SvKiI6EURFBHcBUHccEvySWHN8KbSy3S6ZqZ67O+S0PW6qv6/p6pra8+rYoABwHRgMVAHDPT+B/gnfD3wkkLeA5uAwV61AtQAZwnnBlAblVED0Aa8AbqpDL+B3THFXzTy+Azc138lzWGZHMUdviYQfwwYrtOHA60i7Rcw1i8jl8SrSu4sQnwtcMm4d2+ASY9EzGq/n72kHZgX2V4qSLHiRfx+EbfVTGyT4j3H0eLbixWv7zklYjeaiarDyzHPc1/85Zji1Zjgh4ifbwbI3r62ysRPBF6I+DtqvGAG5fHcFn/FEN8UU/wXYIZfoNMGWBKvWBEUnMdzDGAI0EFy8YrWVBmAHfF/xP+qr5uUCgO0+KsJxX/TM8IH4toG5w2wKL5Bp+0Q1w84bUDAq25fxD3jgeci/juwJGAU2HeS5YoB+sl32nryOn0Y8FSkr3XSAGAocM2yeLVAcsJIH+2cASUUf8TIs3AS5IIBWvz1Mog/H7g2SIUM0B1eZ5nE14RlmseyxrAyBxnT8FKJPxe5GIrAosaoMpuNih7sh/hFEeJPK6OLqUweS/qiyltHIWfC1u77Kf5kUeIV8i6vxADT9EAlx031/k8wyFHiW3wMLX4PgDIZoCoF3BXFPQNG9PfJ65gthvjjsXeCKJ8B20RRP8OW34DJUeJ13EVjOTz+NhhlMACYozc8cjSGxM7X21mh4kWTugBs7rPU5ZgBXaKYrqDKAkvVpoixjOUr3mbl8pQofyVKLlDM8olRnVmj8St5C8wtRZ0KKKUBWpjs+Pb7xIzxGQ4/BibYrk8lDFgpsv8EjDTMWQN8MMTfAkbZrkulDLgnst8lrqutt9uGcNU8ttvcxwf26E50d9kNAGYar71xwGw9UOkxxD/ps2Njpw5qo1XxqxIGNImsH+p23msIV53ePrVyY7PsWNoogQF61PeOYHr0NHWKrTJdM2B5gPBeva1dZ6ssVw1YZQj/qKfAU22V4boBQ3UfoMbny0JXZKrRAFfIDBAkcymlZAYIkrmUUjIDBMlcSimZAYJkLqWUzABBMpdSSmaAIJlLKSUzQBDmUncaDkv38wBGju6wwDdpOS4fB6Be6HoVFnhOBHZ4VYLxRcnpsMBFsq3ok9n1aWwO+mdf73PGeGHUjYepXlqKca4GOET10RL3tMhC/QXm6wp+OJkEVedXevdpQdHCMzK8/4q/u2PEUlJFCNwAAAAASUVORK5CYII=" alt="create-new--v2" style="padding-bottom:3px;margin-right:8px;text-align:center; width:22px">
                                        Kongsi
                                    </a><br>

                                </div>

                            <?PHP
                                if(empty($_SESSION['username'])){
                            ?>

                                    <div class="w3-cell w3-right" style="margin-right: 15px;">  <!--LOGIN (HIDDEN)-->
                                        <a href="login.php" class="w3-bar-item w3-button w3-round-large w3-border" style="margin-left :6px ;width: 94%; text-align: left;">
                                            LogMasuk
                                        </a><br>

                                    </div>

                            <?PHP 
                                }else{
                            ?> 
                            
                                <div class="w3-cell w3-right" style="margin-right: 15px;">  <!--logout (HIDDEN)-->
                                    <a href="logout.php" class="w3-bar-item w3-button w3-round-large w3-border" style="margin-left :6px ;width: 94%; text-align: left;">
                                        LogKeluar
                                    </a><br>

                                </div>
                                <div class="w3-cell w3-right" style="margin-right: 15px; ">  <!--PROFILE (HIDDEN)-->
                                    
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFdUlEQVR4nO1aS4hcRRR9UaPJxs9CVBT8oBmDEsVPFE0iGJxEMbixySKSTt+qe9+7t6dHRlQQlMadGozfGH8ouHAnoi5cmLjwFxJJ1CgiMaMjRpB8FxLJZybK7e6Zed0zk3RVve6ZhHegYJjX737Ou1V1696Kohw5cuTIkaOjIOq7FogTg7IBSDYZlEFAOQAkR2uj9jfv0mdA/JpBiSFJeqJTGdbKjUC8zqDsNiT/+Qwg/tOgPF+K+26IThHMMsQrgGSzr9NTDuRvrC3frzqimQgTxwsN8reZO94aFShbgMq3RDMFhYGBuUD8CiCPdNr5cRJ4BIhfKhaLc6bVeUiSHiD5oVuOT7JGfLcmjq+ZFudLJLcZ5H3T5XxqShwokSzqrvOY3GuQ/51u58cjQQ4ZkuXdcZ5kUbjz/Bcgvw8kTwMKAMlSnU7W9l3JzBfoUF0G5RcXEhD5jo46D0nSY4gPejmtOwRKnyZF7eozyM85RsL+jq0Jhdpq77Pg8Q79wt7R5ky0bO/I7gAor3oY83aIMYVC4UxDvMcj4l7MPMkB532e38wiazPE73oQMLyGyjdll96iW4anU6VSqZyThfJSqXIhED8CyIcdbdicSdpsiFe4fgFry8uijAHEFVc7dLvOQLG4HWxQdnbiwEJEs3X7dIyCr4OPtMaRdSB5NuoQgPgt5/XA8IIQheucwz+WB9IySjGvNsRDhvg9Q9IPxL3Wlufp3NZ1QncJY/ovMobn21geNCjPAMnPBmWg1R5DXPJYENd6E2B8ihmG5zeFrWdBRHcda/nmJnsML/CIyD8Csj5xNpyIzhszOO6700dGioRP0zYR0SU+cryyQ9Aanh8Bs8cIQH4ikICR1XF86ag8nTI+ciwxORNgUDb4KGuSQfJhCAH1UbYtMn3krHcngOTzcAJ4WygBgPJOMAHIG30i4PdQAoD472ACSL4IJ0AGPQhgr2pPi4zwognK7lACgGSvOwEkR0JDzZAcDyaA5EgLqRudCUA+7EwAOB4+Ws8AYGVVBs43Bj+UInV5dwgg2RuSA2gCkiEBQ6Nyi8WHz/d4f48zAQZl0FXRqkrl3BAC25nDSrL7+/yrTwRscjY2jheOEUjyVIYEPDkq19rkdg8Zn3WlBAbEr2eRTTbJtIItdr3hLAflZWcCDErsYfBwugBarVbPAOLfvAlAGVQZ44TKUtURSmJbsLY8zzNcD2nXaPyL8aMBBIwdiVVmowHiLsfI1c4EhGSDhuSj8VW7OEcvP3g4vzNdVwTiT3yjKPKFQX7Bk4Dj6QWxhHwXIB9ziKKj6X5fY+HzSqq0qONNACTJ9d7hS7yt6QsiS7vkpY+vtSMwynZfO6yV67wJUGhh0Z+E5mOozukT9Rcaz/qb3iFZ76s/uCg61gn2J0CNWBKlYGK5T1vak/xuf2uH19pkcYjuTMriCkD+yj8EJ/YItAucXtQA5eNiHF8x8XflZQFT8Mso0/s/5L7/6kDkW3316rteUYd8LPN7RIZkrcdXGCqKXDwqQ3sGWticSoc+S/cV9N16SX0G9CYKAwNzDfL37RnAu0oxm0KhcHZaRv2AxAeB5LF0sVP/NsiPN541FS9UhspqN5fQe0Nqa+YEKADk8hO2q1EGdQurVqtnRS3QlLbNaTScTn+b3+dCrWkypX7eV2K+KuokgGTJxJSUdxjilZMZ7nOO199OJadBxMq6zgkpeHcuS1mbLAbkf7QNrq0vvchwsnf0y7RLgO4SDrdSt6rz1iZ3R92EtZXLXLrA2uZqn4DmlthJMKthy8wGEPe2vZLH5Xui0w1A3NvOgai+h3NvdDqiqPt67TwgHwDxT7XOcX38qP/TZ+m8IUeOHDly5MiRI0fUOfwPWUs8T7LFLncAAAAASUVORK5CYII=" alt="test-account" style="text-align:center; width:40px">
                                        <?php
                                        echo "Hi, ".$_SESSION['name'];
                                        ?>
                                    
                                </div>
                            </div>
                            <?PHP 
                                }
                            ?> 

                            <div class="w3-round-large" style="height: 92%; margin-top: 4%">
                        
                                    <!--CONTENT START HERE-->
                                <div class="w3-container w3-white" style="margin-top:5px;width: 100%; height: 100%;">

                                    <h1>All contents must be inserted here</h1>
                                    






                                    <h3>The all /div after the content must be copied extra added after include the header.php in content pages</h3>
                                </div> <!--must include in next page-->
                            </div>
                        </div>
                    </div>      
                </div>
        </head><!--until here-->