<?php
// ブラウザ上でエラー表示させる
ini_set('display_errors', 1);

// defineを使ってDBの設定を定数で設定しておく
define('DSN', 'mysql:dbhost=localhost;dbname=dotinstall_sns_php');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'mu4uJsif');

//別のファイルや、別のディレクトリからファイルを読み込んでくる設定
require_once(__DIR__ . '/..lib/functions.php');
require_once(__DIR__ . '/autoload.php');

session_start();
