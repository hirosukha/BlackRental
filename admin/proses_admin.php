<html>
<head>
</head>
<body>
<?php
include"koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
if(empty($username)){
	echo"<script>alert<'Username belum di isi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=login.html'>";
}else if(empty($password)){
	echo"<script>alert<'Password belum di isi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=login.html'>";
}else{
session_start();
$login = mysql_query("select * from admin where username='$username' and password='$password'");
if(mysql_num_rows($login)>0){
	$_SESSION['username']=$username;
	header("location:index.php");
}else{
echo "<script>alert('Username atau Password salah')</script>";
		}
	}
?>
<script>document.location.href="login.html"
</script>
</body>
</html>