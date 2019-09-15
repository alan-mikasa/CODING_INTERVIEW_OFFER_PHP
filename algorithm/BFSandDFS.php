<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/7
 * Time: 16:19
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

function BFS($pRoot){
    $nodeList = [];
    $valList = [];
    if (empty($pRoot)){
        return $valList;
    }
    array_push($nodeList, $pRoot);
    while(!empty($nodeList)){
        $node = array_shift($nodeList);
        if ($node->left){
            array_push($nodeList, $node->left);
        }
        if ($node->right){
            array_push($nodeList, $node->right);
        }
        array_push($valList, $node->val);
    }
    return $valList;
}

function BFS2($pRoot){
    $nodeList = [];
    $res = [];
    if (empty($pRoot)){
        return $res;
    }
    $nodeList[] = $pRoot;
    while(!empty($nodeList)){
        $node = array_shift($nodeList);
        if ($node->left){
            $nodeList[] = $node->left;
        }
        if ($node->right){
            $nodeList[] = $node->right;
        }
        $res[] = $node->val;
    }
    return $res;
}


function DFS($pRoot){
    $nodeList = [];
    $valList = [];
    if (empty($pRoot)){
        return $valList;
    }
    array_push($nodeList, $pRoot);
    while(!empty($nodeList)){
        $node = array_pop($nodeList);
        array_push($valList, $node->val);
        if ($node->right){
            array_push($nodeList, $node->right);
        }
        if ($node->left){
            array_push($nodeList, $node->left);
        }

    }
    return $valList;
}

function DFS2($pRoot){
    $node_list = [];
    $res = [];
    if (empty($pRoot)){
        return $res;
    }
    $node_list[] = $pRoot;
    while(!empty($node_list)){
        $node = array_pop($node_list);
        if ($node->right){
            $node_list[] = $node->right;
        }
        if ($node->left){
            $node_list[] = $node->left;
        }
        $res[] = $node->val;
    }
    return $res;
}

function main(){
    $node4 = new TreeNode(4);
    $node5 = new TreeNode(5);
    $node6 = new TreeNode(6);
    $node7 = new TreeNode(7);
    $node2 = new TreeNode(2, $node4, $node5);
    $node3 = new TreeNode(3, $node6, $node7);
    $node1 = new TreeNode(1, $node2, $node3);
    $pRoot = $node1;

//    print_r(BFS($pRoot));
//    print_r(DFS($pRoot));
//    print_r(BFS2($pRoot));
    print_r(DFS2($pRoot));
}
main();