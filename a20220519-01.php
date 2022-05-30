<?php

$a = isset($GET['a']) ? $_GET['a'] : 0;
$b = isset($_GET['b']) ? $_GET['b'] : 0;

sleep(5);  # 暫停 5 秒

echo $a + $b;
