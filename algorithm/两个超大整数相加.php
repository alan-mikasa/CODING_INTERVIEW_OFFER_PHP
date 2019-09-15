<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/12
 * Time: 11:14
 */

function twoBigSum($str1, $str2){
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    $max_len = max($len1, $len2);
    $res = array_fill(0, $max_len + 1, 0);
    $j = min($len1, $len2) - 1;

    for ($i = $max_len - 1; $i >= 0; $i--){
        $tmp = $str1[$i] + $str2[$j] + $res[$i + 1];
        if ($j >= 0){
            $res[$i + 1] = ($tmp >= 10) ? $tmp - 10 : $tmp;  //个位
            $res[$i] = ($tmp >= 10) ? 1 : 0;  //进位
            $j--;
        }else{
            $res[$i + 1] += $str1[$i];
        }
    }
    return ltrim(implode('', $res), '0');
}

$str1 = '426709752318';
$str2 =  '95481253129';
//$str1 = '123';
//$str2 = '23';
print_r(twoBigSum($str1, $str2));