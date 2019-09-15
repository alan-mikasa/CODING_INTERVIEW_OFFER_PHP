<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/30
 * Time: 15:00
 */

//输入一棵二叉树，判断该二叉树是否是平衡二叉树。
class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}
//最直接的做法，遍历每个结点，借助一个获取树深度的递归函数，根据该结点的左右子树高度差判断是否平衡，
//然后递归地对左右子树进行判断。

function IsBalanced_Solution($pRoot){
    if (empty($pRoot)){
        return true;
    }
    return IsBalanced_Solution($pRoot->left) && IsBalanced_Solution($pRoot->right)
        && abs(TreeDepth($pRoot->left) - TreeDepth($pRoot->right)) <= 1;
}

function TreeDepth($pRoot){
    if (empty($pRoot)){
        return 0;
    }
    return max(TreeDepth($pRoot->left), TreeDepth($pRoot->right)) + 1;
}
