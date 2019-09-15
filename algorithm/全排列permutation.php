<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/28
 * Time: 21:38
 */

function permutation($str){
    if (empty($str)){
        return [];
    }
    $result = [];
    $arr = str_split($str);
    permutationCole($arr, 0, $result);
    sort($result);
    return array_unique($result);
}

function permutationCole($arr, $index, &$result){
    if ($index == count($arr)){
        $result[] = implode('', $arr);
    }
    for ($i = $index, $len = count($arr); $i < $len; $i++){
        list($arr[$i], $arr[$index]) = [$arr[$index], $arr[$i]];
        permutationCole($arr, $index + 1, $result);
        list($arr[$i], $arr[$index]) = [$arr[$index], $arr[$i]];
    }
}

print_r(permutation('1234'));