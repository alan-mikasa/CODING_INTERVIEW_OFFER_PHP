<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/5
 * Time: 15:33
 */

function PrintMinNumber($numbers){
    usort($numbers, 'mysort');
    return implode($numbers);
}
function mysort($a, $b){
    $str1 = $a.$b;
    $str2 = $b.$a;
    return $str1 < $str2 ? -1 : 1;
}

print_r(PrintMinNumber([3,32,321]));
//PrintMinNumber([1,3,5,23,4,6,12]);


