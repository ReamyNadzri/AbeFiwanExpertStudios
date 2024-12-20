<?PHP 
# Memanggil fail header_admin.php
include ('header_admin.php');
# Memanggil fail connection dari folder luaran
include ('../connection.php');

#----------- Bahagian 2 : Proses penyimpan data-------
# Menyemak kewujudan data POST
if(!empty($_GET))
{   # mengambil data POST
    $adminName=$_GET['adminName'];
    $admin_ID=$_GET['admin_ID'];
    $adminPhone=$_GET['adminPhone'];
    $adminPass=$_GET['adminPass'];
    
    # data validation - adakah data POST yang diambil empty
    if(empty($adminName) or empty($adminPhone) or empty($admin_ID) or empty($adminPass))
    {
        die("<script>alert('Please insert all the data');
        window.history.back();</script>");
    }

    # data validation - format admin_ID betul atau tidak
    if(strlen($admin_ID)!=12 or !is_numeric($admin_ID))
    {
        die("<script>alert('Wrong Admin ID');
        window.history.back();</script>");
    }

    # Arahan untuk menyimpan data ke dalam jadual admin
    $arahan_sql_simpan="insert into admin
    (adminName,admin_ID,adminPhone,adminPass)
    values
    ('$adminName','$admin_ID','$adminPhone','$adminPass')";

    # melaksanakan proses menyimpan dalam syarat IF
    if(mysqli_query($condb,$arahan_sql_simpan))
    {
        # proses menyimpan data berjaya. papar mesej
        echo "<script>alert('Registration Success');
        window.location.href='admin_info.php';
        </script>";
    }
    else
    {
        # proses menyimpan data gagal. papar mesej
        echo "<script>alert('Registration Failure');
        window.history.back();</script>";
    }
}
# ----------- bahagian 1 : memaparkan data dalam bentuk jadual
    # arahan SQL mencari kereta yang masih belum dijual
    $arahan_sql_cari="select* from admin";
    # melaksanakan arahan sql cari tersebut    
    $laksana_sql_cari=mysqli_query($condb,$arahan_sql_cari);
?>
<!-- menyediakan header bagi jadual -->
<!-- selepas header akan diselitkan dengan borang untuk mendaftar kereta baru -->
<h4>Senarai administrator</h4>
<table class="w3-table-all" id='saiz' border='1'>
    <tr class="w3-light-blue">
        <td>Bil</td>
        <td>Admin Name</td>
        <td>Admin ID</td>
        <td>Phone Number</td>
        <td>Password</td>
        <td></td>
    </tr>
    <tr>
    <!-- menyediakan borang untuk mendaftar kereta baru -->
    <form action='' method='GET'>
        <td>#</td>
        <td><input type='text' name='adminName'></td>
        <td><input type='text' name='admin_ID'></td>
        <td><input type='text' name='adminPhone'></td>
        <td><input type='password' name='adminPass'></td>
        <td><input type='submit' value='Save'></td>
    </form>
    </tr>
    <?PHP 
    $bil=0;
    # pemboleh ubah $rekod mengambail semua data yang ditemui oleh $laksana_sql_cari
    while ($rekod=mysqli_fetch_array($laksana_sql_cari))
    {
        # sistem akan memaparkan data $rekod baris demi baris sehingga habis
        echo "
        <tr>
            <td>".++$bil."</td>
            <td>".$rekod['adminName']."</td>
            <td>".$rekod['admin_ID']."</td>
            <td>".$rekod['adminPhone']."</td>
            <td>".$rekod['adminPass']."</td>
            <td>| <a href='delete.php?jadual=admin&medan_kp=admin_ID&kp=".$rekod['admin_ID']."' onClick=\"return confirm('Confirm delete this admin?')\" >Delete</a> |
                | <a href='admin_update.php?adminName=".$rekod['adminName']."&admin_ID=".$rekod['admin_ID']."&adminPhone=".$rekod['adminPhone']."&adminPass=".$rekod['adminPass']."' onClick=\"return confirm('Confirm update admin data?')\" >Update</a> |</td>
        </tr>";
    }
    ?>
</table>
<br>
<br>
<br>