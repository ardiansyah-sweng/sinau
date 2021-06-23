<?php

//For loop
set_time_limit(10000);
$start = microtime(true);
for ($i=0; $i<=1000; $i++){
    echo $i;
}
$finish = microtime(true);
$time = $finish - $start;
echo '<br>';
echo 'Time: '.$time.' Memory: '.memory_get_usage();
echo '<p>';

//While loop
$start = microtime(true);
$cacah = 0;
while ($cacah < 1000){
    echo $cacah;
    $cacah++;
}
$finish = microtime(true);
$time = $finish - $start;
echo '<br>';
echo 'Time: '.$time. 'Memory: '.memory_get_usage();