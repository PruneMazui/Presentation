<?php
$char_list = array(
    "波ダッシュ" => "～",  // 波ダッシュ UTF-8では 0xEFBD9E
    "全角チルダ" => "〜",  // 全角チルダ UTF-8では 0xE3809C
);

$hexString = function($char)
{
    return "0x" . strtoupper(bin2hex($char)) . "\n";
};

$hexEncodingMbstring = function($char, $encoding) use ($hexString)
{
    $char = mb_convert_encoding($char, $encoding, "UTF-8");
    return $hexString(mb_convert_encoding($char, "UTF-8", $encoding));
};

$hexEncodingIconv = function($char, $encoding) use ($hexString)
{
    $char = @iconv("UTF-8", $encoding, $char);

    if($char === false)
    {
        return "変換失敗\n";
    }

    return $hexString(iconv($encoding, "UTF-8", $char));
};

foreach($char_list as $title => $char)
{
    echo $title . " : " . $hexString($char);
    echo "  mbstring SJIS  : " . $hexEncodingMbstring($char, 'Shift-JIS');
    echo "  mbstring CP932 : " . $hexEncodingMbstring($char, 'CP932');
    echo "  iconv SJIS     : " . $hexEncodingIconv($char, 'Shift-JIS');
    echo "  iconv CP932    : " . $hexEncodingIconv($char, 'CP932');

    echo "\n";
}
