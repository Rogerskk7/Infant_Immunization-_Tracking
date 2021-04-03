<?php
session_start();
$username = $_SESSION['manager'];
unset($_SESSION['manager']);
header("location:manager.html");
?>