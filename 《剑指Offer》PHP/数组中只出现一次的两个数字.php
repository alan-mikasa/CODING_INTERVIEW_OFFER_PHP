<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/23
 * Time: 20:11
 */

//数组中只出现一次的两个数字
function findNumsAppearOnce($array){
    $tmp = 0;
    foreach ($array as $value){
        $tmp ^= $value;
    }
    $index_of_1 = findFirstBitIsOne($tmp);
    $tmp = 1 << $index_of_1;

    $res1 = 0;
    $res2 = 0;
    foreach ($array as $value){
        if ($value & $tmp){
            $res1 ^= $value;
        }else{
            $res2 ^= $value;
        }
    }
    return [$res1,$res2];
}

//二进制第一个1是第几位
function findFirstBitIsOne($num){
    $index = 0;
    while($num && (($num & 1) == 0)){
        $index++;
        $num = $num >> 1;
    }
    return $index;
}

print_r(findNumsAppearOnce([-8, -4, 3, 6, 3, -8, 5, 5]));