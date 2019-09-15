<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/9
 * Time: 21:57
 */

function missingRange($arr){
    $heads = [];
    foreach ($arr as $k => $v) {
        $heads[] = $v[0];
    }
    asort($heads);
    $sorted_arr = [];
    foreach ($heads as $k => $head) {
        $sorted_arr[] = $arr[$k];
    }

    $len = count($sorted_arr);
    $missing_range = [];
    for ($i = 0; $i <$len - 1; $i++){
        if ($sorted_arr[$i][1] >= $sorted_arr[$i + 1][0]){
            $sorted_arr[$i + 1][0] = min($sorted_arr[$i][0], $sorted_arr[$i + 1][0]);
            $sorted_arr[$i + 1][1] = max($sorted_arr[$i][1], $sorted_arr[$i + 1][1]);
        }else{
            $min = min([$sorted_arr[$i][1] + 1, $sorted_arr[$i + 1][0] - 1]);
            $max = max([$sorted_arr[$i][1] + 1, $sorted_arr[$i + 1][0] - 1]);
            $missing_range[] = [$min, $max];
        }
    }
    return $missing_range;
}


$arr = [
    [4,15],
    [1,7],
    [18,29]
];
print_r(missingRange($arr));