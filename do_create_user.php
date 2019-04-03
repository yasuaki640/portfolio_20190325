<?php
session_start();
unset($_SESSION['user']);

$pdo = new PDO('mysql:host=localhost;dbname=portfolio_20190325;charset=utf8', 'root', 'pass');
unset($_SESSION['user']);



$sql = $pdo->prepare('insert into users  values(null,?,?)');
$sql->execute([$_REQUEST['name'],$_REQUEST['password']]);

echo '登録完了';