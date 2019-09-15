<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/9
 * Time: 11:29
 */
/**
 * 输入一个整数数组，判断该数组是不是某二叉搜索树的后序遍历的结果。
 * 如果是则输出Yes,否则输出No。假设输入的数组的任意两个数字都互不相同。
 */
//BST的后序序列的合法序列是，对于一个序列S，最后一个元素是x （也就是根），如果去掉最后一个元素的序列为T，
//那么T满足：T可以分成两段，前一段（左子树）小于x，后一段（右子树）大于x，且这两段（子树）都是合法的后序序列。完美的递归定义。
//第一版实现，以后再看有没有简单的写法

function verifySequenceOfBST($sequence){
    $len = count($sequence);
    if (!$len){
        return false;
    }
    $left = [];
    $right = [];
    $root = $sequence[$len - 1];
    for ($i = 0; $i < $len - 1; $i++){
        if ($sequence[$i] < $root){
            $left[] = $sequence[$i];
        }else{
            break;
        }
    }
    for (; $i < $len - 1; $i++){
        if ($sequence[$i] > $root){
            $right[] = $sequence[$i];
        }else{
            return false;
        }
    }
    $isLeft = true;
    if ($left){
        $isLeft = verifySequenceOfBST($left);
    }
    $isRight = true;
    if ($right){
        $isRight = verifySequenceOfBST($right);
    }
    return $isLeft && $isRight;
}