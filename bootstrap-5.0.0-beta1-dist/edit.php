<!DOCTYPE html>
<link rel="stylesheet" href="css/edit.css">

<body>

  <div id="wrapper">
    <?php
        require("header.php");
  ?>
</body>
<html lang="ja">




<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1"action="mypage.php">

      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Your Name" id="name" />
      </p>

      <p class="">
        <input name="Project Name" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Project Name" />
      </p>

      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="explanation"></textarea>
      </p>


      <div class="submit">
        <input type="submit" value="SEND" id="button-blue"/>
          <input type="submit" value="DELETE" id="button-red"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
