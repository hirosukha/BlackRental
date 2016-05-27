<?php
session_start();

unset($_SESSION['username']);
unset($_SESSION['password']);

session_destroy();
?>
<script>document.location.href="../index.html"
</script>
<?
include "index.html";
?>