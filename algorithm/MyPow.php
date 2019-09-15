<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/12
 * Time: 16:28
 */

/**
 * @param $m
 * @param $n
 * @return int
 * 位运算计算pow();
 */
function myPow($m, $n){
    $sum = 1;
    $tmp = $m;
    while($n){
        if ($n & 1 == 1){
            $sum *= $tmp;
        }
        $tmp *= $tmp;
        $n = $n >> 1;
    }
    return $sum;
}

myPow(5, 13);
