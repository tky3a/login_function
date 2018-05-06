<?php

namespace MyApp\Controller;

#extendsでクラスを継承(MyAppControllerクラスのIndexクラスを継承)ってことだと思う
class Index extends \MyApp\Controller {

  public function run(){
    if (!$this->isLoggedIn()) {
      //ログインしていない場合はログインページに飛ばす
      header('Location: ' . SITE_URL . '/login.php');
    }
  }
}
