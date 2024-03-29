<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/10
 * Time: 10:47
 */
//输入一棵二叉搜索树，将该二叉搜索树转换成一个排序的双向链表。
//要求不能创建任何新的结点，只能调整树中结点指针的指向。
class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}
// 方法一：递归版
// 解题思路：
// 1.将左子树构造成双链表，并返回链表头节点。
// 2.定位至左子树双链表最后一个节点。
// 3.如果左子树链表不为空的话，将当前root追加到左子树链表。
// 4.将右子树构造成双链表，并返回链表头节点。
// 5.如果右子树链表不为空的话，将该链表追加到root节点之后。
// 6.根据左子树链表是否为空确定返回的节点。
function Convert($pRootOfTree){
    if (empty($pRootOfTree)){
        return;
    }
    if (empty($pRootOfTree->left) && empty($pRootOfTree->right)){
        return $pRootOfTree;
    }
    $left = Convert($pRootOfTree->left);
    $pHead = $left ?? $pRootOfTree;
    if ($left){
        while ($left->right){
            $left = $left->right;
        }
        $left->right = $pRootOfTree;
        $pRootOfTree->left = $left;
    }
    $right = Convert($pRootOfTree->right);
    if ($right){
        $pRootOfTree->right = $right;
        $right->left = $pRootOfTree;
    }
    return $pHead;
}

function Convert2($pRootOfTree){
    if (empty($pRootOfTree)){
        return;
    }
    if (empty($pRootOfTree->left) && empty($pRootOfTree->right)){
        return $pRootOfTree;
    }
    $left = Convert($pRootOfTree->left);
    $pHead = $left ?? $pRootOfTree;
    if ($left){
        while($left->right){
            $left = $left->right;
        }
        //TODO
    }
}