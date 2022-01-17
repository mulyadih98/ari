<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pdo = require("../../db/postgresql.php");
$sql = "UPDATE karyawan SET nama=?,divisi=? WHERE nip=?";
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);

$data = $pdo->prepare($sql)->execute([$input['nama'],$input['divisi'],$_GET['nip']]);
echo json_encode($data);