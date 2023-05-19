<?php
header('Content-Type: application/json');
include "../api-flutter/db.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = (int) $_POST['alamat'];

$stmt = $db->prepare("UPDATE customer SET nama = ?, alamat = ? WHERE id = ?");
$result =  $stmt->execute([$nama, $alamat, $id]);

echo json_encode([
'success' => $result
]);