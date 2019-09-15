<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/30
 * Time: 17:28
 */
/**
 * 从上到下按层打印二叉树，同一层结点从左至右输出。每一层输出一行。
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


function MyPrint($pRoot){
    if (empty($pRoot)){
        return [];
    }
    $current = [];
    $next = [];
    $print = [];
    $level = 0;
    $current[] = $pRoot;
    while(!empty($current) || !empty($next)){
        if ($level){
            $current = $next;
            $next = [];
        }
        $print[$level] = [];
        while(!empty($current)){
            $node = array_shift($current);
            array_push($print[$level], $node->val);
            if ($node->left){
                $next[] = $node->left;
            }
            if ($node->right){
                $next[] = $node->right;
            }
        }
        $level++;
    }
    return $print;
}

function main(){
    $node1 = new TreeNode(5);
    $node2 = new TreeNode(7);
    $node3 = new TreeNode(9);
    $node4 = new TreeNode(11);
    $node5 = new TreeNode(6, $node1, $node2);
    $node6 = new TreeNode(10, $node3, $node4);
    $node7 = new TreeNode(8, $node5, $node6);
    $pRoot = $node7;
//    echo !(2 & 1);
    print_r(MyPrint($pRoot));
}
main();