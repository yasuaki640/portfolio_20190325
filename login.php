<?php require_once(dirname(__FILE__) . '/layouts/header.php') ?>

    <div class="container-fluid mx-auto my-4 border" style="max-width: 350px">
        <form action="do_login.php" method="post" class="my-2">
            <p>ユーザーネーム<input type="text" name="username"></p>
            <p>パスワード<input type="password" name="password"></p>
            <button type="submit" class="btn btn-secondary btn-block">ログイン</button>
        </form>
        <button type="button" class="btn btn-primary btn-block mb-2" onclick="location.href='input_user_info.php'">新規登録</button>
    </div>


<?php require_once(dirname(__FILE__) . '/layouts/footer.php') ?>