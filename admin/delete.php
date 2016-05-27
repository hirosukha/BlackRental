<html>
<head>
<title>Delete</title>
</head>
<body>
<?php
	$order_nama = $_GET["order_nama"];

	$host = "localhost";
	$user = "root";
	$pswd = "";
	$db = "db_blackrental";

	$idkoneksi=@mysql_connect($host,$user,$pswd) or die("Koneksi dengan <b>$db</b> gagal ");
	$iddatabase=mysql_select_db($db);

	$sqlstr="delete from rental where order_nama='$order_nama'";
	$del=@mysql_query($sqlstr,$idkoneksi);

	if($del){
	echo "<script>alert('Data telah di hapus')</script>";
	include "data.php";
}else{
	echo "<script>alert('Gagal dihapus')</script>";
	include "data.php";
}
?>

<?php
	@mysql_close($idkoneksi);
?>
</body>
</html>
