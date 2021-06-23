<?php

$fileList = glob('test/*');
foreach ($fileList as $filename) {
    //Use the is_file function to make sure that it is not a directory.
    if (is_file($filename)) {
        echo $filename, '<br>';
    }
}

//https://thisinterestsme.com/php-list-all-files-in-a-directory/
