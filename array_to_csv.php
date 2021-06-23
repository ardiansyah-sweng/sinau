<?php
$list = array(
    ['project_id', 'actual', 'size', 'f1', 'f2', 'f3'],
    [34,4560,234,4,3,3],
    [35,5060,190,4,3,3],
    [36,9560,100,5,3,],
);

$fp = fopen('dataset.csv', 'w');

foreach($list as $fields){
    fputcsv($fp, $fields);
}

fclose($fp);