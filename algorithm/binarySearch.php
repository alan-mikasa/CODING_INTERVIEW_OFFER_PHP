<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/2
 * Time: 22:07
 */
function binarySearch($arr, $needle){
    $low = 0;
    $high = count($arr) - 1;
    while ($low < $high){
        $mid = intval(($low + $high) / 2);
        if ($needle < $arr[$mid]){
            $high = $mid - 1;
        }elseif ($needle > $arr[$mid]){
            $low = $mid + 1;
        }else{
            return true;
        }
    }
    return false;
}

function binarySearch2($arr, $k){
    $low = 0;
    $high = count($arr) - 1;
    while($low <= $high){
        $mid = floor(($low + $high) >> 1);
        if ($arr[$mid] > $k){
            $high = $mid - 1;
        }elseif ($arr[$mid] < $k){
            $low = $mid + 1;
        }else{
            return true;
        }
    }
    return false;
}

$arr = [1,2,3,4,6,7];
print_r(binarySearch2($arr, 4));

function binarySearchRecursion($arr, $needle, $low, $high){
    while ($low < $high){
        $mid = (int)(($low + $high) / 2);
        if ($needle < $arr[$mid]){
            return binarySearchRecursion($arr, $needle, $low, $mid - 1);
        }elseif ($needle > $arr[$mid]){
            return binarySearchRecursion($arr, $needle, $mid + 1, $high);
        }else{
            return $mid;
        }
    }
}