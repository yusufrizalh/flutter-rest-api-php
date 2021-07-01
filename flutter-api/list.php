<?php
header('Content-Type: application/json');
include "../flutter-api/db.php";

$stmt = $db->prepare("SELECT id, name, age FROM tb_student");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
