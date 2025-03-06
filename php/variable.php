<?php

$favorite = 'red';

// if( $favorite === 'red' ){
//     echo 'yes, red is my favorite color';
// }else if( $favorite === 'green' ){
//     echo 'yes, green is my favorite color';
// }else if( $favorite === 'yellow'){
//     echo 'yes, yellow is my favorite color';
// }else{
//     echo 'every color is my favorites';
// }

switch( $favorite ){
    case  'blue';
        echo 'yes, red is my favorite color';
        break;
    case 'green';
        echo 'yes, green is my favorite coloe';
        break;
    case 'red';
        echo 'yes, yellow is my favorite coloe';
        break;
    default:
        echo 'every color is my favorite color';
}