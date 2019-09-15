<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/5
 * Time: 12:04
 */
/**
 * 输入两棵二叉树A，B，判断B是不是A的子结构。（ps：我们约定空树不是任意一个树的子结构）
 */
class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}

function hasSubtree($pRoot1, $pRoot2){
    if (empty($pRoot1) || empty($pRoot2)){
        return false;
    }

    return isSubtree($pRoot1, $pRoot2) || isSubtree($pRoot1->left, $pRoot2) || isSubtree($pRoot1->right, $pRoot2);
}

function isSubtree($pRoot1, $pRoot2){
    if (empty($pRoot2)){
        return true;
    }
    if (empty($pRoot1)){
        return false;
    }

    return $pRoot1->val === $pRoot2->val && isSubtree($pRoot1->left, $pRoot2->left) && isSubtree($pRoot1->right, $pRoot2->right);
}
