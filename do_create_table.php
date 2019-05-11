<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=portfolio_20190325;charset=utf8', 'root', 'pass');

    $sql = 'create table users (
id INT(11) AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(255),
password VARCHAR (255)
) engine=innodb default charset=utf8';

    $res = $pdo->query($sql);

    echo '<p>テーブルが作成されました<p>
        <button onclick="location.href=\'login.php\'">ログイン</button>
';


} catch (PDOException $e) {

    echo $e->getMessage();
    die();
}

$pdo = null;
