<!-- このdetailファイルで各データを操作する -->

<!-- ここから下はphpの処理 -->
<?php
// 0. SESSION開始！！
session_start();

require_once("../funcs.php");
// 関数でログインチェックを実施
login_check();


// １．パラメータの取得不要
// $id=$_GET["id"];


// ２．DBへの接続も不要
// require_once("funcs.php");
// $pdo = db_conn();


// ３．データの取得も不要
// $stmt = $pdo->prepare("select * from gs_bm_table where id = :id;");
// $stmt->bindValue(":id",$id,PDO::PARAM_INT);
// $status = $stmt->execute();


// ４．データを表示。なんでこの処理しているんだっけ？
// $view = '';
// if ($status === false) {
//     $error = $stmt->errorInfo();
//     exit('SQLError:' . print_r($error, true));
// } else {
//     $result = $stmt->fetch(); 
// }
// ?>




<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>神経衰弱アプリ</title>
</head>
<body>
    <button><a href="/gs_code/02_homework/kadai09_auth_20231223/index.php">入力画面を確認する</a></button>
    <button><a href="/gs_code/02_homework/kadai09_auth_20231223/select.php">データベースを確認する</a></button>
    <a class="navbar-brand" href="../logout.php">ログアウト</a>
    <div class="wrap">
        <div class="game_title">
            <h2>神経衰弱ゲーム</h2>
        </div>

        <div class="value">
            <p id="time">経過時間：0秒</p>
            <p id="count">試行回数：0</p>
            <p id="point">一致組数：0</p>
            <p id="zankaisu">残回数：100</p>
        </div>
        <!-- ここより上は各指標の表示 ★テーブル表示にしたほうが見やすいかも -->


        <!-- ここから下はトランプの表示するフィールド -->
        <div id="field">

        </div>


        <div class="btn" id="reset">
            <button>リセット</button>
        </div>
    </div>


    <!-- ここから下はjQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- ここから下はjs -->
    <script src="js/app.js"></script>
</body>
</html>