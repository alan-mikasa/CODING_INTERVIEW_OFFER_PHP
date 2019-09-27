<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/18
 * Time: 19:31
 */

function strProcess($str){
    $arr = str_split($str);
    $len = count($arr);
    for ($i = 0; $i < $len; $i++){
        if (ord($arr[$i]) >= 65 && ord($arr[$i]) <= 90){
            $arr[$i] = strtolower($arr[$i]);
        }
        if ($arr[$i] == ' '){
            $arr[$i] = 0;
        }
    }
    echo implode('', array_reverse($arr));
}
//strProcess('ab cdeFg');


function numProcess($arr){
    $len = count($arr);
    $res = [];
    for ($i = 0; $i < $len; $i++){
        $res[] = digit($arr[$i]);
    }
    // 大于3
    $k = $len - 1;
    $flag = 1;
    while($k--){
        if ($res[$k] == $res[$k - 1]){
            $flag = 0;
        }
    }
    if (!$flag){
        return $flag;
    }
    if ($len == 1) return true;
    if ($len == 3){
        if ($res[1] == $res[0]){
            return false;
        }else{
            return true;
        }
    }
    if ($len > 3){

    }

    return true;
}

function digit($num){
    $count = 0;
    while($num){
        $num = floor($num / 10);
        $count += 1;
    }
    return $count;
}

$num = [10,3,56,2,98];
print_r(numProcess($num));