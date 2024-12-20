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

    # Arahan menghapuskan data
    $arahan_sql_hapus="delete from $jadual where $medan_kp='$kp'";
    $arahan_sql_check_pembelian = "select * from purchase where $medan_kp='$kp'";

    $laksana_arahan=mysqli_query($condb,$arahan_sql_check_pembelian);

    if(mysqli_num_rows($laksana_arahan)>0){
        echo"<script>alert('You cannot delete customers who have already bought a car! System Abort');
        window.history.back();</script>";
    }else{

    # melaksanakan proses hapus rekod dalam syarat IF
    if(mysqli_query($condb,$arahan_sql_hapus))
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
}
?>