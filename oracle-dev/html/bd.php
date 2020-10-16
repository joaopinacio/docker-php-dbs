<?php

$host     = "postgresql"; // Nome do Container
$dbname   = "postgres";
$user     = "comprasdev";
$password = "comprasdev";

$pdo = new PDO("oracle:host={$host};dbname={$dbname}", $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM teste.pessoa;";
$consult = $pdo->query($sql);
$result = $consult->fetchAll(PDO::FETCH_ASSOC);
echo "LocalHost Test DB Oracle<br><br>";
print_r($result);

?>