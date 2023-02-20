<?php
// Write a PHP function to remove the first and last 
// element from an array and return the remaining elements as a new array.

function remove_first_and_last($arr){
    array_pop($arr);
    array_shift($arr);
    return $arr;
}
$my_arr = ['Habibul Islam', "Md.Emon", "Emran", "Saifur Rahman Rahat"];
print_r(remove_first_and_last($my_arr));