<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/5/24
 * Time: 10:58
 */

class StringHelper
{
    private $value;
    function __construct($value)
    {
        $this->value = $value;
    }
    function __call($function, $args){
        $this->value = call_user_func($function, $this->value, $args[0]);
        return $this;
    }
    function strlen() {
        return strlen($this->value);
    }
}
$str = new StringHelper(" sd f 0");
echo $str->trim('0')->strlen()."\n";
echo strlen(trim(" sd f 0"));