<?php
$title = "О Нас";
require("blocks/header.php");
?>
<div class="container mt-2" style="width: 1200px; margin: 0 auto;">
  <h1>О Нас</h1>

  <form action="check_post.php" method="post">
    <input autocomplete="off" type="text" name="username" placeholder="Введите имя" class="form-control"><br />
    <input autocomplete="off" type="email" name="email" placeholder="Введите email" class="form-control"><br />
    <input autocomplete="off" type="password" name="password" placeholder="Введите пароль" class="form-control"><br />
    <textarea name="message" class="form-control" placeholder="Введите смс"></textarea><br />
    <input type="submit" value="Отправить" class="btn btn-success">
  </form>
</div>

<?php
require("blocks/footer.php");
?>