<?php

/* Set oracle user login and password info */
$dbuser = "shjo"; /* your deakin login */
$dbpass = "gaighat#75"; /* your oracle access password */
$db = "SSID"; 
$connect = oci_connect($dbuser, $dbpass, $db);
$query = "SELECT * FROM PRODUCTS ";//where id =1
$stmt = oci_parse($connect, $query); 
oci_execute($stmt);
echo "<pre>";print_r(oci_fetch_array($stmt));
$rows = array();
$numrows=oci_fetch_all($stmt, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
echo "<pre>";var_dump($rows);
?>