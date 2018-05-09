<?php

//新規登録

 require_once(__DIR__ . '/../config/config.php');

$app = new MyApp\Controller\Signup();

$app->run();

?>

<!DOCTYPE html>
<html lang=ja dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>Sign up</title>
  </head>
  <body>
    <div class="container">
      <form action="" method="post" id="signup">

        <p>
          <input type="text" name="email" placeholder="email" value="<?=
          isset($app->getvalues()->email) ? h($app->getvalues()->email) : ''; ?>">
        </p>
        <p class="err"><?= h($app->getErrors('email')); ?></p><!--getErrorsメソッド-->
        <p>
          <input type="password" name="password" placeholder="password">
        </p>
        <p class="err"><?= h($app->getErrors('password')); ?></p><!--getErrorsメソッド-->

        <div class="btn" onclick="document.getElementById('signup').submit();">Sign up</div>
        <p class="fs12"><a href="/login.php">Log in</a> </p>
        <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
      </form>
    </div>
  </body>
</html>
