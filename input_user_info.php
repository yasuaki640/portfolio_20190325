<?php

unset($_SESSION['user']);

?>

<?php require_once(dirname(__FILE__) . '/layouts/header.php') ?>

    <div class="container-fluid mx-auto my-4" style="max-width: 350px">
        <form action="do_create_user.php" method="post">
            <p>ユーザーネーム<input type="text" name="username"></p>
            <p>パスワード<input type="text" name="password"></p>
            <p>パスワード(確認用)<input type="text" name="password_confirm"></p>
        </form>
    </div>

<?php require_once(dirname(__FILE__) . '/layouts/footer.php') ?>