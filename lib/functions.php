<?php
// 便利関数をまとめたファイル

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
