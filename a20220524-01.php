<?php
require __DIR__ . '/a20220523-07.php';// 將某一檔案包含近來
// require_once
// include __DIR__ . '/a20220523-07.php';
// include_once

$stmt = $pdo->query("SELECT * FROM address_book LIMIT 5"); // LIMIT 5的意思是取前5筆資料

// $row = $stmt->fetch(PDO::FETCH_NUM); // 以索引式陣列的格式取得資料
$rows = $stmt->fetchAll(); // 取出 RecordSet 所有資料

echo json_encode($rows);
