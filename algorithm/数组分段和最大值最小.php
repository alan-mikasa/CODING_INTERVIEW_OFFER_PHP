<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/31
 * Time: 21:12
 */

/**
 * 假设有m个房间，清洁每个房间耗时用一个数组表示，10,20,30,40,50,60,70,80,90，安排n个清洁工，
 * 将连续的房间分成n份，每部分耗时求和，其最大值为此种分法的总耗时。求最快的耗时是多少。
 * 例如3个清洁工的话，10 20 30 40 50 | 60 70 | 80 90，此时是最快的，耗时为170。
 */


//找桶容量范围，最小为单个最大值，最大为总量
function getRange($arr){
    $max = $arr[0];
    $sum = 0;
    foreach ($arr as $value){
        $max = ($max > $value) ? $max : $value;
        $sum += $value;
    }
//    $range = [
//        "low" => $max,
//        "high" => $sum
//    ];
    $range = [$max, $sum];
    return $range;
}

//某种容量下所需桶的数量
function getRequiredNum($arr, $perV){
    $num_bucket = 1;
    $sum = 0;
    for ($i = 0,$len = count($arr); $i < $len; $i++){
        $sum += $arr[$i];
        if ($sum > $perV){
            $sum = $arr[$i];
            $num_bucket++;
        }
    }
    return $num_bucket;
}

function binarySearch($arr, $n){
    list($low, $high) = getRange($arr);
    while($low < $high){
        $mid = floor(($low + $high) >> 1);
        $realNum = getRequiredNum($arr, $mid);
        if ($realNum > $n){
            $low = $mid + 1;
        }else{
            $high = $mid;
        }
    }
    return $low;
}


print_r(binarySearch([10,20,30,40,50,60,70,80,90], 3));

