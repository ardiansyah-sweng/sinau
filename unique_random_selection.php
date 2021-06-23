<?php
$random_zeroToOne1 = (float) rand() / (float) getrandmax();
$random_zeroToOne2 = (float) rand() / (float) getrandmax();

$counter = 0;
$max_counter = 10;

for ($i = 0; $i <= 1000; $i++) {
    $arr[] = (float) rand() / (float) getrandmax();
}

for ($i = 0; $i <= 10000; $i++) {
    $CPbestIndex1 = array_rand($arr);
    $CPbestIndex2 = array_rand($arr);

    if ($CPbestIndex1 == $CPbestIndex2){
        while ($counter < $max_counter){
            if ($CPbestIndex1 == $CPbestIndex2){
                $CPbestIndex1 = array_rand($arr);
                $CPbestIndex2 = array_rand($arr);
                $counter = 0;
            } else {
                break;
            }
        }
    }
    
    if ($CPbestIndex1 != $CPbestIndex2){
        echo 'Iterasi-'.$i.' '.$CPbestIndex1 . ' ' . $CPbestIndex2.' DIFFER ';
    }
    echo '<br>';



    // while ($counter < $max_counter){
    //     if ($CPbestIndex1 == $CPbestIndex2){
    //         $CPbestIndex1 = array_rand($arr);
    //         $CPbestIndex2 = array_rand($arr);
    //         $counter = 0;
    //         echo '<br>Similar '.$CPbestIndex1 . ' ' . $CPbestIndex2;
    //     } else {
    //         echo '<br>'.$CPbestIndex1 . ' ' . $CPbestIndex2.'<br>';
    //         $counter++;
    //         break;
    //     }
    // }
    
    // if ($CPbestIndex1 != $CPbestIndex2) {
    //     echo $CPbestIndex1 . ' ' . $CPbestIndex2;
    //     echo '<br>';
    //     echo 'Different';
    // }
    // echo '<br>';
}
