<?php
/* Подключение к базе данных MySQL, используя вызов драйвера */
$host = '172.18.0.2';
$db   = 'test';
$user = 'root';
$pass = 'root';

$dsn = "mysql:host=$host;dbname=$db";
try {
    $pdo = new PDO($dsn, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
	var_dump($pdo);
    // $sql = 'SELECT a, b FROM test';
    // $qwe = $dbh->query($sql);
    // $qwe->exec
    $query = $pdo->prepare('SELECT * FROM test');
	$query->execute();
	$result = $query->fetch(PDO::FETCH_ASSOC);
print_r($result);


} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}



echo phpinfo();