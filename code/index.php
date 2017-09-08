<?php
$host = '172.18.0.3';
$db   = 'test';
$user = 'root';
$pass = 'root';

$dsn = "mysql:host=$host;dbname=$db";
try {
	$pdo = new PDO($dsn, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

	$sql = "CREATE TABLE test (
	a INT NOT NULL AUTO_INCREMENT,
	b varchar(40), PRIMARY KEY (a))";
	$pdo->exec($sql);

	$sql2 = "INSERT INTO test (b) VALUES ('test')";
	$pdo->exec($sql2);

	$query = $pdo->query("SELECT * FROM test");
	$query->execute();
	$result = $query->fetch();
	print_r($result);
} catch (PDOException $e) {
	echo 'Подключение не удалось: ' . $e->getMessage();
}
echo phpinfo();