<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>スタッフ追加</title>
</head>
<body>

スタッフ追加<br>
<br>
<form method="post" action="staff_add_check.php">
    スタッフ名を入力してください。<br>
    <input type="text" name="name" style="width:200px" value="テスト"><br>
    パスワードを入力してください。<br>
    <input type="password" name="pass" style="width:100px" value=""><br>
    パスワードをもう1度入力してください。<br>
    <input type="password" name="pass2" style="width:100px" value=""><br>
    <br>
    <input type="button" onclick="hisroty.back()" value="戻る">
    <input type="submit" value="OK">  
</form>
</body>
</html>