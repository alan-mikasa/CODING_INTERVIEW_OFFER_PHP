<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/1
 * Time: 16:27
 */

function findKthSmallest($matrix, $k){
    $row = count($matrix);
    $col = count($matrix[0]);
    $low = $matrix[0][0];
    $high = $matrix[$row - 1][$col - 1];
    while($low < $high){
        $mid = floor(($low + $high) >> 1);
        if (guessSum($matrix, $mid) < $k){
            $low = $mid + 1;
        }else{
            $high = $mid - 1;
        }
    }
    return $low; //TODO low不在矩阵里咋整？
}

function guessSum($matrix, $guess){
    $row = count($matrix);
    $col = count($matrix[0]);
    $sum = 0;
    for($i = 0; $i < $row; $i++){
        $low = 0;
        $high = $col - 1;
        $ans = 0;
        while($low < $high){
            $mid = floor(($low + $high) >> 1);
            if ($matrix[$i][$mid] < $guess){
                $ans = $mid + 1;
                $low = $mid + 1;
            }else{
                $high = $mid - 1;
            }
        }
        $sum += $ans;
    }
    return $sum;
}

$matrix = [
    [1,5,9],
    [10,11,13],
    [12,13,15]
];
print_r(findKthSmallest($matrix, 5));