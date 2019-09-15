<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/25
 * Time: 10:13
 */

function add($num1, $num2){
    while($num2){
        $sum = $num1 ^ $num2;
        $tmp = ($num1 & $num2) << 1;
        $num1 = $sum;
        $num2 = $tmp;
    }
    return $num1;
}

print_r(add(3,4));