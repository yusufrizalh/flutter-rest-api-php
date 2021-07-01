<?php
header('Content-Type: application/json');
include "../flutter-api/db.php";


$name = $_POST['name'];
$age = (int) $_POST['age'];

$stmt = $db->prepare("INSERT INTO tb_student (name, age) VALUES (?, ?)");
$result = $stmt->execute([$name, $age]);

echo json_encode([
    'success' => $result
]);
