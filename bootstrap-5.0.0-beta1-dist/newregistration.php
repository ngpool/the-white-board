
<!DOCTYPE html>
<html lang"en">
<head>
  <menta charset="utf8">
  <menta name="viewport" content="width=device-width,initial-scale=1.0">
<title>ユーザー登録画面</title>
</head>
<body>
  <h2>ユーザ登録フォーム</h2>
<form action="register.php" method="post">
<p><label>Username：<input type="text" name="usermame" size="40"></label></p>
<p><label>Mailadress：<input type="email" name="email" size="40"></label></p>
<p><label>password：<input type="text" name="password" size="40"></label></p>
<p><label>Password Again：<input type="text" name="password" size="40"></label></p>


<p><label>Expalanation<br><textarea name="comments" rows="10" cols="40"></textarea></label></p>
<p><input type="submit" value="registration"><input type="reset" value="reset"></p>
</form>
