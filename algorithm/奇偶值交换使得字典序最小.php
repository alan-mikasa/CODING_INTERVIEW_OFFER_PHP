<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/3
 * Time: 16:40
 */

function cole($arr){
    $odd = $even = [];
    for($i=0, $len=count($arr); $i<$len; $i++){
        if($arr[$i] & 1){
            $odd[] = $arr[$i];
        }else{
            $even[] = $arr[$i];
        }
    }
    sort($odd);
    sort($even);
    $lenOdd = count($odd);
    $lenEven = count($even);
    $end = $lenOdd < $lenEven ? $lenOdd : $lenEven;
    $result = [];
    for($i=0; $i<$end; $i++){
        if($odd[$i] < $even[$i]){
            $result[] = $odd[$i];
            $result[] = $even[$i];
        }else{
            $result[] = $even[$i];
            $result[] = $odd[$i];
        }
    }
}
// 只要奇数和偶数同时，就可以任意位置互换？？？

