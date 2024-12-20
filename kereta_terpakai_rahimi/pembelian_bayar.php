<?PHP 
# Memanggil fail header
include('header.php'); 
# Menyemak kewujudan data pembolehubah session['nama_pembeli']
if(empty($_SESSION['nama_pembeli']))
{   # jika data tidak wujud, sistem akan membuka fail pembeli_login
    die("<script>alert('sila daftar masuk terlebih dahulu');
    window.location.href='pembeli_login.php';</script>");
}

# mengambil data GET dan mengumpukan dalam bentuk array
$data_get= array(
    'noplat'=>$_GET['noplat'],
    'jenis'=>$_GET['jenis'],
    'warna'=>$_GET['warna'],
    'tahun_keluaran'=>$_GET['tahun_keluaran'],
    'harga_awal'=>$_GET['harga_awal'],
    'nama_model'=>$_GET['nama_model']);
?>

<!-- Memaparkan maklumat -->
<div class="w3-container">
<hr>
<h4>Maklumat Pembeli</h4>
<b>Nama Pembeli : </b><?PHP echo $_SESSION['nama_pembeli'];?><br>
<b>Nokp Pembeli : </b><?PHP echo $_SESSION['nokp_pembeli'];?><br>
<b>Notel Pembeli : </b><?PHP echo $_SESSION['notel_pembeli'];?><br>
<hr>
<h4>Maklumat Kereta</h4>
<b>No Plat Kereta : </b><?PHP echo $_GET['noplat'];?><br>
<b>Nama Kereta : </b><?PHP echo $_GET['jenis'];?><br>
<b>Nama Kereta : </b><?PHP echo $_GET['nama_model'];?><br>
<b>Warna Kereta : </b><?PHP echo $_GET['warna'];?><br>
<b>Tahun Keluaran Kereta : </b><?PHP echo $_GET['tahun_keluaran'];?><br>
<b>Harga Awal Kereta : RM </b><?PHP echo $_GET['harga_awal'];?><br>
<hr>

<!-- borang untuk masukkan nilai deposit -->
<h4>Pembayaran deposit menggunakan kad kredit</h4>
<form action='pembelian_proses.php?<?PHP echo http_build_query($data_get); ?>' method='POST'>
Deposit <input type='text' name='deposit' placeholder='Minimum deposit RM1000' autofocus><br>
<input type='text' name='name_on_card' placeholder = 'Nama atas kad'><br>
<input type='text' name='card_no' placeholder = 'Nombor depan kad' maxlength='12'><br>
<input size='3' maxlength='2' type='text' name='mm' placeholder = 'MM' >            
<input size='3' maxlength='4' type='text' name='mm' placeholder = 'YYYY'>
<input size='3' maxlength='3' type='text' name='cc' placeholder = 'CCV'><br>    
<input type='text' name='alamat' placeholder = 'Alamat Bil'><br>
<input maxlength='5' type='text' name='poskod' placeholder = 'Poskod'><br>   
<hr>
<input type='submit' value='Bayar'>
</form>
</div>