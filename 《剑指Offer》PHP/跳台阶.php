<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/13
 * Time: 18:28
 */

function jumpFloor($number)
{
    // write code here
    $result = [0,1,2];
    if($number < 3){
        return $result[$number];
    }
    $i = 3;
    while($i <= $number){
        $result[$i] = $result[$i-1] + $result[$i-2];
        $i++;
    }
    return $result[$number];
}

print_r(jumpFloor(3));