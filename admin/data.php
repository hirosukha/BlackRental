<html>
<head>
<title>Order Data</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link href="css/fontawesome.css" type="text/css" rel="stylesheet" />
</head>
<body><br><br><br><br>
<h2>Order Data</h2>
<div class='container'>
<table class='zebra-table'>
<tr bgcolor="#999999">
	
	<th>Name</th>
	<th>Email</th>
	<th>Address</th>
	<th>Telephone</th>
	<th>Province</th>
	<th>City</th>
	<th>Cars</th>
	<th>Delivery</th>
	<th>Cost</th>
	<th>Status</th>
</tr>
<?php include "koneksi.php";

$view=mysql_query("select * from rental");
while ($row=mysql_fetch_array($view))
{

echo"<tr>
	
	<td>$row[order_nama]</td>
	<td>$row[order_email]</td>
	<td>$row[order_alamat]</td>
	<td>$row[order_telepon]</td>
	<td>$row[order_provinsi]</td>
	<td>$row[order_kota]</td>
	<td>$row[order_mobil]</td>
	<td>$row[order_jenis]</td>
	<td>$row[order_harga]</td>
	<td>$row[order_status]</td>
	<td><a href=update.php?order_nama=$row[order_nama] class='btn btn-primary btn-large btn-block'>Edit</a></td>
	<td><a href=delete.php?order_nama=$row[order_nama] class='btn btn-primary btn-large btn-block'>Delete</a></td>
</tr>"; 
}
?>
</table>
</div>
</body>
</html>
