<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/28
 * Time: 11:48
 */

/**
 * 给定一棵二叉搜索树，请找出其中的第k小的结点。
 * 例如， （5，3，7，2，4，6，8）    中，
 * 按结点数值大小顺序第三小结点的值为4。
 */
class TreeNode{
   var $val;
   var $left = NULL;
   var $right = NULL;
   function __construct($val, $left=null, $right=null){
       $this->val = $val;
       $this->left = $left;
       $this->right = $right;
   }
}

function KthNode($pRoot, $k){
    $traverse = inOrderTraverse($pRoot);
    if ($k <= count($traverse)){
        return $traverse[$k - 1];
    }
    return null;
}

function inOrderTraverse($pRoot){
    $traverse = [];
    if ($pRoot->left){
        $traverse = array_merge($traverse, inOrderTraverse($pRoot->left));
    }
    array_push($traverse, $pRoot);
    if ($pRoot->right){
        $traverse = array_merge($traverse, inOrderTraverse($pRoot->right));
    }
    return $traverse;
}

function KthNode2($pRoot, $k)
{
    // write code here
    $traverse = inOrderTraverse2($pRoot);
    if ($k <= count($traverse)) {
        return $traverse[$k - 1];
    }
    return null;
}

function inOrderTraverse2($pRoot){
    $traverse = [];
    if ($pRoot->left) {
        $traverse = array_merge($traverse, inOrderTraverse2($pRoot->left));
    }
    array_push($traverse, $pRoot->val);
    if ($pRoot->right){
        $traverse = array_merge($traverse, inOrderTraverse2($pRoot->right));
    }
    return $traverse;
}
function main(){
    $node1 = new TreeNode(2);
    $node2 = new TreeNode(4);
    $node3 = new TreeNode(6);
    $node4 = new TreeNode(8);
    $node5 = new TreeNode(3,$node1, $node2);
    $node6 = new TreeNode(7, $node3, $node4);
    $node7 = new TreeNode(5, $node5, $node6);
    $pRoot = $node7;
    KthNode2($pRoot, 2);
}
main();