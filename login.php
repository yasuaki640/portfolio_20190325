<?php require_once(dirname(__FILE__) . '/layouts/header.php') ?>

    <div class="container-fluid mx-auto my-4" style="max-width: 350px">
        <form action="do_login.php" method="post">
            <p>ユーザーネーム<input type="text" name="username"></p>
            <p>パスワード<input type="password" name="password"></p>
            <input type="submit" value="ログイン">
        </form>
    </div>

<?php require_once(dirname(__FILE__) . '/layouts/footer.php') ?>