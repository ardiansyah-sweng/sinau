<?php

    $P = mt_rand(0 * 100, 0.5 * 100) / 100;
    $i = 0;
    $max_i = 100;
    while ($i < $max_i){
        if ($P == 0){
            $P = mt_rand(0 * 100, 0.5 * 100) / 100;
            $i = 0;
        } else {
            break;
        }
        $i++;
    }
