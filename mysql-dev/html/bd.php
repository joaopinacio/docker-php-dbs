<?php

$host     = "mysql"; // Nome do Container
$dbname   = "mysql";
$user     = "root";
$password = "root";

$pdo = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM teste.pessoa;";
$consult = $pdo->query($sql);
$result = $consult->fetchAll(PDO::FETCH_ASSOC);
echo "LocalHost Test DB MySQL<br><br>";
print_r($result);

?>