<?php
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=portfolio_20190325;charset=utf8', 'root', 'pass');
unset($_SESSION['user']);
$sql = $pdo->prepare('select * from users where username=? and password=?');

$sql->execute([$_REQUEST['username'], $_REQUEST['password']]);

foreach ($sql->fetchAll() as $item) {
    $_SESSION['user'] = [
        'id' => $item['id'],
        'username' => $item['username'],
        'password' => $item['password']
    ];
}

if(isset($_SESSION['user'])) {
    header('Location: index.php');
}elseif (!isset($_SESSION['user'])) {
    echo 'ユーザーネームもしくはパスワードが間違っています。';
}