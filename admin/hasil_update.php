<html>
<head>
<title>Order Data</title>
</head>
<body>
<?php
	include"koneksi.php";

	$edit=mysql_query("update rental set order_nama='$_POST[order_nama]',order_email='$_POST[order_email]',order_alamat='$_POST[order_alamat]',order_telepon='$_POST[order_telepon]',order_provinsi='$_POST[order_provinsi]',order_kota='$_POST[order_kota]',order_mobil='$_POST[order_mobil]',order_jenis='$_POST[order_jenis]',order_harga='$_POST[order_harga]',order_status='$_POST[order_status]' where order_nama='$_POST[order_nama]'");
	if($edit)
		echo("Update berhasil disimpan<br>");
	else
	{
		echo("Update gagal disimpan <br>");
	}
?>

</body>
</html>
