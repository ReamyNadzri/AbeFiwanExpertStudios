<?php include ('header.php'); ?>

<?PHP 
# memulakan fungsi session_start()
session_start();
#menyemak kewujudan data GET dan data POST
if(!empty($_GET) and !empty($_POST))
{
    # memanggil fail connection
    include ('connection.php');

    # data validation
    if(!is_numeric($_POST['deposit']) or empty($_POST['deposit']))
    {
        die("<script>alert('Error in the deposit value entered');
        window.history.back();</script>");
    }
    # data validation - had bawah 
    if($_POST['deposit']<1499)
    {
        die("<script>alert('Deposit does not reach the minimum limit of RM 1500');
        window.history.back();</script>");
    }
    # data validation - had atas
    if($_POST['deposit']>$_GET['initialPrice'])
    {
        die("<script>alert('Deposit more than the price of the car');
        window.history.back();</script>");   
    }

    # Mengira baki bayaran
    $baki_bayaran=$_GET['initialPrice']-$_POST['deposit'];
    # mengambil tarikh dari server
    $tarikh_pembelian=date("Y-m-d");

    # mengambil data GET dan mengumpukan kepada tatasusunan
    $data_get= array(
        'numPlate'=>$_GET['numPlate'],
            'carName'=>$_GET['carName'],
            'carType'=>$_GET['carType'],
            'color'=>$_GET['color'],
            'yearManufac'=>$_GET['yearManufac'],
            'initialPrice'=>$_GET['initialPrice'],
            'modelName'=>$_GET['modelName'],
            'deposit'=>$_POST['deposit'],
        'balancePayment'=>$baki_bayaran,
        'purchaseDate'=>$tarikh_pembelian );

    # arahan SQL untuk menyimpan data pembelian
    $arahan_sql_simpan = "insert into purchase
    (customer_ID,numPlate,purchaseDate,deposit,balancePayment)
    values
    ('".$_SESSION['customer_ID']."','".$data_get['numPlate']."','$tarikh_pembelian','".$data_get['deposit']."','$baki_bayaran')";

    # melaksanakan proses menyimpan dalam syarat IF
    if(mysqli_query($condb,$arahan_sql_simpan))
    {
        # jika proses menyimpan berjaya. buka laman pembeli_resit
        echo "<script>alert('Your Purchase was Successful');
        window.location.href='purchase_invoice.php?".http_build_query($data_get)."';</script>
        ";
    
    }
    else
    {
        # jika proses meyimpan gagal. Kembali ke laman sebelumnya.
        echo "<script>alert('Purchase Failed');
        window.history.back();</script>";
    }
}
else
{
    header("location:index.php");
}
?>

<?PHP include ('footer.php'); ?>