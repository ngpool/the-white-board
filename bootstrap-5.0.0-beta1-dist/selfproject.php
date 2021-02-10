<!DOCTYPE html>
<link rel="stylesheet" href="css/selfproject.css">
<html lang="ja">
<body>

  <div id="wrapper">
    <?php
        require("header.php");
  ?>
</body>



<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1"action="edit.php">

      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Your Name" id="name" />
      </p>

      <p class="text">
        <input name="Project Name" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Project Name" />
      </p>

      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="explanation" placeholder="explanation"></textarea>
      </p>

      <p class="text">
        <input name="Project Name" type="text" class="validate[required,custom[email]] feedback-input" id="comment" placeholder="comment" />
      </p>


      <div class="submit">

      

 <input type="submit" value="edit" id="button-brown">

        <div class="ease"></div>
      </div>
    </form>
  </div>
</div>
</html>
