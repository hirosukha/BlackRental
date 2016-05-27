<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])or($_SESSION['password']))
{
	header('location: login.html');
}
else{
	
}
?>
