<?php 



// function proceseMarks( $MarkArr ){
//     $sum = 0;
//     foreach( $MarkArr as $value ){
//         $sum += $value;
//     }
//     return $sum;
// }

// $Nazmul = [89,66,44,89,90];
// $SumMark = proceseMarks( $Nazmul );

// echo "Total Marks secore by nazmul out of 600 is $SumMark ";

function processMarks( $markArr ){
    $sum = 0;
    foreach( $markArr as $numbers ){
        $sum += $numbers;
    }
    return $sum ;
}

function avgMarks( $markArr ){
    $sum = 0;
    $avg = 1;
    foreach( $markArr as $numbers ){
        $sum += $numbers;
        $avg++;
    }
    return $sum/$avg;
}

$nazmul = [78,88,91,86,77,90];
$TotalMarks = processMarks( $nazmul );
$AvglMarks = avgMarks( $nazmul );
echo "total marks secore by nazmul out of 600 is $TotalMarks " . "<br>";
echo "total marks secore by nazmul out of 600 is $AvglMarks " . "<br>";