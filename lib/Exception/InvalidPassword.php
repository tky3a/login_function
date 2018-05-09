<?php

namespace MyApp\Exception;

// InvalidPasswordクラスでExceptionクラスを継承
class InvalidPassword extends \Exception {
  protected $message = 'Invalid Password!';
}
