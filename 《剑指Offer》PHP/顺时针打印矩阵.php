<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/20
 * Time: 11:11
 */

function printMatrix($matrix){
    $row = count($matrix);
    $col = count($matrix[0]);
    if ($row == 0 || $col == 0){
        return $matrix;
    }
    $result = [];
    $left = 0;
    $right = $col - 1;
    $top = 0;
    $bottom = $row - 1;
    while($left <= $right && $top <= $bottom){
        for($i = $left; $i <= $right; $i++){
            $result[] = $matrix[$top][$i];
        }
        for($i = $top + 1; $i <= $bottom; $i++){
            $result[] = $matrix[$i][$right];
        }
        if($top != $bottom){
            for ($i = $right - 1; $i >= $left; $i--){
                $result[] = $matrix[$bottom][$i];
            }
        }
        if ($left != $right){
            for ($i = $bottom - 1; $i > $top; $i--){
                $result[] = $matrix[$i][$left];
            }
        }
        $left++;
        $right--;
        $top++;
        $bottom--;
    }
    return $result;
}

print_r(printMatrix([[1,2,3],[4,5,6],[7,8,9]]));