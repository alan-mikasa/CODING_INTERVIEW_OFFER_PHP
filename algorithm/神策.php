<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/27
 * Time: 16:01
 */

function devide($num){
    $part = [];
    for ($i = 2; $i * $i <= $num; $i++){
        $part[$i] = 0;
        while ($num % $i == 0){
            $part[$i]++;
            $num /= $i;
        }
    }
    if ($num > 1){
        $part[$num] = 1;
    }
    return $part;
}


function cole($arr, $num){
    $list = devide($num);
    $keys = array_keys($list);
    $flag = true;
    foreach ($keys as $key){
        if (!array_key_exists($key, $arr)){
            $flag = false;
            break;
        };
    }
    return $flag;
}
//print_r(devide(18));
print_r(cole([2,3,5,7], 13));