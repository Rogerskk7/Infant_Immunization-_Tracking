<?php
session_start();
$phone = $_SESSION['customer'];
unset($_SESSION['customer']);
header("location:customer.html");
?>