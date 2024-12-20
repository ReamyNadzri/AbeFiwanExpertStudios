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
        die("<script>alert('Ralat pada nilai deposit yang dimasukkan');
        window.history.back();</script>");
    }
    # data validation - had bawah 
    if($_POST['deposit']<1000)
    {
        die("<script>alert('Deposit tidak sampai had minimum Rm 1000');
        window.history.back();</script>");
    }
    # data validation - had atas
    if($_POST['deposit']>$_GET['harga_awal'])
    {
        die("<script>alert('Deposit lebih dari harga Kereta');
        window.history.back();</script>");   
    }

    # Mengira baki bayaran
    $baki_bayaran=$_GET['harga_awal']-$_POST['deposit'];
    # mengambil tarikh dari server
    $tarikh_pembelian=date("Y-m-d");

    # mengambil data GET dan mengumpukan kepada tatasusunan
    $data_get= array(
        'noplat'=>$_GET['noplat'],
        'jenis'=>$_GET['jenis'],
        'warna'=>$_GET['warna'],
        'tahun_keluaran'=>$_GET['tahun_keluaran'],
        'harga_awal'=>$_GET['harga_awal'],
        'deposit'=>$_POST['deposit'],
        'nama_model'=>$_GET['nama_model'],
        'baki_bayaran'=>$baki_bayaran,
        'tarikh_pembelian'=>$tarikh_pembelian );

    # arahan SQL untuk menyimpan data pembelian
    $arahan_sql_simpan = "insert into pembelian
    (nokp_pembeli,noplat,tarikh_pembelian,deposit,baki_bayaran)
    values
    ('".$_SESSION['nokp_pembeli']."','".$data_get['noplat']."','$tarikh_pembelian','".$data_get['deposit']."','$baki_bayaran')";

    # melaksanakan proses menyimpan dalam syarat IF
    if(mysqli_query($condb,$arahan_sql_simpan))
    {
        # jika proses menyimpan berjaya. buka laman pembeli_resit
        echo "<script>alert('Pembelian Berjaya');
        window.location.href='pembelian_resit.php?".http_build_query($data_get)."';</script>";
    }
    else
    {
        # jika proses meyimpan gagal. Kembali ke laman sebelumnya.
        echo "<script>alert('Pembelian gagal');
        window.history.back();</script>";
    }
}
else
{
    header("location:index.php");
}
?>