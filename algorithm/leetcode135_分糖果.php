<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/6
 * Time: 23:01
 */

function candy($ratings){
    $len = count($ratings);
    $arr = array_fill(0, $len, 1);
    for($i = 1; $i < $len; $i++){
        if($ratings[$i] > $ratings[$i - 1]){
            $arr[$i] = $arr[$i - 1] + 1;
        }
    }
    for($i = $len - 2; $i >= 0; $i--){
        if($ratings[$i] > $ratings[$i + 1]){
            if ($arr[$i] <= $arr[$i + 1]){
                $arr[$i] = $arr[$i + 1] + 1;
            }
        }
    }
    return array_sum($arr);

}

print_r(candy([1,0,2]));