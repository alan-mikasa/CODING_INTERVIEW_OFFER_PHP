<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/1
 * Time: 17:09
 */

namespace app\algorithm;


class BucketSort
{
    public static function bucketSort($arr)
    {
        $bucketLen = max($arr) - min($arr) + 1;
        $bucket = array_fill(0, $bucketLen, []);

        for ($i = 0; $i < count($arr); $i++){
            array_push($bucket[$arr[$i] - min($arr)], $arr[$i]);
        }

        $k = 0;

        for ($i = 0; $i < $bucketLen; $i++){
            $currentBucketLen = count($bucket[$i]);

            for ($j = 0; $j < $currentBucketLen; $j++){
                $arr[$k] = $bucket[$i][$j];
                $k++;
            }
        }
        return $arr;
    }
}

function bucketSort2($arr){
    $len = count($arr);
    $bucketLen = max($arr) - min($arr) + 1;
    $bucket = array_fill(0, $bucketLen, []);
    for ($i = 0; $i < $len; $i++){
        $bucket[$arr[$i] - min($arr)][] = $arr[$i];
    }
    $res = [];
    for ($i = 0; $i < $bucketLen; $i++){
        for ($j = 0, $currentBucketLen = count($bucket[$i]); $j < $currentBucketLen; $j++){
            $res[] = $bucket[$i][$j];
        }
    }
    return $res;
}

$arr = [1,2,3,4,5,9,4,5,6,17,8];
//print_r(bucketSort2($arr));
$fill_arr = array_fill(0,6,[0]);
print_r($fill_arr);

//class BucketSort1{
//    public static function bucketSort($arr)
//    {
//        $bucketLen = max($arr) - min($arr) + 1;
//        $bucket = array_fill(0, $bucketLen, []);
//
//        for ($i = 0; $i < count($arr); $i++){
//            $bucket[$arr[$i] - min($arr)][] = $arr[$i];
//        }
//
//        $k = 0;
//        for ($i = 0; $i < $bucketLen; $i++){
//            $currentBucketLen = count($bucket[$i]);
//            for ($j = 0; $j < $currentBucketLen; $j++){
//                $arr[$k++] = $bucket[$i][$j];
//            }
//        }
//        return $arr;
//    }
//}

//$arr = [1,2,3,4,5,9,4,5,6,17,8];
//$result = BucketSort1::bucketSort($arr);
//foreach ($result as $item) {
//    echo $item.'-';
//}