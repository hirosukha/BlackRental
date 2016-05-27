<html>
<head>
	<title>Black Rental</title>
	<br>
	<link href='img/favi.png' rel='shortcut icon' type='image/vnd.microsoft.icon'/>
	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link href="css/fontawesome.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="index.html" class="navbar-brand">BLACK RENTAL</a>
    </div>
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="cars.html">Cars</a></li>
			<li><a href="how.html">How</a></li>
			<li><a href="rent.html">Rent</a></li>
			<li class="active"><a href="#">Data</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="admin/login.html"><i class="fa fa-sign-in"></i> Login</a></li>
        </ul>
    </div>
</nav><br><br>
<center><h1>Order Data</h1>
<div class='container'>
<table class='zebra-table' width='100%'>
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
</tr>"; 
}
?>
</table>
</div></center>
<div class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="container">
		<p class="navbar-text pull-left">&#169; Copyright Rizky Abdul & Syams Dani</p>
		</div>
</div>
</body>
</html>
