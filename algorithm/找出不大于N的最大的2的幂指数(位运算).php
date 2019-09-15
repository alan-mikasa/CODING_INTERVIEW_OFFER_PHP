<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/12
 * Time: 16:42
 */

function findN($n){
    $sum = 1;
    while($sum <= $n){
        $sum *= 2;
    }
    return $sum < $n ? $sum : $sum >> 1;
}

print_r(findN(16));

function findNNew($n){
    $n |= $n >> 1;
    $n |= $n >> 2;
    $n |= $n >> 4;
    $n |= $n >> 8; // 整型一般是 32 位，上面我是假设 8 位
    return ($n + 1) >> 1;
}