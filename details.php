<?php
header('Content-Type: application/json');
include "../api-flutter/db.php";

$id = (int) $_POST['id'];

$stmt = $db->prepare("SELECT * FROM student WHERE ID = ?");
$stmt->execute([$id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode([
'result' => $result
]);