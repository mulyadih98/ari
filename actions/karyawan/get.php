<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pdo = require("../../db/postgresql.php");


$data = $pdo->query('select * from karyawan')->fetchAll();
echo json_encode($data);