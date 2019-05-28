<?php require_once(dirname(__FILE__) . '/layouts/header.php') ?>

<?php require_once(dirname(__FILE__) . '/layouts/navbar.php') ?>


<?php
//ログインチェック機能
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<div class="container-fluid" style="max-width: 80%">

    <div class="container mt-2 mb-4">
        <div class="row">
            <div class="col-md-6">
                <img class="mx-auto" style="max-width: 100%" src="storage/public/product/139808064.jpg">
            </div>
            <div class="col-md-6">
                <div class="mr-auto">
                    <div id="productBrand" class="h3">Roland</div>
                    <div id="productName" class="h4">TM-8</div>
                    <div id="productPrice" class="h4">￥17800</div>
                    <div id="productDescription" class="p">
                        アコースティックとエレクトロニックを融合させた新しいドラムの形、"ハイブリッド・ドラム"。TM-1は、ドラマーなら誰でもハイブリッド・ドラムを手軽に実現できる音源モジュールです。キックやスネア、シンバルやパーカッションなど、ライブで即戦力となる音色がプリロードされているのに加え、オリジナルの音色やループ・フレーズを取り込んで演奏することができます。ローランドの各種パッド類やアコースティック・ドラム・トリガー
                        RTシリーズをTM-1に接続していつものアコースティック・ドラムに追加するだけで、パフォーマンスの幅がぐんと広がります。
                        直感的に操作できるM色の調整をするだけ。M-1の音色を重ねたサウンドでの演奏の切り替えも、足元でスマートに行なえます。コンパクトながらも堅牢なボディでドラム・セットの足元にセッティングしやすく、電池駆動にも対応。TM-1は、ライブで演奏するすべてのドラマーにおすすめしたい、ハイブリッド・ドラムを始めるのに最適な音源モジュールです。
                    </div>
                    <button type="button" class="btn btn-primary btn-lg mx-auto d-block">購入する</button>
                </div>
            </div>
        </div>
    </div>
</div>


<button class="mx-auto d-block" onclick="location.href='do_logout.php'">ログアウト</button>


<?php require_once(dirname(__FILE__) . '/layouts/footer.php') ?>
