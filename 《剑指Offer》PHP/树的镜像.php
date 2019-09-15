<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/8
 * Time: 9:03
 */
/**https://www.zhihu.com/question/31202353?rf=31230953
   操作给定的二叉树，将其变换为源二叉树的镜像。*/
class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}

function mirror(&$root){
    if (empty($root)){
        return ;
    }

    $left = $root->left;
    $right = $root->right;

    $root->left = $right;
    $root->right = $left;

    mirror($root->left);
    mirror($root->right);
}