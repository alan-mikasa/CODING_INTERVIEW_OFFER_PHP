<?php
    $connectMysql = mysqli_connect('localhost', 'root', '123');

    if($connectMysql){
        echo 'MySQL连接成功';
    }
?>
