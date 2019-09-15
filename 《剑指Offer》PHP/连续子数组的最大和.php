<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/7
 * Time: 8:44
 */

function FindGreatestSumOfSubArray($array)
{
    // write code here
    $sum = 0;
    $max = $array[0];
    $len=count($array);
    for($i=0; $i<$len; $i++){
        if($sum>=0){
            $sum += $array[$i];
        }else{
            $sum = $array[$i];
        }
        $max = ($max >= $sum) ? $max : $sum;
    }
    return $max;
}

print_r(FindGreatestSumOfSubArray([-7]));
