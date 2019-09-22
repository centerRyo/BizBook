<?php

require('function.php');

    if (!empty($_POST)) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pass_re = $_POST['pass_re'];

    }
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>BizBook | ユーザー登録</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
  </head>
  <body>
      <header>
          <div class="site-width">
              <h1><a href="index.php">BizBook</a></h1>
              <nav id="top-nav">
                  <ul>
                      <li><a href="signup.php">ユーザー登録</a></li>
                      <li><a href="login.php">ログイン</a></li>
                  </ul>
              </nav>
          </div>
      </header>

      <!-- メインコンテンツ -->
      <div id="contents" class="site-width">

          <!-- Main -->
          <section id="main">
              <div class="form-container">
                  <form class="form" action="" method="post">
                      <h2 class="title">ユーザー登録</h2>
                      <div class="area-msg">

                      </div>
                      <label>
                          メールアドレス
                          <input type="text" name="email" value="">
                      </label>
                      <div class="area-msg">

                      </div>

                      <label>
                          パスワード<span style="font-size: 12px;">※英数6文字以上</span>
                          <input type="password" name="pass" value="">
                      </label>
                      <div class="area-msg">

                      </div>

                      <label>
                          パスワード（再入力）
                          <input type="password" name="pass_re" value="">
                      </label>
                      <input type="submit" value="登録する">
                  </form>
              </div>
          </section>
      </div>
    <footer>&copy; BizBook.com All Right Reserved.</footer>
  </body>
</html>
