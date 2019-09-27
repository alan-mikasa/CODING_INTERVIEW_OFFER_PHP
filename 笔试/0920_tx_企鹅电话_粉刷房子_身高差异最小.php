<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/20
 * Time: 20:08
 */


// 企鹅电话
function judgeNumber($s){
    if (strlen($s) < 11) return 0;
    $arr = str_split($s);
    $len = count($arr);
    $head_count = $len - 10;
    $head_arr = array_slice($arr, 0, $head_count);
    return in_array(8, $head_arr) ? 1 : 0;
}

$arr = ['188888882888', '000'];
foreach ($arr as $item) {
//    print_r(judgeNumber($item));
}

//粉刷房子
function paintHouse($n, $matrix){
    $dp = $matrix;
    for ($i = 1; $i < $n; $i++){
        $dp[$i][0] += min($dp[$i - 1][1], $dp[$i - 1][2]);
        $dp[$i][1] += min($dp[$i - 1][0], $dp[$i - 1][2]);
        $dp[$i][2] += min($dp[$i - 1][0], $dp[$i - 1][1]);
    }
    return min($dp[$n - 1]);
}

$n = 4;
$matrix = [
    [100,77,73],
    [41,74,83],
    [9,91,93],
    [50,16,31]
];
//print_r(paintHouse($n, $matrix));

//身高差异最小
function minHeightDiff($arr){
    $len = count($arr);
    sort($arr);
    $res = [];
    for ($i = 0; $i < $len; $i++){
        if ($i & 1){
            $res[] = $arr[$i];
        }else{
            array_unshift($res, $arr[$i]);
        }
    }
    return $res;
}

$arr = [2,1,1,3,2];
//print_r(minHeightDiff($arr));


$matrix = [
    [8,2],
    [4,5],
    [3,7],
    [9,1]
];

$index = array_column($matrix,0);
array_multisort($index, SORT_ASC, $matrix);
//print_r($matrix);
