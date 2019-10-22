<?php
//给定一个二维平面，平面上有 n 个点，求最多有多少个点在同一条直线上。 
//
// 示例 1: 
//
// 输入: [[1,1],[2,2],[3,3]]
//输出: 3
//解释:
//^
//|
//|        o
//|     o
//|  o  
//+------------->
//0  1  2  3  4
// 
//
// 示例 2: 
//
// 输入: [[1,1],[3,2],[5,3],[4,1],[2,3],[1,4]]
//输出: 4
//解释:
//^
//|
//|  o
//|     o        o
//|        o
//|  o        o
//+------------------->
//0  1  2  3  4  5  6 
// Related Topics 哈希表 数学



//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function maxPoints($points) {
        $len = count($points);
        if ($len == 0) return 0;
        if ($len == 1) return 1;
        $res = 0;
        for ($i = 0; $i < $len - 1; $i++){
            // map用来存斜率，每次循环重置
            $map = [];
            $repeat = 0;
            $tmp_max = 0;
            for ($j = $i + 1; $j < $len; $j++){
                $dy = $points[$i][1] - $points[$j][1];
                $dx = $points[$i][0] - $points[$j][0];
                if ($dy == 0 && $dx == 0){
                    $repeat++;
                    continue;
                }
                // 化简斜率，g为最大公约数
                $g = $this->gcd($dy, $dx);
                if ($g != 0){
                    $dy = floor($dy / $g);
                    $dx = floor($dx / $g);
                }
                // 保存为字符串形式避免精度问题
                $tmp = $dy."/".$dx;
                if (!array_key_exists($tmp, $map)){
                    $map[$tmp] = 1;
                }else{
                    $map[$tmp] += 1;
                }
                $tmp_max = max($tmp_max, $map[$tmp]);
            }
            $res = max($res, $repeat + $tmp_max + 1);
        }
        return $res;
    }

    function gcd($dy, $dx){
        if ($dx == 0){
            return $dy;
        }else{
            return $this->gcd($dx, $dy % $dx);
        }
    }
}
//leetcode submit region end(Prohibit modification and deletion)
//$a = new Solution();
//print_r($a->maxPoints([[1,1],[2,2],[3,3]]));