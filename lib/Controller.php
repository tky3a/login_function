<?php

namespace MyApp;

class Controller {

  protected function isLoggedIn() {
    // $_SESSION['me']がセットされていて尚且つ空では無い場合login
    return isset($_SESSION['me']) && !empty($_SESSION['me']);
  }
}

 ?>
