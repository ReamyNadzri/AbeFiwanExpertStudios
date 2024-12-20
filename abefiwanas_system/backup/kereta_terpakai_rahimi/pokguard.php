<?PHP
$namafail = basename($_SERVER['PHP_SELF']);
if(empty($_SESSION['nama_pengguna']));
{
    die("<script>alert('Sila Daftar Masuk');
    windows.location.href='logout.php'</script>");
}
?>