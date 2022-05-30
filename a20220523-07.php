<?php

$db_host = 'localhost'; // 主機名稱
$db_user = 'root'; // 資料庫連線用戶
$db_pass = ''; // 連線用戶密碼
$db_name = 'mydatabase'; // 資料庫名稱

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8mb4";

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // ATTR_ERRMODE是字串，
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // 提取資料的方式，FETCH_ASSOC是關聯式陣列
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" //連線以後立刻執行
];

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
