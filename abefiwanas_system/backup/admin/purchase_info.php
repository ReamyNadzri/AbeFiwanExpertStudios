<?PHP
# Memanggil fail header_admin.php
include ('header_admin.php');
# Memanggil fail connection dari folder luaran
include ('../connection.php');

# arahan SQL mencari kereta yang masih belum dijual
$arahan_sql_cari="select* from customer,purchase,car,model
where purchase.customer_ID=customer.customer_ID AND
purchase.numPlate=car.numPlate and
car.model_ID=model.model_ID";
# arahan SQL mencari kereta yang masih belum dijual
$laksana_sql_cari=mysqli_query($condb,$arahan_sql_cari);
?>
<!-- menyediakan header bagi jadual -->
<h4>List of Customer</h4>
<table class="w3-table-all" id='saiz' border='1'>
    <tr class="w3-light-blue">
    <td style="text-align: center;">Bil</td>
        <td style="text-align: center;">Name</td>
        <td style="text-align: center;">Customer ID</td>
        <td style="text-align: center;">Phone Number</td>
        <td style="text-align: center;">Plate Number</td>
        <td style="text-align: center;">Car Name</td>
        <td style="text-align: center; width: 150px;">Car Type</td>
        <td style="text-align: center;">Model</td>
        <td style="text-align: center;">Colour</td>
        <td style="text-align: center;">Year Manufacture</td>
        <td style="text-align: center;">Initial Price</td>
        <td style="text-align: center; width: 117px;">Purchase Date</td>
        <td style="text-align: center;">Deposit</td>
        <td style="text-align: center;">Balance Payment</td>
        
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
            <td>".$rekod['customerName']."</td>
            <td>".$rekod['customer_ID']."</td>
            <td>".$rekod['customerTelNum']."</td>
            <td>".$rekod['numPlate']."</td>
            <td>".$rekod['carName']."</td>
            <td>".$rekod['carType']."</td>
            <td>".$rekod['modelName']."</td>
            <td>".$rekod['color']."</td>
            <td>".$rekod['yearManufac']."</td>
            <td>".$rekod['initialPrice']."</td>
            <td>".$rekod['purchaseDate']."</td>
            <td>".$rekod['deposit']."</td>
            <td>".$rekod['balancePayment']."</td>
        </tr>";
    }
    ?>
</table>
<br>
<br>
<br>