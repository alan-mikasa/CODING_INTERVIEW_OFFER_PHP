<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/9
 * Time: 15:44
 */
/**
 * 输入一颗二叉树的根节点和一个整数，打印出二叉树中结点值的和为输入整数的所有路径。
 * 路径定义为从树的根结点开始往下一直到叶结点所经过的结点形成一条路径。
 * (注意: 在返回值的list中，数组长度大的数组靠前)
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

function findPath($root, $expectNumber){
    $all = $query = [];
    if (empty($root)){
        return $all;
    }
    $all = buildPath($root, $expectNumber, $query, $all);
    return $all;
}

function buildPath($node, $sum, $query, $all){
    if ($node){
        $query[] = $node->val;
        $sum -= $node->val;

        if ($sum > 0){
            $all = buildPath($node->left, $sum, $query, $all);
            $all = buildPath($node->right, $sum, $query, $all);
        }elseif ($sum == 0 && empty($node->left) && empty($node->right)){
            $all[] = $query;
        }
    }
    return $all;
}



function main(){
    $node5 = new TreeNode(7);
    $node4 = new TreeNode(4);
    $node3 = new TreeNode(12);
    $node2 = new TreeNode(5, $node4, $node5);
    $node1 = new TreeNode(10, $node2, $node3);
    $root = $node1;
    print_r(FindPath($root, 22));

}
main();