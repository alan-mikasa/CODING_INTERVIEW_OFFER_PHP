<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/30
 * Time: 20:19
 */

function ld($str_s, $str_t){
    $s = str_split($str_s);
    $t = str_split($str_t);
    $matrix = [];
    $len_s = count($s);
    $len_t = count($t);
    for($i = 0; $i <= $len_s; $i++){
        $matrix[0][$i] = $i;
    }
    for ($j = 0; $j <= $len_t; $j++){
        $matrix[$j][0] = $j;
    }
    for ($i = 1; $i <= $len_s; $i++){
        $ch1 = $s[$i - 1];
        for($j = 1; $j <= $len_t; $j++){
            $ch2 = $t[$j - 1];
            if ($ch1 == $ch2){
                $cost = 0;
            }else{
                $cost = 1;
            }
            $matrix[$i][$j] = min($matrix[$i][$j - 1] + 1, $matrix[$i - 1][$j] + 1, $matrix[$i -1][$j - 1] + $cost);
        }
    }
    return $matrix[$len_s][$len_t];
}

print_r(ld('cafe', 'coffee'));