<html>
<head>
<title>Input Data</title>
</head>
<body>
<?php

	$order_nama = $_POST["order_nama"];
	$order_email = $_POST["order_email"];
	$order_alamat = $_POST["order_alamat"];
	$order_telepon = $_POST["order_telepon"]; 
	$order_provinsi = $_POST["order_provinsi"]; 
	$order_kota = $_POST["order_kota"]; 
	$order_mobil = $_POST["order_mobil"];
	$order_jenis = $_POST["order_jenis"];
	$order_harga = $_POST["order_harga"];
	$order_status = $_POST["order_status"]; 

	$host = "localhost";
	$user = "root";
	$pswd = "";
	$db = "db_blackrental";

	$idkoneksi=@mysql_connect($host,$user,$pswd) or die("Koneksi dengan <b>$db</b> gagal ");
	$iddatabase=mysql_select_db($db);

	$sqlstr="insert into rental (order_nama,order_email,order_alamat,order_telepon,order_provinsi,order_kota,order_mobil,order_jenis,order_harga,order_status)values
	('$order_nama','$order_email','$order_alamat','$order_telepon','$order_provinsi','$order_kota','$order_mobil','$order_jenis','$order_harga','$order_status')";
	$hasil=@mysql_query($sqlstr,$idkoneksi);
	if($hasil)
	{
		echo("Data berhasil disimpan<br>");
	}
	else
	{
		echo("Data gagal disimpan <br>");
	}
	@mysql_close($idkoneksi);
?><br>
</body>
</html>