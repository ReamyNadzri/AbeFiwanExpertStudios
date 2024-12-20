<?PHP 
# menyemak kewujudan data GET
if(!empty($_GET))
{
    # Memanggil fail connection dari folder luaran
    include ('../connection.php');

    # Mengambil data GET
    $jadual=$_GET['jadual'];
    $medan_kp=$_GET['medan_kp'];
    $kp=$_GET['kp'];

    # Arahan force menghapuskan data
    $arahan_sql_check_pembelian = "select * from purchase where $medan_kp='$kp'";

    
    $arahan_sql_hapus="delete from $jadual where $medan_kp='$kp'";
   
    if(mysqli_num_rows(mysqli_query($condb,$arahan_sql_check_pembelian))>0){
        echo"<script>
        let text = 'You cannot delete customer data who have already bought a car! Do you want to force delete customer data?';
        if (confirm(text) == true) {";

            #Arahan laksana paksaan penghapusan data di purchase
            $arahan_sql_paksaan_hapus="delete from purchase where $medan_kp='$kp'";
        
            #melaksanakan proses hapus rekod secara paksa dalam syarat IF
            if(mysqli_query($condb,$arahan_sql_paksaan_hapus))
            {
                echo"alert('Force Delete Purchase Record Successfully');";
            }else
            {
                echo"alert('Force Delete Purchase Record Failed');";
            }

          
            echo"
            } else {";
                echo"alert('Delete record cancelled');
                window.history.back();
            }

        window.history.back();</script>";
    }

    # melaksanakan proses hapus rekod dalam syarat IF
    else if(mysqli_query($condb,$arahan_sql_hapus))
    {
        echo"<script>alert('Delete record successfully');
        window.history.back();</script>";
    }
    else
    {
        echo"<script>alert('Delete record failed');
        window.history.back();</script>";
    }
}

?>