<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/21
 * Time: 16:09
 */


//
function packWood($arr, $remain){
    $len = count($arr);
    $target = [];
    for ($i = 0; $i < $len; $i++){
        $target[] = $i;
        $remain += $arr[$i] - $target[$i];
        if ($remain < 0){
            return 0;
        }
    }
    return 1;
}

//$arr = [2,2,3,3,1];
//$remain = 3;
$arr = [0,0,1,2,1];
$remain = 2;
//print_r(packWood($arr, $remain));


//切环，使得两部分和相等
function cutLoop($arr){
    $arr_d = array_merge($arr, $arr);
    $sum = array_sum($arr);
    if ($sum & 1) return 0;
    $target = $sum >> 1;
    $len_d = count($arr_d);
    $start = 0;
    $current_sum = 0;
    for ($i = 0; $i < $len_d; $i++){
        $current_sum += $arr_d[$i];
        while ($current_sum > $target){
            $current_sum -= $arr_d[$start];
            $start++;
        }
        if ($current_sum == $target && ($i - $start < ($len_d >> 1))){
            return 1;
        }
    }
    return 0;
}

$arr = [1,2,3,4,5,6];
//$arr = [2,3,4,1];
print_r(cutLoop($arr));