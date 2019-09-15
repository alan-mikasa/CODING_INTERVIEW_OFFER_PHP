<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/24
 * Time: 9:10
 */

function isContinuous($numbers){
    if (count($numbers) != 5){
        return false;
    }
    $len = count($numbers);
    $numbers = pre($numbers);
    sort($numbers);
    $sorted_array = $numbers;
    $num_of_0 = 0;
    foreach ($sorted_array as $value){
        if ($value){
            break;
        }
        $num_of_0++;
    }
    $small = $num_of_0;
    $big = $small + 1;
    $num_of_gap = 0;
    while($big < $len){
        if ($sorted_array[$small] == $sorted_array[$big]){
            return false;
        }
        $num_of_gap += $sorted_array[$big] - $sorted_array[$small] - 1;
        $small = $big;
        $big += 1;
    }
    return $num_of_gap <= $num_of_0;
}

function pre($numbers){
    $char_2_num = [
        'A' => 1,
        'J' => 11,
        'Q' => 12,
        'K' => 13
    ];
    foreach ($numbers as $k => $v){
        if (array_key_exists($v, $char_2_num)){
            $numbers[$k] = $char_2_num[$v];
        }elseif (!is_numeric($v)){
            $numbers[$k] = 0;
        }
    }
    return $numbers;
}

print_r(isContinuous([1,3,2,'wang',4]));
