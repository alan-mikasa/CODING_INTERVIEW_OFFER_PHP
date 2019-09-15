<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/31
 * Time: 9:19
 */

function LCS($s1, $s2){
    $matrix = [];
    $path = [];
    $res = [];
    $arr1 = str_split($s1);
    $arr2 = str_split($s2);
    $len1 = count($arr1);
    $len2 = count($arr2);
    for ($i = 0; $i <= $len1; $i++){
        $matrix[$i][0] = 0;
    }
    for ($j = 0; $j <= $len2; $j++){
        $matrix[0][$j] = 0;
    }
    for($i = 1; $i <= $len1; $i++){
        for ($j = 1; $j <= $len2; $j++){
            if ($arr1[$i - 1] == $arr2[$j - 1]){
                $matrix[$i][$j] = $matrix[$i - 1][$j - 1] + 1;
                $path[$i][$j] = 'o';
//                if (count($res) < $matrix[$i][$j]) {
//                    $res [] = $arr2[$j - 1];
//                }
            }elseif ($matrix[$i - 1][$j] >= $matrix[$i][$j - 1]) {
                $matrix[$i][$j] = $matrix[$i - 1][$j];
                $path[$i][$j] = 'u';
//                $matrix[$i][$j] = max($matrix[$i - 1][$j], $matrix[$i][$j - 1]);
            }else{
                $matrix[$i][$j] = $matrix[$i][$j - 1];
                $path[$i][$j] = 'l';
            }
        }
    }
//    print_r($path);
    //找路径
    $i = $len1;
    $j = $len2;
    while ($i > 0 && $j > 0 ){

            if ($path[$i][$j] == 'o'){
                array_unshift($res, $arr1[$i - 1]);
                $i--;
                $j--;
            }elseif ($path[$i][$j] == 'u'){
                $i--;
            }else{
                $j--;
            }

    }
    return [$matrix[$len1][$len2], $res];
//    return $matrix;
}

$s1 = 'ABCPDSFJGODIHJOFDIUSHGD';
$s2 = 'OSDIHGKODGHBLKSJBHKAGHI';
//$s1 = 'abca';
//$s2 = 'bcda';
print_r(LCS($s1, $s2));



