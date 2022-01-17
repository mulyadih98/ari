<?php

$user = 'root';
$password = '';
$host = 'localhost';
$dbname = 'interview';
function connect($host, $dbname, $user, $password): PDO {
  try {
    $dns = "mysql:host=$host;dbname=$dbname";
    return new PDO($dns,$user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  } catch (PDOException $e) {
		die($e->getMessage());
	}
}

return connect($host, $dbname, $user, $password);