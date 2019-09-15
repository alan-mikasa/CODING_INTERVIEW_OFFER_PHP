<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/2
 * Time: 19:09
 */
/**
 * 罗马数字的构成

          1(I)   5(V)   10(X)  50(L)   100(C)   500(D)    1000(M)
 */
//from 1 to 3999

function int2Roma($num){
    $M = ['', 'M', 'MM', 'MMM'];
    $C = ['','C', 'CC', 'CCC', 'CD', 'D', 'DC', 'DCC', 'DCCC', 'CM'];
    $X = ['','X', 'XX', 'XXX', 'XL', 'L', 'LX', 'LXX', 'LXXX', 'XC'];
    $I = ['','I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX'];
    return $M[$num/1000] . $C[($num%1000)/100] . $X[($num%100)/10] . $I[($num%10)];
}


function roma2Int($s){
    $dict = [
        'M' => 1000,
        'D' => 500,
        'C' => 100,
        'L' => 50,
        'X' => 10,
        'V' => 5,
        'I' => 1
    ];
    $sum = 0;
//    $s = str_split($s);
//    for($i=0,$len=count($s); $i<$len-1; $i++){
//        if ($dict[$s[$i]] < $dict[$s[$i+1]]){
//            $sum -= $dict[$s[$i]];
//        }else{
//            $sum += $dict[$s[$i]];
//        }
//    }
//    $sum += $dict[$s[$i]]; //最后一位
//    return $sum;
    for ($i=0, $len = strlen($s); $i<$len-1; $i++){
        if ($dict[$s[$i]] < $dict[$s[$i+1]]){
            $sum -= $dict[$s[$i]];
        }else{
            $sum += $dict[$s[$i]];
        }
    }
    $sum += $dict[$s[$i]];

    return $sum;

}

function main(){
    $num = 3999;
    print_r($num.' to roma is '.int2Roma($num));
    echo PHP_EOL;
    $s = 'MMMCMXCIX';
    print_r($s.' to int is '.roma2Int($s));
}
main();

/**class Solution(object):
    def romanToInt(self, s):
        """
        :type s: str
        :rtype: int
        """
        sum=0
        convert={'M': 1000,'D': 500 ,'C': 100,'L': 50,'X': 10,'V': 5,'I': 1}
        for i in range(len(s)-1):
            if convert[s[i]] < convert[s[i+1]]:
                sum -= convert[s[i]]
            else:
                sum += convert[s[i]]
        sum += convert[s[-1]]
        return sum
 */