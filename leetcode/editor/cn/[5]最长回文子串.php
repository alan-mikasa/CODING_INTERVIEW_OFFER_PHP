<?php
//给定一个字符串 s，找到 s 中最长的回文子串。你可以假设 s 的最大长度为 1000。 
//
// 示例 1： 
//
// 输入: "babad"
//输出: "bab"
//注意: "aba" 也是一个有效答案。
// 
//
// 示例 2： 
//
// 输入: "cbbd"
//输出: "bb"
// 
// Related Topics 字符串 动态规划



//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $arr = str_split($s);
        $tmp = [];
        $tmp[0] = '#';
        $len = count($arr);
        for ($i = 0; $i < $len; $i++){
            $tmp[] = $arr[$i];
            $tmp[] = '#';
        }
        $len_tmp = count($tmp);
        $max = 1;
        for ($i = 0; $i < $len_tmp; $i++){
            $left  = $i - 1;
            $right = $i + 1;
            while($left >= 0 && $right <= $len_tmp - 1 && $tmp[$left] == $tmp[$right]){
                if ($right - $left + 1 > $max){
                    $max = $right - $left + 1;
                    $start = $left;
                    $end = $right;
                }
                $left--;
                $right++;
            }

        }
        $res = array_slice($tmp, $start, $end - $start + 1);
        foreach ($res as $k => $v) {
            if ($v == '#'){
                unset($res[$k]);
            }
        }
        return implode('', array_values($res));
    }
}
//leetcode submit region end(Prohibit modification and deletion)
