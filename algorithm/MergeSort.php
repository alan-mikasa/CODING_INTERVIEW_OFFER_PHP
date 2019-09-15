<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/6/28
 * Time: 11:35
 */

namespace app\algorithm;


class MergeSort
{
    public static function mergeSort($arr)
    {
        $length = count($arr);
        if ($length == 1) return $arr;
        $mid = intval($length / 2);
        $left = self::mergeSort(array_slice($arr, 0, $mid));
        $right = self::mergeSort(array_slice($arr, $mid));
        return self::merge($left, $right);
    }

    public static function merge($left, $right)
    {
        $leftIndex = $rightIndex = 0;
        $leftLength = count($left);
        $rightLength = count($right);
        $combine = [];

        while ($leftIndex < $leftLength && $rightIndex < $rightLength){
            if ($left[$leftIndex] > $right[$rightIndex]){
                $combine[] = $right[$rightIndex];
                $rightIndex++;
            }else{
                $combine[] = $left[$leftIndex];
                $leftIndex++;
            }
        }

        while ($leftIndex < $leftLength){
            $combine[] = $left[$leftIndex];
            $leftIndex++;
        }

        while ($rightIndex < $rightLength){
            $combine[] = $right[$rightIndex];
            $rightIndex++;
        }
        return $combine;
    }
}

//class MergeSort1
//{
//    public static function mergeSort($arr)
//    {
//        $length = count($arr);
//        if ($length == 1) return $arr;
//        $mid = intval($length / 2);
//
//        $left = self::mergeSort(array_slice($arr, 0, $mid));
//        $right = self::mergeSort(array_slice($arr, $mid));
//
//        return self::merge($left, $right);
//    }
//
//    public static function merge($left, $right)
//    {
//        $leftIndex = $rightIndex = 0;
//        $leftLength = count($left);
//        $rightLength = count($right);
//        $combine = [];
//
//        while ($leftIndex < $leftLength && $rightIndex < $rightLength) {
//            if ($left[$leftIndex] <= $right[$rightIndex]) {
//                $combine[] = $left[$leftIndex];
//                $leftIndex++;
//            } else {
//                $combine[] = $right[$rightIndex];
//                $rightIndex++;
//            }
//        }
//
//        while ($leftIndex < $leftLength){
//            $combine[] = $left[$leftIndex];
//            $leftIndex++;
//        }
//
//        while ($rightIndex < $rightLength){
//            $combine[] = $right[$rightIndex];
//            $rightIndex++;
//        }
//        return $combine;
//    }
//}

$arr = [1,3,5,7,9,8,6,4,2,0];
$result = MergeSort1::mergeSort($arr);
foreach ($result as $item) {
    echo $item.'-';
}