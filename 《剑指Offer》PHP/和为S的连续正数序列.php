<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/24
 * Time: 7:57
 */

function findContinuousSequence($sum){
    $left = 1;
    $right = 2;
    $middle = $sum / 2;
    $result = [];
    while($left <= $middle){
        $list = [];
        $current_sum = 0;
        for($i = $left; $i <= $right; $i++){
            $list[] = $i;
            $current_sum += $i;
        }
        if ($current_sum == $sum){
            $result[] = $list;
            $right += 1;
        }
        if ($current_sum < $sum){
            $right += 1;
        }
        if ($current_sum > $sum){
            $left += 1;
        }
    }
    return $result;
}

//print_r(findContinuousSequence(100));

//和为S的两个数字(找出所有)
function findNumsWithNum($array, $sum){
    $left = 0;
    $right = count($array) - 1;
    $result = [];
    while($left < $right && $left <= $sum / 2){
        $current_sum = $array[$left] + $array[$right];
        if ($current_sum == $sum){
            $result[] = [$array[$left], $array[$right]];
            $left += 1;
        }
        if ($current_sum > $sum){
            $right -= 1;
        }
        if ($current_sum < $sum){
            $left += 1;
        }
    }
    return $result;
}

//print_r(findNumsWithNum([0,1,2,3,4,5,5,6,7,8,9],10));
print_r(findNumsWithNum([1,2,4,7,11,16],10));