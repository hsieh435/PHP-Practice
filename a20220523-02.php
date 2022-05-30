<?php
/*因為不可以啟動兩次 */
if (!isset($_SESSION)) {
    session_start();
}
/*判斷session有沒有設定*/



echo $_SESSION['a'];
/*判斷session有沒有啟動*/


/*
因為沒有累加
所以只會讀取第一支檔案刷出來的數值
*/
