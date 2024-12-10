<?php

//print("Hi");

$data = "V2UgYW5kIG91ciBwYXJ0bmVycyBzdG9yZSBhbm";
$r ="_-!";


foreach (hash_algos() as $v) {
    $hash_algo = $v; 
     
    $time_start= microtime(true);    
    for($x = 0; $x <= 100000; $x++) $r = hash($hash_algo, $data.$r.$time_start, false);
    $time_end= microtime(true);  

    printf("%-12s %3d %s\n", $hash_algo, strlen($r), $time_end -$time_start);

}


?>