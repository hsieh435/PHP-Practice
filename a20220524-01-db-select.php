<?php
<<<<<<< HEAD
require __DIR__ . '/a20220523-07connect_db.php';
// require_once
// include __DIR__ . '/a20220523-07connect_db.php';
=======
require __DIR__ . '/connect_db.php';
// require_once
// include __DIR__ . '/connect_db.php';
>>>>>>> 0ae5a35ec893c2e184e8ed2abee3a5447aa51163
// include_once

$stmt = $pdo->query("SELECT * FROM address_book LIMIT 5");

// $row = $stmt->fetch(PDO::FETCH_NUM); // 以索引式陣列的格式取得資料
$rows = $stmt->fetchAll(); // 取出 RecordSet 所有資料

echo json_encode($rows);
