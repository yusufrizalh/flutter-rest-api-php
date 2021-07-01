<?php
header('Content-Type: application/json');
include "../flutter-api/db.php";

$id = (int) $_POST['id'];
$stmt = $db->prepare("DELETE FROM tb_student WHERE id = ?");
$result = $stmt->execute([$id]);

echo json_encode([
    'id' => $id,
    'success' => $result
]);
