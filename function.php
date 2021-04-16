<?php 
function displayDate(){
    $input = 'September 14, 2029 11:35:00';
    $date = strtotime($input);
    echo strtoupper( date('Y-m-d h:i:s a', $date));
}   
?>