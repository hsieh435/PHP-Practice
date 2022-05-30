<?php
require __DIR__ . '/a20220523-07.php';
// require_once
// include __DIR__ . '/a20220523-07.php';
// include_once

$stmt = $pdo->query("SELECT * FROM address_book LIMIT 5");

while ($r = $stmt->fetch()) {
    echo "{$r['name']} <br>";
}