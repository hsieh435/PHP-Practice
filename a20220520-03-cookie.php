<?php

// setcookie("Cookie變數名稱","Cookie數值","期限","路徑","網域","安全");
setcookie('mycookie', 'abcd', time() + 30);

// 讀取
echo $_COOKIE['mycookie'];
