<?php
session_start();

$users = [
    'ming' => [
        'password' => '1234',
        'nickname' => '孔明'
    ],
<<<<<<< HEAD
    'eiko' => [
        'password' => '5678',
        'nickname' => '英子'
=======
    'no_two' => [
        'password' => '5678',
        'nickname' => '關二哥'
>>>>>>> 0ae5a35ec893c2e184e8ed2abee3a5447aa51163
    ],
];

$output = [
    'postData' => $_POST,
];

if (isset($_POST['account'])) {
    // echo json_encode($_POST);
    // exit; // 立刻停止 php 程式執行
    // die();

    // 兩個欄位都要有值
    if (!empty($_POST['account']) and !empty($_POST['password'])) {

        if (!empty($users[$_POST['account']])) {

            if ($_POST['password'] === $users[$_POST['account']]['password']) {
                // 登入成功
                $output['msg'] = '登入成功';
                echo json_encode($output);
                exit;
            } else {
<<<<<<< HEAD
                // 帳號對，但密碼錯
                $output['msg'] = '帳號對，但密碼錯';
=======
                // 帳號對, 但密碼錯
                $output['msg'] = '帳號對, 但密碼錯';
>>>>>>> 0ae5a35ec893c2e184e8ed2abee3a5447aa51163
                echo json_encode($output);
                exit;
            }
        } else {
            // 帳號錯誤
            $output['msg'] = '帳號錯誤';
            echo json_encode($output);
            exit;
        }
<<<<<<< HEAD
=======
    } else {
        // 其中有一欄沒有填值
        $output['msg'] = '其中有一欄沒有填值';
        echo json_encode($output);
        exit;
>>>>>>> 0ae5a35ec893c2e184e8ed2abee3a5447aa51163
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <input type="text" name="account" placeholder="帳號">
        <br>
        <input type="password" name="password" placeholder="密碼">
        <br>
        <button>登入</button>
    </form>




</body>

</html>