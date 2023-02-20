<?php
// Write a PHP function to concatenate two strings, 
// but with the second string starting from the end of the first string.

function concat_str($fname, $lname){
    return $fname . " " . $lname;
}
echo concat_str("Habibul", "Islam");