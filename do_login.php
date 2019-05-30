<?php
session_start();
require_once('config_db.php');
unset($_SESSION['user']);
$sql = $pdo->prepare('select * from users where username=?');

$sql->execute([$_REQUEST['username']]);

foreach ($sql->fetchAll() as $item) {
    $_SESSION['user'] = [
        'id' => $item['id'],
        'username' => $item['username'],
        'password' => $item['password']
    ];
}

//ユーザーが見つからなかったときの処理
if (!isset($_SESSION['user'])) {
    echo 'ユーザーネームもしくはパスワードが間違っています。';
    exit;
}

//パスワードチェック
if (!password_verify($_REQUEST['password'], $_SESSION['user']['password'])) {
    echo 'パスワードが間違っています。';
    exit;
}

header('Location: index.php');
