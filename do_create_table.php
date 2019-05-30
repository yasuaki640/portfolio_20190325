<?php
try {
    require_once('config_db.php');

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
