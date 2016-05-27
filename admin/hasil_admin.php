<html>
<head>
<title>Ganteng</title>
</head>
<body>
<?php
	$username = $_POST["username"];
	$password = $_POST["password"];

	$host = "localhost";
	$user = "root";
	$pswd = "";
	$db = "db_blackrental";

	$idkoneksi=@mysql_connect($host,$user,$pswd) or die("Koneksi dengan <b>$db</b> gagal ");
	$iddatabase=mysql_select_db($db);

	$sqlstr="insert into admin (username,password)values
	('$username','$password')";
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
