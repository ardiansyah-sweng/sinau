<?php

function get_combinations($arrays)
{
    $result = array(array());
    foreach ($arrays as $property => $property_values) {
        $tmp = array();
        foreach ($result as $result_item) {
            foreach ($property_values as $property_value) {
                $tmp[] = array_merge($result_item, array($property => $property_value));
            }
        }
        $result = $tmp;
    }
    return $result;
}

$combinations = get_combinations(
    array(
        'particle_size' => array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
        's' => array(0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9),
        'chaotic' => array('bernoulli', 'chebyshev', 'circle', 'gauss', 'logistic', 'sine', 'singer', 'sinu'),
    )
);

foreach ($combinations as $combination){
    print_r($combination);
    echo '<br>';
}
