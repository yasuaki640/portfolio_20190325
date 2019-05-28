<?php
session_start();

$pdo = new PDO('mysql:host=arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=pt69kqedzqel4l2k;charset=utf8', 'pfj37tg77uvjegm4', 'kqvusdpk8y6lpita');

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