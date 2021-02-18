<?php
ini_set('display_errors', "On");
require_once('classes/UserLogic.php');

 require_once'public/dbconnect.php';

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
if(!preg_match("/\A[a-z\d]{8,100}+\z/i",$password)){
  $err[] = 'パスワードは英数字８文字以上１００文字以下にして下さい';
}
$password_conf = filter_input(INPUT_POST,'password_conf');
if($password !== $password_conf){
  $err[]='確認用パスワードと異なっています';
}

if (count($err) === 0){
//ユーザを登録する処理
$hasCreated = UserLogic::createUser($_POST);
if(!$hasCreated){
$err[] = '登録に失敗しました';
}

}
?>


<!DOCTYPE html>
<html lang"en">
<head>
  <menta charset="utf8">
  <menta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>ユーザ登録完了画面</title>
  </head>
<body>
  <?php if (count($err) > 0) : ?>
  <?php foreach($err as $e) : ?>
<p><?php echo $e ?></p>
<?php endforeach ?>
<?php else : ?>

  <p>ユーザ登録完了しました</p>
<?php endif ?>
  <a href="login.php">戻る</a>
</body>
</html>
