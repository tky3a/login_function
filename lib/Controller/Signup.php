<?php
namespace MyApp\Controller;

#Signupクラスを継承
class Signup extends \MyApp\Controller {

  public function run(){
    if ($this->isLoggedIn()) {
      //ログインしてたらHomeに飛ばす
      header('Location: ' . SITE_URL);
      exit;
    }

    #もしフォームから値が送信(POST)された場合
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $this->postProcess();
    }
  }

protected function postProcess() {
  // validate
  try {
    $this->_validate();
    //catch: 例外処理
  } catch (\MyApp\Exception\InvalidEmail $e) {
    // echo $e->getMessage();
    // exit;
    $this->setErrors('email', $e->getMessage());
  } catch (\MyApp\Exception\InvalidPassword $e) {
    // echo $e->getMessage();
    // exit;
    $this->setErrors('password', $e->getMessage());
  }


  // echo "success";
  // exit;

  $this->setValues('email', $_POST['email']);

  if ($this->hasError()) {
    return;
  } else {
      // create user
      try {
        $userModel = new  \MyApp\Model\User();
        $userModel->create([
          'email' => $_POST['email'],
          'password' => $_POST['password']
        ]);
      } catch (\MyApp\Exception\DuplicateEmail $e) {
        $this->setErrors('email', $e->getMessage());
        return;
      }


      // redirect to login
  }


}

private function _validate() {
    if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
      echo "Invalid Token!";
      exit;
    }


    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      throw new \MyApp\Exception\InvalidEmail();
    }

    if (!preg_match('/\A[a-zA-Z0-9]+\z/', $_POST['password'])) {
      throw new \MyApp\Exception\InvalidPassword();
    }

  }





}
