<?php
$seeds = 30;
$population_size = 10;

for ($i = 0; $i <= $seeds - 1; $i++) {
    if ($i === 0) {
        $start = 0;
    } else {
        $start = $end[$i - 1] + 1;
    }
    $end[$i] = $start + ($population_size - 1);

    echo 'Seeds: ' . $i . ' Start: ' . $start . ' End: ' . $end[$i] . '<br>';
}
