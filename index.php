<?php require_once(dirname(__FILE__) . '/layouts/header.php') ?>

<?php require_once(dirname(__FILE__) . '/layouts/navbar.php') ?>


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
                    <img class="mx-auto" style="max-width: 100%" src="storage/public/product/139808064.jpg">
            </div>
            <div class="col-md-6">
                <div id="productBrand" class="">Roland</div>
            </div>
        </div>
    </div>


</div>


<button class="mx-auto d-block" onclick="location.href='logout.php'">ログアウト</button>


<?php require_once(dirname(__FILE__) . '/layouts/footer.php') ?>
