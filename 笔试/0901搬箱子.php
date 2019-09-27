<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/2
 * Time: 10:48
 */

function carryBox($arr, $n, $m){
    $sum = array_sum($arr);
    $low = $n + 1;
    $high = $sum + $n;
    while($low < $high){
        $mid = floor(($low + $high) >> 1);
        if (doWork($arr, $n, $m, $mid)){
            $high = $mid - 1;
        }else{
            $low = $mid;
        }
    }
    return $low;
}

//给定时间能否完成
function doWork($arr, $n, $m, $time){
    $sum = 0;
    for ($i = 1; $i < $n; $i++){
        $sum += $arr[$i];
        while($sum + $i > $time){  //TODO 要 = 吗？
            $sum -= $time - $i;
            $m--;
            if ($m < 0) return false;
        }
    }
    return $m > 0 ? true : $sum < 0;
}


$arr = [3,4,5,4];
$n = 4;
$m = 100;
print_r(carryBox($arr, $n, $m));

