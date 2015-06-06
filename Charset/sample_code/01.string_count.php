<?php
// 6文字 + 3文字 + 6文字 + 3文字 = 18文字となってほしい
$str = "あああｲｲｲウウウ123";

echo "UTF8 : " . strlen($str) . "\n";

$str = mb_convert_encoding($str, 'SJIS', 'UTF-8');

echo "SJIS : " . strlen($str) . "\n";
