<?php
/*因為不可以啟動兩次 */
if (!isset($_SESSION)) {
    session_start();
}



echo $_SESSION['a'];
