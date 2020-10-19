<?php

$host     = "oracle"; // Nome do Container
$dbname   = "xe";
$user     = "system";
$password = "oracle";
$port     = "1521";

$tns = $host . ":" . $port . "/" . $dbname;
$oci = oci_connect($user, $password, $tns, "UTF8");
$sql = oci_parse($oci, 'SELECT * FROM pessoa');
oci_execute($sql);

$result = oci_fetch_array($sql, OCI_ASSOC+OCI_RETURN_NULLS);
echo "LocalHost Test DB Oracle<br><br>";
print_r($result);

?>