<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/30
 * Time: 8:41
 */

function LongestString($arr){
    $len = count($arr);
    $num = [];
    for ($i=0; $i<$len; $i++){
        $num[$i] = 1;
        for ($j=0; $j<$i; $j++){
            if ($arr[$j] < $arr[$i]){
                $num[$i] = max($num[$i], $num[$j]+1);
            }
        }
    }
    for ($i=0, $max=0; $i<$len; $i++){
        if ($num[$i] > $max){
            $max = $num[$i];
        }
    }
    return $max;
}

function longestSub($arr){
    $len = count($arr);
    $current = [];
    for($i = 0; $i < $len; $i++){
        $current[$i] = 1;
        for($j = 0; $j < $i; $j++){
            if ($arr[$i] > $arr[$j]){
                $current[$i] = max($current[$i], $current[$j] + 1);
            }
        }
    }
    return max($current);
}


print_r(longestSub([6,4,8,2,17]));
echo "\n";
print_r(longestSub([1,3,5,2,4,6,7,8]));


function main(){
    $arr = [1,3,5,2,4,6,7,8];
//    $arr = [6,4,8,2,17];
    print_r(LongestString($arr));
}
//main();