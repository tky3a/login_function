<?php

//ログイン

 require_once(__DIR__ . '/../config/config.php');

//$app = new MyApp\Controller\Login();
//
//$app->run();

// echo "login screen";
// exit;

?>

<!DOCTYPE html>
<html lang=ja dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title></title>
  </head>
  <body>
    <div class="container">
      <form action="" method="post">
        <p>
          <input type="text" name="email" placeholder="email">
        </p>
        <p>
          <input type="password" name="password" placeholder="password">
        </p>
        <div class="btn">Log In</div>
        <!-- <p class="fs12"><a href="/signup.php">Sign Up</a> </p> -->
      </form>
    </div>
  </body>
</html>
