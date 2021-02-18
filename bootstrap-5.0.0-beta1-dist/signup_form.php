<!DOCTYPE html>
<html lang"en">
<head>
  <menta charset="utf8">
  <menta name="viewport" content="width=device-width,initial-scale=1.0">
<title>ユーザ登録画面</title>
</head>
<body>

  <h2>ユーザ登録フォーム</h2>
  <form action="register.php" method="POST">

 <p>
<label for="username">Username:</label>
<input type="text" name="username">
</p>

<p>
<label for="email">Email:</label>
<input type="email" name="email">
</p>

<p>
<label for="password">Password:</label>
<input type="password" name="password">
</p>

<p>
<label for="password_conf">Password:</label>
<input type="password" name="password_conf">
</p>

<p><label>SelfIntroduction<br><textarea name="comments" rows="10" cols="40"></textarea></label></p>
<p><input type="submit" value="registration"><input type="reset" value="reset"></p>


</form>
</body>
</html>
