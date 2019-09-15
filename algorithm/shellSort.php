<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/6/26
 * Time: 18:57
 */
function shellSort($arr){
    $count = count($arr);
    for ($gap = intval($count / 2); $gap > 0; $gap = intval($gap / 2)){
        for ($p = $gap; $p < $count; $p++){
            $temp = $arr[$p];
            for ($i = $p; $i >= $gap && $arr[$i - $gap] > $temp; $i -= $gap){
                $arr[$i] = $arr[$i - $gap];
            }
            $arr[$i] = $temp;
        }
    }
    return $arr;
}

/**
 * @param $arr
 * @return mixed
 * 希尔排序 - 插入排序的改进版。
 * 为了减少数据的移动次数，在初始序列较大时取较大的步长，通常取序列长度的一半，此时只有两个元素比较，交换一次；
 * 之后步长依次减半直至步长为 1，即为插入排序，由于此时序列已接近有序，故插入元素时数据移动的次数会相对较少，效率得到了提高。
 */

function shellSort2($arr){
    $len = count($arr);
    for ($gap = floor($len >> 1); $gap > 0; $gap >>= 1){
        for ($p = $gap; $p < $len; $p++){
            $tmp = $arr[$p];
            for ($i = $p; $i >= $gap && $arr[$i - $gap] > $tmp; $i -= $gap){
                $arr[$i] = $arr[$i - $gap];
            }
            $arr[$i] = $tmp;
        }
    }
    return $arr;
}

$arr = [1,4,6,8,0,6,4,2,5];
print_r(shellSort2($arr));
//foreach ($result as $item){
//    echo $item.'-';
//}



