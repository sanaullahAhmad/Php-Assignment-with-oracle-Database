<?php
$dbuser = "shjo"; /* your deakin login */
$dbpass = "gaighat#75"; /* your oracle access password */
$db = "SSID";
$connect = oci_connect($dbuser, $dbpass, $db);
if(!$xml=simplexml_load_file('products.xml')){
    trigger_error('Error reading XML file',E_USER_ERROR);
}
foreach ($xml as $syn) {
    echo $syn->name;
    $query="INSERT into products  set 
                                  id                ='".$syn->id."', 
                                  name               ='".$syn->name."',
                                  cat               ='".$syn->cat."',
                                  zone               ='".$syn->zone."',
                                  color               ='".$syn->color."',
                                  price               ='".$syn->price."',
                                  pic               ='".$syn->pic."'
                                  ";
    $stmt = oci_parse($connect, $query);
    oci_execute($stmt);
}
?>