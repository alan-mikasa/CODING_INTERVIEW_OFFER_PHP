<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/9
 * Time: 16:11
 */

function MoreThanHalfNum_Solution($numbers)
{
    // write code here
    $result = $numbers[0];
    $count = 1;
    for($i=1,$len=count($numbers); $i<$len; $i++){

        if($result == $numbers[$i]){
            $count += 1;
        }
        if($result != $numbers[$i]){
            $count -= 1;
        }
        if($count == 0){
            $result = $numbers[$i];
        }
    }
    $count = 0;
    $i = 0;
    while($i < $len){
        if($numbers[$i] == $result){
            $count++;
        }
        $i++;
    }
    return ($count > $len >> 1) ? $result : 0;
}

print_r(MoreThanHalfNum_Solution([2,2,2,2,2,1,3,4,5]));