<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/1
 * Time: 16:42
 */

function getNext($p){
    $next = [];
    $next[0] = -1;
    $len = count($p);
    $k = -1;
    $j = 0;
    while($j < $len - 1){
        if($k == -1 || $p[$j] == $p[$k]){
            ++$k;
            ++$j;
            if($p[$j] != $p[$k]){
                $next[$j] = $k;
            }else{
                $next[$j] = $next[$k];
            }
        }else{
            $k = $next[$k];
        }
    }
    return $next;
}

//print_r(getNext(['a', 'b', 'c', 'd', 'a', 'b', 'd']));
//echo 3&1;

function NumberOf1($n)
{
    // write code here
    $count = 0;
    echo sprintf("%b", $n)."\n";
    if ($n < 0){
        $n = $n & 0x7FFFFFFF;
        ++$count;
    }
    while($n){
        ++$count;
        $n = $n & ($n-1);
        echo sprintf("%b", $n)."\n";

    }
    return  $count;
}
//print_r(NumberOf1(-2147483648));


//function NumberOf12($n)
//{
//    $count = 0;
//    for($i = 0;$i <32;$i++){
//        if(($n >> $i) & 1){
//            $count++;
//        }
//    }
//    return $count;
//}
//print_r(NumberOf12(-128));




function minNumberInRotateArray($rotateArray)
{
    // write code here
    if(empty($rotateArray)){
        return 0;
    }
    $head = 0;
    $end = count($rotateArray)-1;
    while($rotateArray[$head] > $rotateArray[$end]){
        if($end - $head == 1){
            return $rotateArray[$end];
        }
        $mid = ($head + $end) >> 1;
        if($rotateArray[$mid] == $rotateArray[$head] && $rotateArray[$mid] == $rotateArray[$end]){
            return findInOrder(array_slice($rotateArray, $head, $end - $head + 1));
        }
        if($rotateArray[$mid] >= $rotateArray[$head]){
            $head = $mid;
        }else{
            $end = $mid;
        }
    }
    return $head;
}

function findInOrder($arr){
    $minIndex = 0;
    for($i=0,$len=count($arr); $i<$len;$i++){
        if($arr[$i] < $arr[$minIndex]){
            $minIndex = $i;
        }
    }
    return $arr[$minIndex];
}

//print_r(minNumberInRotateArray([]));


function main(){
    $str = '12345';
    $arr = str_split( $str);
    print_r($arr);
}
main();