<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アカウント登録</title>
</head>
<body>
    <!-- <button><a href="select.php">データベースを確認する</a></button> -->
    <button><a href="login.php">ログインする</a></button>
    <form method="post" action="account_insert.php">
        <fieldset>
            <legend>アカウント作成</legend>
            <label>氏名：<input type="text" name="user_name"></label><br>
            <label>ID：<input type="text" name="user_id"></label><br>
            <label>PW：<input type="text" name="pw"></label><br>
            <input type="submit" value="登録">
        </fieldset>
    </form>    
</body>
</html>