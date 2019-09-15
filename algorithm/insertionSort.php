<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/6/26
 * Time: 18:36
 */
function insertionSort($arr){
    $count = count($arr);
    for ($i = 1; $i < $count; $i++){
        $temp = $arr[$i];
        for ($j = $i; $j > 0 && $arr[$j - 1] > $temp; $j--){
            $arr[$j] = $arr[$j - 1];
        }
        $arr[$j] = $temp;
    }
    return $arr;
}

function insertionSort2($arr){
    for ($i = 0, $len = count($arr); $i < $len; $i++){
        $tmp = $arr[$i];
        for ($j = $i; $j > 0 && $arr[$j - 1] > $tmp; $j--){
            $arr[$j] = $arr[$j - 1];
        }
        $arr[$j] = $tmp;
    }
    return $arr;
}

$arr = [1,4,6,8,0,6,4,2,5];
print_r(insertionSort2($arr));
//foreach ($result as $item){
//    echo $item.'-';
//}
