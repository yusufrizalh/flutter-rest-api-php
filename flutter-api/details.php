<?php
header('Content-Type: application/json');
include "../flutter-api/db.php";

$id = (int) $_POST['id'];

$stmt = $db->prepare("SELECT name, age FROM tb_student WHERE id = ?");
$stmt->execute([$id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode([
    'result' => $result
]);
