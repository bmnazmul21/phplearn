<?php 
$expire_time = time() + 10 *1;
setcookie( 'ns_nazmul_hasan', 'this is cookies value', $expire_time, '/' );

var_dump( $_COOKIE[ 'ns_nazmul_hasan' ]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




    <div class="container" style="margin-left: 600px;">
            <?php
                $first_name = '';
                $last_name = '';
                $email = '';

                if( $_SERVER[ 'REQUEST_METHOD' ] ==='POST' ){
                    $first_name = $_POST[ 'first_name' ];
                    $last_name = $_POST[ 'last_name' ];
                    $email = $_POST[ 'email' ];
                }
            ?>

        <form action="<?php echo $_SERVER[ 'PHP_SELF' ]; ?>" method="POST">
            <div style="margin-bottom: 10px;">
                <input type="text" name="first_name" placeholder="first name">
            </div>
            <div style="margin-bottom: 10px;">
                <input type="text" name="last_name" placeholder="last_name name">
            </div>
            <div style="margin-bottom: 10px;">
                <input type="email" name="email" placeholder="email address">
            </div>
            <button type="submit">submit</button>
        </form>
        <h2>Form Data</h2>
        <ul>
            <li><?php echo  $first_name ;?></li>
            <li><?php echo  $last_name ;?></li>
            <li><?php echo $email ;?></li>
        </ul>
    </div>

</body>
</html>