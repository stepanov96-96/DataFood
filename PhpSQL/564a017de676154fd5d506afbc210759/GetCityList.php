<?php

#$DBuser = $_POST['DBuser'];
#$DBpass = $_POST['DBpass'];
$DBuser = 'stepanev_test';
$DBpass = '123456789qwertY';
#$SeriaID = $_POST['SeriaID'];

try {
$pdo = new PDO('mysql:host=127.0.0.1;dbname=stepanev_test', $DBuser, $DBpass);

$stmt = $pdo->prepare("SELECT * FROM City");
$stmt->execute([$SeriaID]);
$data = $stmt->fetchAll();
echo json_encode($data);
} catch (\PDOException $e) {
throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>