<?php 

function sayHi( $message ){
    return 'hello, '.$message . ' ! ';
}


function callback_function( $name, $callback){
    return $callback($name);
}
echo callback_function( 'nazmul', 'sayHi');

echo '<br>';
echo '<br>';
echo '<br>';

$number = [2, 3, 5];

function modify_number( $single_number ){
    return $single_number * 6;
}

$number2 = array_map( 'modify_number', $number);

echo '<pre>';
var_dump( $number2 );

echo '<br>';
echo '<br>';
echo '<br>';

//json

$number = [ 3, 5, 7];

$con_stng = json_encode( $number );

var_dump( $number );
echo '<br>';
var_dump($con_stng);

echo 'this is convert string to array';

$con_string_to_array = json_decode( $con_stng );

var_dump( $con_string_to_array );