
<!DOCTYPE html>


<html lang=“ja”>
<head>
<meta charset=“UTF-8”>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>サンプル</title>

<link rel='stylesheet'type="text.css" href="../css/style.css" >
</head>

<header>
  <h1>サンプル</h1>
</header>
<section class="user">
  <h2>ユーザ一覧</h2>

  <p>以下にユーザ情報を入力して送信を押すとユーザが登録できます。</p>
<form action="" method="post">
 <label id="user_name">ユーザ名:<input type="text" name="user_name" size="20" ></label>
 <label id="e-mail">メールアドレス:<input type="text" name="email" size="40"></label>
 <label id="password">パスワード:<input type="password" name="password" size="20"></label>
 <input type="submit" value="送 信">
</form>

<table>
  <tr>
    <th>ID</th>
    <th>ユーザー名</th>
    <th>メールアドレス</th>
    <th>権限</th>
    <th></th>
  </tr>
  <tr>
        <td>testuser0001</td>
        <td><a href="mailto:test0001@test.co.jp">test0001@test.co.jp</a></td>
        <td>管理者</td>
        <td>
          <a href="">編集<a>
          <a href="">削除<a>
          </td>
        </tr>

        <tr>
              <td>testuser0002</td>
              <td><a href="mailto:test0002@test.co.jp">test0001@test.co.jp</a></td>
              <td>一般ユーザ</td>
              <td>
                <a href="">編集<a>
                <a href="">削除<a>
                </td>
              </tr>

              <tr>
                    <td>testuser0003</td>
                    <td><a href="mailto:test0003@test.co.jp">test0001@test.co.jp</a></td>
                    <td>一般ユーザ</td>
                    <td>
                      <a href="">編集<a>
                      <a href="">削除<a>
                      </td>
                    </tr>
  </table>
</section>
<footer>
