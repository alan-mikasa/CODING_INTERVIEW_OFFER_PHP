<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/13
 * Time: 16:24
 */

//function permutation($str){
//    if (empty($str)){
//        return;
//    }
//    permutation_core(str_split($str), 0);
//}
//
//function permutation_core($arr, $index){
////    if ($index > count($arr)){
////        return;
////    }
//    if ($index == count($arr)){
//        echo implode('',$arr).PHP_EOL;
//    }
//
//    for ($i = $index, $len = count($arr); $i < $len; $i++){
//        swap($arr[$i], $arr[$index]);
//        permutation_core($arr, $index + 1);
//        swap($arr[$i], $arr[$index]);
//    }
//}
//
//function swap(&$a, &$b){
//    if ($a == $b){
//        $a = $b = $a;
//    }else{
//        $a = $a ^ $b;
//        $b = $a ^ $b;
//        $a = $a ^ $b;
//    }

function Permutation($str)
{
    // write code here
    if(empty($str)){
        return [];
    }
    $result = [];
    Permutation_core(str_split($str), 0, $result);
    sort($result);
    return array_unique($result);
}

function Permutation_core($arr, $index, &$result){
    if($index == count($arr)){
        //echo implode('', $arr)."\n";
        $result[] = implode('', $arr);
    }
    for($i=$index,$len=count($arr); $i<$len; $i++){
//        swap($arr[$i], $arr[$index]);
        list($arr[$i], $arr[$index]) = [$arr[$index], $arr[$i]];
        Permutation_core($arr, $index+1, $result);
//        swap($arr[$i], $arr[$index]);
        list($arr[$i], $arr[$index]) = [$arr[$index], $arr[$i]];
    }
}

//function swap(&$a, &$b){
//    if($a != $b){
//        $a = $a ^ $b;
//        $b = $a ^ $b;
//        $a = $a ^ $b;
//    }else{
//        $a = $b = $a;
//    }
//}

print_r(Permutation('a'));

