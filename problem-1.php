<?php 

// Write a PHP function to sort an array of strings by 
// their length, in ascending order.

$str_arr = ['Habibul Islam', "Md.Emon", "Emran", "Saifur Rahman Rahat"];

for($i = 0; $i < count($str_arr); $i++){
    $len_x = strlen($str_arr[$i]);
    for($j = 0; $j < count($str_arr); $j++){
        $len_y = strlen($str_arr[$j]);
        if($str_arr[$i] !== $str_arr[$j] && $len_x  < $len_y){
            $pos_a = array_search($str_arr[$i], $str_arr);
            $pos_b = array_search($str_arr[$j], $str_arr);
            $temp = $str_arr[$pos_a];
            $str_arr[$pos_a] = $str_arr[$pos_b];
            $str_arr[$pos_b] = $temp;
        }
    }
}

$i = 0;
foreach($str_arr as $str){
    echo ++$i .". " . $str ."\n";
}