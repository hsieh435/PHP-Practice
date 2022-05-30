<?php
// header('Content-Type: text/plain'); // 設定檔頭, 告訴用戶端內容為純文字

$ar = [];

for ($i = 0; $i < 7; $i++) {
    $ar[] = rand(1, 49);
}


// foreach相當於js的for...in
foreach ($ar as $v) {
    echo "$v<br>";
}
