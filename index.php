<?php require_once(dirname(__FILE__) . '/layouts/header.php') ?>

<?php
//ログインチェック機能
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>


<div class="container-fluid mx-auto my-4" style="max-width: 800px">
    <img src="layouts/images/tsubasa.png">
</div>

<button onclick="location.href='logout.php'">ログアウト</button>


<?php require_once(dirname(__FILE__) . '/layouts/footer.php') ?>
