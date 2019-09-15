<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/30
 * Time: 14:53
 */

//输入一棵二叉树，求该树的深度。
//从根结点到叶结点依次经过的结点（含根、叶结点）形成树的一条路径，最长路径的长度为树的深度。
class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}

function TreeDepth($pRoot){
    if (empty($pRoot)){
        return null;
    }
    $left = TreeDepth($pRoot->left);
    $right = TreeDepth($pRoot->right);
    return max($left, $right) + 1;
}