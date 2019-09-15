<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/25
 * Time: 9:58
 */


//使用  短路计算  来构造递归:重点是输入0的时候输出0来结束递归
//缺点：递归的层数不能太深<3000
function sumSolution($n){
    $sum = $n;
    $n && ($sum += sumSolution($n - 1));
    return $sum;
}

print_r(sumSolution(100));