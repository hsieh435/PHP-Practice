<?php

<<<<<<< HEAD
// setcookie("Cookie變數名稱","Cookie數值","期限","路徑","網域","安全");
setcookie('mycookie', 'abcd', time() + 30);
=======
// 
setcookie('mycookie', 'abcd', time() + 100);
>>>>>>> 0ae5a35ec893c2e184e8ed2abee3a5447aa51163

// 讀取
echo $_COOKIE['mycookie'];
