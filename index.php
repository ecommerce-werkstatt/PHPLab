<?php
echo "Ich heiße Alex 25" . PHP_EOL;

for($i = 0; $i <= 10000; $i++) {
    $md5 = md5($i);
    echo str_pad("\n", 274, md5($i), STR_PAD_LEFT, );
}
?>