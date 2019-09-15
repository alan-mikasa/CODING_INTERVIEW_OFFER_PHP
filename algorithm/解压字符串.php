<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/17
 * Time: 20:04
 */

function myUnzip($str){
    $arr = str_split($str);
    $len = count($arr);
    $result = [];
    for($i=0; $i<$len; $i++){
        if ($arr[$i] == "["){
            $left[] = $i;
        }
        if ($arr[$i] == "]"){
            $right[] = $i;
        }
    }
    for($i=0; $i<$len; $i++){
        $left = array_pop($left);
        $right = array_shift($right);
        array_merge($result, myCopy(array_slice($arr, $left+2, $right-$left-2)));
    }
    return $result;


}
function myCopy($arr){
    $count = $arr[0];
    $result = [];
    for($i=0; $i<$count; $i++){
        for($j=2,$len=count($arr); $j<$len; $j++){
            $result[] = $arr[$j];
        }
    }
    return $result;
}

function main($str){
    $arr = str_split($str);
    $index = [];
    $result = [];
    for($i=0,$len=count($arr); $i<$len; $i++){
        if ($arr[$i] == "["){
            $index[] = $i;
        }
    }
}

//print_r(copy(['2','|','C','A']));
//print_r(myUnzip('HG[3|B[2|CA]]F'));