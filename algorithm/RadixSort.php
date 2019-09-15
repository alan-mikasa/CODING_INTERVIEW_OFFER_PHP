<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/1
 * Time: 17:59
 */

namespace app\algorithm;


class RadixSort
{
    public static function maxLength($arr)
    {
        $maxLength = 0;
        for ($i = 0; $i < count($arr); $i++){
            $item = $arr[$i];
            $currentLen = count(str_split($item));
            $maxLength = $currentLen > $maxLength ? $currentLen : $maxLength;
        }
        return $maxLength;
    }

    public static function getRadixByLoop($item, $loop)
    {
        $arr = str_split($item);
        if (count($arr) - 1 - $loop < 0) return 0;
        return $arr[count($arr) - 1 - $loop];
    }

    public static function doSort($arr, $loopCount)
    {
        $bucket = array_fill(0, 10, []);
        $data = [];
        for ($i = 0; $i < count($arr); $i++){
            $item = $arr[$i];
            $bucket[self::getRadixByLoop($item, $loopCount)][] = $item;
        }

        $k = 0;
        for($i = 0; $i < 10; $i++){
            $currentBucketLen = count($bucket[$i]);

            for ($j = 0; $j < $currentBucketLen; $j++){
                $data[$k] = $bucket[$i][$j];
                $k++;
            }
        }
        return $data;
    }

    public static function radixSort($arr)
    {
        $maxLength = self::maxLength($arr);
        for ($loopCount = 0; $loopCount < $maxLength; $loopCount++){
            $arr = self::doSort($arr, $loopCount);
        }
        return $arr;
    }
}

//class RadixSort1{
//    public static function maxLength($arr)
//    {
//        $maxLength = 0;
//        for ($i = 0; $i < count($arr); $i++){
//            $currentLen = count(str_split($arr[$i]));
//            $maxLength = $currentLen > $maxLength ? $currentLen : $maxLength;
//        }
//        return $maxLength;
//    }
//
//    public static function getRadixByLoop($item, $loop)
//    {
//        $arr = str_split($item);
//        if (count($arr) - 1 - $loop < 0) return 0;
//        return $arr[count($arr) - 1 - $loop];
//    }
//
//    public static function doSort($arr, $loopCount)
//    {
//        $bucket = array_fill(0, 10, []);
//        $data = [];
//        for ($i = 0; $i < count($arr); $i++){
//            $item = $arr[$i];
//            $bucket[self::getRadixByLoop($item, $loopCount)][] = $item;
//        }
//        $k = 0;
//        for ($i = 0; $i < 10; $i++){
//            $currentBucketLen = count($bucket[$i]);
//            for ($j = 0; $j < $currentBucketLen; $j++){
//                $data[$k] = $bucket[$i][$j];
//                $k++;
//            }
//        }
//        return $data;
//    }
//
//    public static function radixSort($arr)
//    {
//        $maxLength = self::maxLength($arr);
//        for ($loopCount = 0; $loopCount < $maxLength; $loopCount++){
//            $arr = self::doSort($arr, $loopCount);
//        }
//        return $arr;
//    }
//}

$arr = [100,73,5,27,9,2,14,6,8,0];
$result = RadixSort1::radixSort($arr);
foreach ($result as $item) {
    echo $item.'-';
}