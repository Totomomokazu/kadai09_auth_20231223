<!-- phpの宣言 -->
<?php

//1.POSTデータの取得 
$user_name=$_POST["user_name"];
$user_id=$_POST["user_id"];
$pw=$_POST["pw"];


// 2.DBへ接続
require_once("funcs.php");
$pdo = db_conn();


// 3.データ登録SQL作成
// 3-1.SQL文を用意
$stmt = $pdo->prepare("
    INSERT INTO
        gs_bm_user_table(id, user_name, user_id, pw, create_at)
    VALUES (
        NULL, :user_name, :user_id, :pw, sysdate()
        )");

//3-2.バインド変数を用意
$stmt->bindValue(':user_name', $user_name, PDO::PARAM_STR);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR);
$stmt->bindValue(':pw', $pw, PDO::PARAM_STR);


// 3-3.実行
$status = $stmt->execute();


//４．データ登録処理後
if($status === false){
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);
  }else{
    //５．index.phpへリダイレクト
    header('Location: index.php');
  }
?>