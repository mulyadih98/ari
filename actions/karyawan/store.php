<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pdo = require("../../db/postgresql.php");
$sql = "INSERT INTO karyawan VALUES (?,?,?) RETURNING nip";
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);

$data = $pdo->prepare($sql)->execute([$input['nip'],$input['nama'],$input['divisi']]);
echo json_encode($data);