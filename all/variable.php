<?php
        $name = "Dark Matter";
        $read = true;
        if( $read ){
            $message = "You have read $name ";
        } else{
            $message = " You have not read $name";
        }
    ?>
    <h1> <?php echo $message; ?> </h1>