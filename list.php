<?php
header('Content-Type: application/json');
include "../api-flutter/db.php";

$stmt = $db->prepare("SELECT id,nama,alamat FROM customer");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);