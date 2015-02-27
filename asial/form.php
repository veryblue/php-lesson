<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>from</title>
</head>
<body>
<form action="check.php" method="post">
	名前<br>
	<input type="text" name="name"><br>
	性別<br>
	<input type="radio" name="gender" value="男性">男性
	<input type="radio" name="gender" value="女性">女性
	<input type="radio" name="gender" value="回答しない">回答しない<br>
	備考<br>
	<textarea name="note"></textarea><br>
	<input type="submit" name="submit" value="送信">
</form>

</body>
</html>