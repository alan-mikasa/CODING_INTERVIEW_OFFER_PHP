<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/20
 * Time: 10:21
 */

function Power($base, $n){
    $res = 1;
    $curr = $base;
    if ($n > 0){
        $exponent = $n;
    }elseif ($n < 0){
        if ($base == 0){
            return '分母不能为0';
        }
        $exponent = -$n;
    }else{
        return 1;
    }
    while($exponent != 0){
        if ($exponent & 1){
            $res *= $curr;
        }
        $curr *= $curr;  //右移指数减半，所以curr翻倍
        $exponent >>= 1;
    }
    return $n >= 0 ? $res : 1/$res;
}



print_r(Power(2,3));

