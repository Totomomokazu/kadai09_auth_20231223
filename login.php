<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
</head>
<body>
    <!-- <button><a href="select.php">データベースを確認する</a></button> -->
    <form method="post" action="login_act.php">
        <fieldset>
            <legend>ログイン画面</legend>
            <!-- <label>氏名：<input type="text" name="user_name"></label><br> -->
            <label>ID：<input type="text" name="user_id"></label><br>
            <label>PW：<input type="text" name="pw"></label><br>
            <input type="submit" value="ログイン">
        </fieldset>
    </form>    
</body>
</html>