<?PHP 
# memulakan fungsi session
session_start();
# menghapuskan nilai pembolehubah session
session_unset();
# menghentikan fungsi session
session_destroy();
# membuka laman index.php
header("location:index.php");
?>
