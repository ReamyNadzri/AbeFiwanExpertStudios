<!--Memanggil fail header-->
<?PHP include('header.php'); ?>

<!--Menyediakan form bagi daftar pengguna baru-->

<div class="w3-row w3-border">
 <div class="w3-half w3-container">

<p><h2>User Registration</h2></p>
<!-- Add an ID to the form element so that it can be easily accessed with JavaScript -->
<form action="" class="w3-container w3-round-xlarge w3-margin w3-card-4 w3-light-grey" method='POST' id='registrationForm'><br>
Full Name <input class="w3-input w3-border w3-round-large" type='text' name='customerName' required autofocus><br>
<!-- Remove the pattern, oninvalid, and oninput attributes from the Identity Number input field -->
Identity Number <input class="w3-input w3-border w3-round-large" type='number' name='customer_ID' placeholder='example: 123456789012' required><br>
Phone Number <input class="w3-input w3-border w3-round-large" type='text' name='customerTelNum'><br>
Password <input class="w3-input w3-border w3-round-large" type='password' name='customerPass'><br>
<input class="w3-button w3-round-large w3-border" type='submit' value='Register'>
<a href="cust_regis.php" class="w3-button w3-border w3-round-large">Reset</a><br><br>
</form> 

<div class="w3-margin w3-card-4 w3-half w3-container w3-border w3-round-large w3-light-grey">
<h5>Dapatkan promosi dan potongan harga dengan menggunakan code A21 dengan 5% off</h4>
</div>
<br>
<br>
</div>
</div>
<br>

<script>
  // Get a reference to the form element
  var form = document.getElementById('registrationForm');

  // Add an event listener to the form's submit event
  form.addEventListener('submit', function(event) {
    // Get a reference to the Identity Number input field
    var identityNumberInput = form.elements['customer_ID'];

    // Check if the input value is exactly 12 digits long
    if (identityNumberInput.value.length !== 12) {
      // If it's not, display an error message and prevent the form from being submitted
      alert('Please enter 12 digits only');
      event.preventDefault();
    }
  });
</script>

<?PHP 
# menyemak kewujudan data POST
if (!empty($_POST))
{
 # memanggil fail connection
 include ('connection.php');

 # mengambil data POST
 $customerName=$_POST['customerName'];
 $customerTelNum=$_POST['customerTelNum'];
 $customer_ID=$_POST['customer_ID'];
 $customerPass=$_POST['customerPass'];

 # -- data validation --
 if(empty($customerName) or empty($customerTelNum) or empty($customer_ID) or empty($customerPass))
 {
 die("<script>alert('Please complete the required information!');
 window.history.back();</script>");
 }

 # --- data validation
 if(strlen($customer_ID)!=12 or !is_numeric($customer_ID))
 {
 die("<script>alert('Error with the Customer ID!');
 window.history.back();</script>");
 }
 
 # arahan SQL untuk menyimpan data
 $arahan_sql_simpan="insert into customer
 (customer_ID,customerName,customerTelNum,customerPass)
 values
 ('$customer_ID','$customerName','$customerTelNum','$customerPass')";

 # melaksanakan proses menyimpan dalam syarat IF
 if(mysqli_query($condb,$arahan_sql_simpan))
 {
 # jika proses menyimpan berjaya. papar info dan buka laman pembeli_login.php
 echo "<script>alert('Registration Successfull');
 window.location.href='cust_login.php';</script>";
 }
 else
 {
 # jika proses menyimpan gagal, kembali ke laman sebelumnya
 echo "<script>alert('Registration Failed');
 window.history.back();</script>";
 }
}
?>
<div class="w3-container w3-white">
<?PHP include ('footer.php'); ?>
</div>
