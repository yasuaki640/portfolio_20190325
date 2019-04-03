<?php require_once(dirname(__FILE__) . '/layouts/header.php') ?>

    <div class="container-fluid mx-auto my-4" style="max-width: 350px">
        <form action="do_create_user.php" method="post">
            <p>ユーザーネーム<input type="text" name="name"></p>
            <p>パスワード<input type="password" name="password"></p>
            <p>パスワード(確認用)<input type="password" name="password_confirm"></p>
            <input type="submit" value="新規登録">
        </form>
    </div>

<?php require_once(dirname(__FILE__) . '/layouts/footer.php') ?>