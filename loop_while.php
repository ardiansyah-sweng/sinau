<?php

$parent_variance = 4.121;
$child_variance1 = 3;

while($parent_variance > $child_variance1){
    $child_variance1 = $child_variance1 + 0.25;
    echo $parent_variance.' -- '.$child_variance1.'<br>';
}

$counter = 0;
while ($counter < 12){
    $nilai = 10 + rand(0,2);
    if ($nilai === 12){
        echo $nilai;
        exit();
    } 
    if ($nilai !== 12) {
        echo 'ulangi <br>';
        $counter = 0;
    }
}