<?php


function myCountChar($arg1, $arg2){
    $str_split = str_split($arg1);
    $jumlah = 0;
    for ($i = 0; $i < count($str_split); $i++){
        if($str_split[$i] === $arg2){
            $jumlah += 1;
        }
    }
    echo "Akan diperoleh result: " . $jumlah . "\n";
}






myCountChar ("bootcamp","o");
myCountChar ("arkademy","k");


?>