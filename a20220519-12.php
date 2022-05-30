<?php
// header('Content-Type: text/plain'); // 設定檔頭, 告訴用戶端內容為純文字

$ar = [
    'name' => '小新',
    'age' => 27,
    'date' => [1, 3, 5]
];


foreach ($ar as $k => $v) {
    if (is_array($v)) $v = implode(',', $v);
    echo "$k : $v<br>";
}
