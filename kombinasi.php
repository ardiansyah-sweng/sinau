<?php
$words = array(1,2,4,8);   
$num = count($words); 

//The total number of possible combinations 
$total = pow(2, $num);

//Loop through each possible combination  
for ($i = 0; $i < $total; $i++) {  
    //For each combination check if each bit is set 
    for ($j = 0; $j < $num; $j++) { 
       //Is bit $j set in $i? 
        if (pow(2, $j) & $i) 
        echo $words[$j] . ' '; 
    } 
    echo '<br />'; 
}
