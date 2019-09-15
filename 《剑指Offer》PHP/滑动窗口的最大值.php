<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/4
 * Time: 23:57
 */

//function maxInWindows($num, $size){
//    $queue = [];
//    $res = [];
//    $i = 0;
//    $len = count($num);
//    while($size > 0 && $i < $len){
//        if (count($queue) > 0 && $i - $size + 1 > $queue[0]){
//            array_shift($queue);
//        }
//        while(count($queue) > 0 && $num[end($queue)] < $num[$i]){
//            array_pop($queue);
//        }
//        array_push($queue, $i);
//        if ($i >= $size - 1){
//            array_push($res, $num[$queue[0]]);
//        }
//        $i++;
//    }
//    return $res;
//}

function maxInWindows($num, $size){
    $queue = [];
    $res = [];
    $i = 0;
    $len = count($num);
    while($size > 0 && $i < $len){
        if (count($queue) > 0 && $i - $size +1 > $queue[0]){
            array_shift($queue);
        }
        while(count($queue) > 0 && $num[end($queue)] < $num[$i]){
            array_pop($queue);
        }
        array_push($queue, $i);
        if ($i >= $size - 1){
            array_push($res, $num[$queue[0]]);
        }
        $i++;
    }
    return $res;

}

//function maxInWindows2($num, $size){
//    $position = [];
//    $res = [];
//    $i = 0;
//    $len = count($num);
//    while($size > 0 && $i < $len){
//        if (count($position) > 0 && $i -  $size + 1 > $position[0]){
//            array_shift($position);
//        }
//        while(count($position) > 0 && $num[end($position)] < $num[$i]){
//            array_pop($position);
//        }
//        array_push($position, $i);
//        if ($i >= $size - 1){
//            array_push($res, $num[$position[0]]);
//        }
//        $i++;
//    }
//    return $res;
//}

$num = [2,3,4,2,6,2,5,1];
$size = 3;
print_r(maxInWindows($num, $size));
//4 4 6 6 6 5