<?php

namespace MyApp\Exception;

// InvalidEmailクラスでExceptionクラスを継承
class DuplicateEmail extends \Exception {
  protected $message = 'Duplicate Email';
}
