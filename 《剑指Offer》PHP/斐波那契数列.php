<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/13
 * Time: 18:11
 */

function Fibonacci($n)
{
    // write code here
    if($n <= 1){
        return $n;
    }
    $i = 2;
    $result = [];
    $result[0] = 0;
    $result[1] = 1;
    while($i <= $n){
        $result[$i] = $result[$i-1] + $result[$i-2];
        $i++;
    }
    return $result[$i-1];
}

print_r(Fibonacci(5));