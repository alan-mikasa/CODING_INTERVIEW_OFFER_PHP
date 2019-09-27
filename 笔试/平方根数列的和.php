<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/3
 * Time: 14:48
 */

function sumOfSqrt($n, $m){
    $sum = 0;
    for ($i = 0; $i < $m; $i++){
        $sum += $n;
        $n = round(sqrt($n), 2);
    }
    return $sum;
}

//print_r(sumOfSqrt(2, 2));


//sqrt()   平方根
//bcsqrt()  任意精度的平方根
//echo bcsqrt(3, 2).PHP_EOL;

//pow()    幂运算
//bcpow()   任意精度的幂运算
//echo bcpow(14,0.5, 2);   >>>>>有点问题<<<<<

//decbin()  十进制转二进制
//echo decbin(15); // 1111
