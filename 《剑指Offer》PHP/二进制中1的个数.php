<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/15
 * Time: 15:32
 */

function NumberOf1($n)
{
    $count = 0;
//    echo sprintf("%b", $n)."\n";
    if ($n < 0){
        $n = $n & 0x7FFFFFFF;
        ++$count;
    }
    while($n){
        ++$count;
        $n = $n & ($n-1);
//        echo sprintf("%b", $n)."\n";
    }
    return  $count;
}