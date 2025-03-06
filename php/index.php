<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $name = 'Nazmul';
    $roll = 3;
    $village = 'Italy';
    //asociative aray
    $total = array( 'name'=>'nazmul', 'roll'=>3, 'village'=>'italy' );

    echo $name.'<br>'.$roll.'<br>';
    echo $total['name'] .' <br>'. $total['roll'];
    echo '<pre>';
    var_dump($total);


    define( 'CROUNTY', 'BAGLADESH');
    echo CROUNTY;
   

    echo "<br>";
    echo "<br>";
    echo "operator";
     echo "<br>";
     echo "<br>";
 //Arithmetice operator
    $y = 9;
    $x = 5;
    $total = $y + $x;

    echo $total;
    
    echo "<br>";
     echo "<br>";
    //Assignment operator
     $y = 9;
     $x = 5;
    //  $y = $y + $x;
     $y +=$x;
     echo $y;

    echo "<br>";
    echo "<br>";

    //Comparison Operator

    $y =  9;
    $x =  6;
    if( $y === $x){
        echo 'Both are samr';
    }
    else if( $x != 5 ){
        echo 'this is'.' '. $x;
    }else{
        echo "both are not same";
    }

    echo "<br>";
    echo "<br>";

    // Logical Operator
    $t = 4;
    $x = 3;

    if( $t ===4 || $x === 5){
        echo " this value is true";
    }else{
        echo "this value is not true";
    }
    // if( !$a ?? false){
    //     echo 'there is no a';
    // }

    // if( !isset($a) || !$a){
    //     echo "there is no a";
    // }


    echo "<br>";
    echo "<br>";

    //ternary operator

    $j = 4 ;
    $k = 8 ;

    echo $k === 9 ? 'this is true' : 'this is false';

    
    ?>
</body>
</html> 