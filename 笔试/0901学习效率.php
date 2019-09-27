<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/1
 * Time: 21:10
 */

//function studyCore($arr){
//    $len = count($arr);
//    $current = [];
//    $current[] = $arr[0];
//    $currentCore = [];
//    $currentCore[] = $current[0] * $current[0];
//    $maxCore = $currentCore[0];
//    for ($i = 1; $i < $len; $i++){
//        $current[] = $arr[$i];
//        $currentCore[] = getCurrentCore($current);
//        if ($currentCore[$i] >= $currentCore[$i - 1]){
//            $currentMaxCore = $currentCore[$i];
//            if ($maxCore < $currentMaxCore){
//                $maxCore = $currentMaxCore;
//            }
//        }else{
//            $current = [$arr[$i]];
//        }
//    }
//    return $maxCore;
//}
//
//function getCurrentCore($current){
//    $min = $current[0];
//    $sum = 0;
//    foreach ($current as $item) {
//        $min = ($min < $item) ? $min : $item;
//        $sum += $item;
//    }
//    return $min * $sum;
//}

/**
 * 非负整数数组，求子序列和与最小值乘积的最大值
 * https://www.jianshu.com/p/622e425c4693
 *
 * 以每个数为最小值，求其对应的最大区间
 **/


function getRange($arr, $position){
    $len = count($arr);
    $low = $position;
    $high = $position;
    $left = $position;
    $right = $position;
    while($left--){
        if ($arr[$left] < $arr[$position]){
            $low = $left + 1;
            break;
        }
        $low--;
    }
    while($right++ && $right < $len){
        if ($arr[$right] < $arr[$position]){
            $high = $right - 1;
            break;
        }
        $high++;
    }
    return [$low, $high];

}

function getSubMax($arr, $range, $base){
    $sum = 0;
    for ($i = $range[0]; $i <= $range[1]; $i++){
        $sum += $arr[$i];
    }
    return $base * $sum;
}

function getLearningEff($arr){
    $max = 0;
    $len = count($arr);
    for ($i = 0; $i < $len; $i++){
        $range = getRange($arr, $i);
        $sub_max = getSubMax($arr, $range, $arr[$i]);
        $max = $max > $sub_max ? $max : $sub_max;
    }
    return $max;
}

//$n = trim(fgets(STDIN));
//$arr = explode(' ',trim(fgets(STDIN)));
//$arr = [6,2,1]; //36
//$arr = [1,0,3,2,5]; // 25
$arr = [7,2,4,6,5]; //60
print_r(getLearningEff($arr));