<?php
    function mystrtoupper($origin){
        $temp = str_split($origin, 1);
        $r = '';
        foreach ($temp as $v){
            $v = ord($v);
            if ($v >= 97 && $v <= 122){
                $v -= 32;
            }
            $r .= chr($v);
        }
        return $r;
    }

$origin = 'a中你继续F@#$%^&*(BMDJFDoalsdkfjasl';
echo 'origin string:'.$origin.PHP_EOL;
$result = mystrtoupper($origin);
echo 'result string:'.$result.PHP_EOL;


//1.1
//2