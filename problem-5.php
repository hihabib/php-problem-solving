<?php
// Write a PHP function to find the second largest number 
// in an array of numbers.


function get_second_largest_num($arr_num){
    for($i = 0; $i < count($arr_num); $i++){
        for($j = 0; $j < count($arr_num); $j++){
            if($arr_num[$i] > $arr_num[$j]){
                $temp = $arr_num[$i];
                $arr_num[$i] = $arr_num[$j];
                $arr_num[$j] = $temp;
            }
        }
    }
    return $arr_num[1];

}


print_r(get_second_largest_num([1,2,3,478,3,342,2,4,5,77]));