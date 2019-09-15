<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/24
 * Time: 8:29
 */
//左旋字符串
function leftRotateString($str, $n){
    $arr = str_split($str);
    $arr = reverse($arr, 0, $n - 1);
    $arr = reverse($arr, $n, count($arr) - 1);
    $arr = reverse($arr, 0, count($arr) - 1);
    return implode('', $arr);
}

//翻转单词顺序
function reverseSetence($str){
    $arr = str_split($str);
    $arr = reverse($arr, 0, count($arr) - 1);
    $arrs = explode(' ', implode('', $arr));
    $result = [];
    foreach ($arrs as $str){
        $arr = str_split($str);
        $arr = reverse($arr, 0, count($arr) - 1);
        $result[] = implode('',$arr);
    }
    return implode(' ', $result);
}

function reverse($arr, $start, $end){
    while($start < $end){
        list($arr[$start], $arr[$end]) = [$arr[$end], $arr[$start]];
        $start++;
        $end--;
    }
    return $arr;
}

//print_r(leftRotateString('abc123def', 3));
print_r(reverseSetence('I am a student'));