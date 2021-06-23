<?php
function sampling($chars, $size, $combinations = array())
{

    # if it's the first iteration, the first set 
    # of combinations is the same as the set of characters
    if (empty($combinations)) {
        $combinations = $chars;
    }

    # we're done if we're at size 1
    if ($size == 1) {
        return $combinations;
    }

    # initialise array to put new values in
    $new_combinations = array();

    # loop through existing combinations and character set to create strings
    foreach ($combinations as $combination) {
        foreach ($chars as $char) {
            $new_combinations[] = $combination . $char;
        }
    }

    # call same function again for the next iteration
    return sampling($chars, $size - 1, $new_combinations);
}

// example
$chars = array('a', 'b', 'c');
$output = sampling($chars, 2);
var_dump($output);

/*
array(9) {
  [0]=>
  string(2) "aa"
  [1]=>
  string(2) "ab"
  [2]=>
  string(2) "ac"
  [3]=>
  string(2) "ba"
  [4]=>
  string(2) "bb"
  [5]=>
  string(2) "bc"
  [6]=>
  string(2) "ca"
  [7]=>
  string(2) "cb"
  [8]=>
  string(2) "cc"
}
*/