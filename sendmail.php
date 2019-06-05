<?php
sleep(3);
fopen("./tt.php","w");
echo file_put_contents("1.txt",  "1wwwwwwwwww".date("Y-m-d H:i:s").PHP_EOL, FILE_APPEND);