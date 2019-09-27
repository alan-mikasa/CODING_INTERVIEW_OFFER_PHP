<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/26
 * Time: 19:02
 */


//trim(fgets(STDIN));
function getMaxSum($arr){
    $tmp = [];
    foreach ($arr as $v) {
        $tmp[] = $v[0] * $v[1];
    }
//    $col = array_column($arr, 1);
//    array_multisort($col, SORT_DESC, $arr);
    array_multisort($tmp, SORT_DESC, $arr);
    $len = count($arr);
    $sum = 0;
    $v = 0;
    for ($i = 0; $i < $len; $i++){
        $a = $arr[$i][0];
        $t = $arr[$i][1];
        $sum += $v * $t + $a * $t * $t / 2;
        $v += $a * $t;
    }
    return $sum;
}

function main1(){
    $n = trim(fgets(STDIN));
    $arr = [];
    while($n--){
        $arr[] = explode(' ', trim(fgets(STDIN)));
    }
    $res = getMaxSum($arr);
    echo number_format($res, 1);
}

//main1();


function getComic($arr, $m){
    $len = count($arr);
    if ($len < $m){
        return number_format(array_sum($arr) / count($arr), 3);
    }
    $arr_tmp = array_slice($arr, 0, $m);
    $max = number_format(array_sum($arr_tmp) / count($arr_tmp), 3);
    for ($i = 0; $i < $len; $i++){
        $arr_tmp = array_slice($arr, $i, $m);
        $current = number_format(array_sum($arr_tmp) / count($arr_tmp), 3);
        $max = max($max, $current);
    }
    return $max;
}

function main2(){
    list($n, $m) = explode(' ', trim(fgets(STDIN)));
    $arr = explode(' ', trim(fgets(STDIN)));
    echo getComic($arr, $m);
}

//main2();
$n = 10;
$m = 6;
$arr = [6,4,2,10,3,8,5,9,4,1];//6.500
print_r(getComic($arr, $m));
