<?php

//ユーザーの一覧表示

//requireでconfigの情報を呼び出してくる

 require_once(__DIR__ . '/../config/config.php');

 // viewに表示するデータをcontrollerから引っ張ってくる(MyAppが名前空間)
$app = new MyApp\Controller\Index();

$app->run();
