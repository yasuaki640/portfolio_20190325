<?php require_once(dirname(__FILE__) . '/layouts/header.php') ?>

<?php require_once(dirname(__FILE__) . '/layouts/header.php') ?>


<?php
//ログインチェック機能
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<div class="container-fluid">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="container-fluid mx-auto my-4" style="max-width: 800px">
                    <img src="storage/public/Product/139808064.jpg">
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>


</div>


<button onclick="location.href='logout.php'">ログアウト</button>


<?php require_once(dirname(__FILE__) . '/layouts/footer.php') ?>
