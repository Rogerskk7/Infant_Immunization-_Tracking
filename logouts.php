<?php
session_start();
$phone = $_SESSION['staff'];
unset($_SESSION['staff']);
header("location:staff.html");
?>