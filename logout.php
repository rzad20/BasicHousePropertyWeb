<?php

session_start();
session_destroy();

echo "<script>window.open('customer.php','_self')</script>";
?>