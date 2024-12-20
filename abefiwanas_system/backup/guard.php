<?PHP
$namafail = basename($_SERVER['PHP_SELF']);
if(empty($_SESSION['customerName']));
{
    die("<script>alert('Please login first!');
    windows.location.href='logout.php'</script>");
}
?>