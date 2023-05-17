<?php

function passwordGenerate($l , $s, $limit){

    $generatedPassword = [];

    while (count($generatedPassword) < $limit) {

        # Iteratori Array
        $iterator1 = rand(0, strlen($l) -1);
        $iterator2 = rand(0, strlen($s)-1);

        $generatedPassword[] = $l[$iterator1];
        $generatedPassword[] = strtoupper($l[$iterator1]);
        $generatedPassword[] = $s[$iterator2];
        $generatedPassword[] = rand(1,9);
    }
    $generatedPasswordNew = shuffle($generatedPassword);
    $generatedPasswordNew = implode($generatedPassword);

    return substr($generatedPasswordNew , 0 , $limit)  ;
}

?>