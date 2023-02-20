<?php 
// Write a PHP function to check if a string contains only letters 
// and whitespace.
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

