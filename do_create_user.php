<?php
session_start();
unset($_SESSION['user']);

$pdo = new PDO('mysql:host=localhost;dbname=portfolio_20190325;charset=utf8', 'root', 'pass');
unset($_SESSION['user']);


$sql = $pdo->prepare('insert into users  values(null,?,?)');

//パスワードのハッシュ化
$hashed_password = password_hash($_REQUEST['password'],PASSWORD_BCRYPT);

$sql->execute([$_REQUEST['name'], $hashed_password]);

echo '<p>登録完了<p>
        <button onclick="location.href=\'login.php\'">ログイン</button>

';