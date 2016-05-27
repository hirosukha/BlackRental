<html>
<head>
<title>Update</title>
</head>
<body>
<h2>Update Data</h2>	
<form action='hasil_update.php' method='post'>
<table>
<?php
include "koneksi.php";

	$edit=@mysql_query("select * from rental where order_nama='$_GET[order_nama]'");
	$row=mysql_fetch_array($edit);
	{
echo"
<tr>
	<td>Nama</td>
	<td>: <input type='text' name='order_nama' size='20' value='$row[order_nama]'></td>
</tr>
<tr>
	<td>Email</td>
	<td>: <input type='text' name='order_email' size='20' value='$row[order_email]'></td>
</tr>
<tr>
	<td>Alamat</td>
	<td>: <input type='text' name='order_alamat' size='20' value='$row[order_alamat]'></td>
</tr>
<tr>
	<td>Telepon</td>
	<td>: <input type='text' name='order_telepon' size='20' value='$row[order_telepon]'></td>
</tr>
<tr>
	<td>Provinsi</td>
	<td>: <input type='text' name='order_provinsi' size='20' value='$row[order_provinsi]'></td>
</tr>
<tr>
	<td>Kota</td>
	<td>: <input type='text' name='order_kota' size='20' value='$row[order_kota]'></td>
</tr>
<tr>
	<td>Mobil</td>
	<td>: <input type='text' name='order_mobil' size='20' value='$row[order_mobil]'></td>
</tr>
<tr>
	<td>Jenis Order</td>
	<td>: <input type='text' name='order_jenis' size='20' value='$row[order_jenis]' readonly='true'></td>
</tr>
<tr>
	<td>Harga Total</td>
	<td>: <input type='text' name='order_harga' size='20' value='$row[order_harga]'></td>
</tr>
<tr>
	<td>Status</td>
	<td>: <select name='order_status'>
				<option value='$row[order_status]'>Pending</option>
				<option value='Verif'>Verif</option>
		  </select></td>
</tr>
<tr>
	<td></td>
	<td>
	<input type='submit' name='send' value='Send'>
	</td>
</tr>";
}
?>
</table>
</form>
</body>
</html>

