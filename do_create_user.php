<?php
session_start();
unset($_SESSION['user']);

$pdo = new PDO('mysql:host=arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=pt69kqedzqel4l2k;charset=utf8', 'pfj37tg77uvjegm4', 'kqvusdpk8y6lpita');

unset($_SESSION['user']);


$sql = $pdo->prepare('insert into users  values(null,?,?)');
$sql->execute([$_REQUEST['name'], $_REQUEST['password']]);

echo '<p>登録完了<p>
        <button onclick="location.href=\'login.php\'">ログイン</button>

';