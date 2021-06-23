<?php
$values = [5, 4, 4, 4, 6];
$stagnant = [];
foreach ($values as $key => $mae) {
    $temp = $mae;
    if ($key === 0) {
        $stagnant[] = $mae;
    }
    if ($key > 0) {

        if ($stagnant[0] !== $mae){
            $stagnant[0] = $mae;
        } else {
            $stagnant[] = $mae;
        }
        if (count(array_unique($stagnant)) === 1 && count($stagnant) === 3){
            echo 'Iterasi:'.$key;
            echo "\n";
            print_r($stagnant);
            exit();
        }

        echo $stagnant[0].' '.$mae."\n";
    }
}

