<?php

//エラーメッセージ
$err=[];

//バリデーション
if(!$username = filter_input(INPUT_POST,'username')){
  $err[] = 'ユーザ名を記入してください';
}

if(!$email = filter_input(INPUT_POST,'email')){
  $err[] = 'メールアドレスを記入してください';
}

$password = filter_input(INPUT_POST,'password');
// 正規表現
if(preg_match()){
  
}
$password_conf = filter_input(INPUT_POST,'password_conf');

?>


<!DOCTYPE html>
<html lang"en">
<head>
  <menta charset="utf8">
  <menta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>ユーザ登録完了画面</title>
  </head>
<body>
  <p>ユーザ登録完了しました</p>

  <a href="./login.php">戻る</a>
</body>
</html>
