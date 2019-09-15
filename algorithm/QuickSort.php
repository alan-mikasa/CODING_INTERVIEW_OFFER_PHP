<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/2
 * Time: 18:55
 */

namespace app\algorithm;


class QuickSort
{
    //以第一个划分
    public static function qSort($arr)
    {
        $count = count($arr);
        if ($count <= 1){
            return $arr;
        }
        $left = $right = [];
        for ($i = 1; $i < $count; $i++){
            if ($arr[$i] >= $arr[0]){
                $right[] = $arr[$i];
            }else{
                $left[] = $arr[$i];
            }
        }
        $left = self::qSort($left);
        $right = self::qSort($right);
        return array_merge($left, [$arr[0]], $right);
    }

    public static function qSort2(&$arr, $left, $right)
    {
        if ($left < $right){
            $pivot = self::patition($arr, $left, $right);
            self::qSort2($arr, $left, $pivot);
            self::qSort2($arr, $pivot + 1, $right);
        }
        return $arr;
    }

    public static function patition(&$arr, $left, $right)
    {
        $pivot = $arr[$left];
        while (true){
            while($arr[$left] < $pivot){
                $left++;
            }
            while ($arr[$right] > $pivot){
                $right--;
            }
            if ($left < $right){
                list($arr[$left], $arr[$right]) = [$arr[$right], $arr[$left]];
            }else{
                return $right;
            }
        }
    }
}

$arr = [1,3,5,7,9,8,6,4,2,0];
$result = QuickSort::qSort2($arr, 0, count($arr)-1);
foreach ($result as $item) {
    echo $item.'-';
}