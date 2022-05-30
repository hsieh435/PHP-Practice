<?php

session_start();

// session_destroy(); // 清除所有的 session
unset($_SESSION['user']); // 移除 'user' 對應的值

// 轉向, redirect
<<<<<<< HEAD
header('Location: a20220523-04-login.php');
=======
header('Location: a20220523-04-login.php');
>>>>>>> 0ae5a35ec893c2e184e8ed2abee3a5447aa51163
