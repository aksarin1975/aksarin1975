<?php
$con= mysqli_connect("localhost","aksarinc_teat1200","PT190718ak","aksarinc_test1200") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
?>