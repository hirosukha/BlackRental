<?php
include "session.php";
?>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/grid.css" />
</head>
<body>
<div class="col-sm-12 col-md-3 rizkyabdul">
	<div id="menu">
	<h1 style="color:white;">ADMIN PANEL</h1><br>
		<a href="form.html" target="cover">Input Order</a> <br><br>
		<a href="data.php" target="cover">Order Data</a> <br><br>
		<a href="form_admin.html" target="cover">Add Admin</a> <br><br>
		<?php
		session_start();
		if (empty($_SESSION[username]) AND empty($_SESSION[password])){
		 echo 'Silahkan Login Terlebih dahulu <a href="login.html">Login</a>';
		}else{
		 echo '<font color="white">Selamat Datang <b>'.$_SESSION[username].'</b></font>';
		}
		?> <br>
		<a href="logout.php" >Logout</a> <br>
	</div>
</div>

<div class="col-sm-12 col-md-9 rizkyabdul2">
	<iframe src="data.php" name="cover" style="boder:0px;width:100%;height:665.5px;"></iframe>
</div>
</body>
</html>
