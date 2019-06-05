<?php
function asyn_sendmail(){
    $fp = fsockopen('10.108.42.252',8080,$errno,$errstr,1);
    if(!$fp) {
        echo "$errstr ($errno)<br />/n";
    }
    fputs($fp,"GET /sendmail.php\r\n"); #请求的资源 URL 一定要写对
    fclose($fp);
}
echo date("Y-m-d H:i:s").'<br>';
echo 'call asyn_sendmail<br>';
asyn_sendmail();
if(asyn_sendmail()){
    echo "ok";
}
echo "finish<br>";
echo date("H:i:s").'<br>';
