<?php
try {
    $pdo = new PDO('mysql:host=arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=pt69kqedzqel4l2k;charset=utf8', 'pfj37tg77uvjegm4', 'kqvusdpk8y6lpita');

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
