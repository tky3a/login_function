<?php

namespace MyApp\Exception;

// InvalidEmailクラスでExceptionクラスを継承
class InvalidEmail extends \Exception {
  protected $message = 'Invalid Email!';
}
