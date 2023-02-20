<?php
echo "Problem - 1\n";
echo "-----------\n";
// 1. Write a PHP function to sort an array of strings by their length, in ascending order.
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




echo "\n";
echo "Problem - 2\n";
echo "-----------\n";
// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
function concat_str($fname, $lname){
    return $fname . " " . $lname;
}
echo concat_str("Habibul", "Islam");






echo "\n\n";
echo "Problem - 3\n";
echo "-----------\n";
// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
function remove_first_and_last($arr){
    array_pop($arr);
    array_shift($arr);
    return $arr;
}
$my_arr = ['Habibul Islam', "Md.Emon", "Emran", "Saifur Rahman Rahat"];
print_r(remove_first_and_last($my_arr));




echo "\n\n";
echo "Problem - 4\n";
echo "-----------\n";
// 4.Write a PHP function to check if a string contains only letters and whitespace.
function str_checker($str){
    $pass = false;
    $results = [];
    $letters = [
        'A', 'B', 'C', 'D', 'E', 
        'F', 'G', 'H', 'I', 'J', 
        'K', 'L', 'M', 'N', 'O', 
        'P', 'Q', 'R', 'S', 'T', 
        'U', 'V', 'W', 'X', 'Y', 
        'Z'];
    
    for($i = 0; $i < strlen($str); $i++){
        if( $str[$i] !== " "){
            foreach($letters as $letter){
                if($letter === strtoupper($str[$i]) || $letter === strtolower($str[$i])){
                    array_push($results, $str[$i]);
                } 
            }
        } else {
            array_push($results, $str[$i]);
        }
    }

   if( count($results) == strlen($str) ){
        $pass = true;
   }

    return $pass;

}

//return true
var_dump( str_checker("I am Habibul Islam Hasib") );

//return false
var_dump( str_checker("I am Habibul Islam %*^ Hasib") );





echo "\n\n";
echo "Problem - 5\n";
echo "-----------\n";
//5.Write a PHP function to find the second largest number in an array of numbers.

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