<?php
//共通変数・関数ファイルを読込み
require('function.php');

$p_id = ''; //投稿ID
$dbPostData = ''; //投稿内容
$dbPostGoodNum = ''; //いいねの数

// get送信がある場合
if(!empty($_GET['p_id'])){
    // 投稿IDのGETパラメータを取得
    $p_id = $_GET['p_id'];
    // DBから投稿データを取得
    $dbPostData = getPostData($p_id);
    // DBからいいねの数を取得
    $dbPostGoodNum = count(getGood($p_id));
?>

<!-- いいねボタン部分だけ切り取っています -->
<section class="post" data-postid="<?php echo sanitize($p_id); ?>">
    <div class="btn-good <?php if(isGood($_SESSION['user_id'], $dbPostData['id'])) echo 'active'; ?>">
        <!-- 自分がいいねした投稿にはハートのスタイルを常に保持する -->
        <i class="fa-heart fa-lg px-16
        <?php
            if(isGood($_SESSION['user_id'],$dbPostData['id'])){ //いいね押したらハートが塗りつぶされる
                echo ' active fas';
            }else{ //いいねを取り消したらハートのスタイルが取り消される
                echo ' far';
            }; ?>"></i><span><?php echo $dbPostGoodNum; ?></span>
    </div>
</section>
