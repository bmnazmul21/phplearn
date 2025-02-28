<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            font-family: sans-sarif;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <h1>Recommended Books</h1>
    <?php
    $books = array(
        array(
            'name' => 'Do Andoids Deams of electric sheep',
            'author' => 'nazmul',
            'purchaseUrl' => 'http//example.com' 
        ),
        array(
            'name'          => 'The Langoliers',
            'author'        => 'hasan',
            'purchaseUrl'   => 'http//example.com'
        )
    );
    ?>
    <ul>
        
            <?php foreach( $books as $book): ?>
            <li> <?php echo $book['name'];  ?></li>
            <li> <?php echo $book['author'];  ?></li>
            <a href="<?php echo $book['purchaseUrl'];  ?>">purchaseUrl</a><br/> <br/>
        <?php endforeach; ?>
    </ul>
</body>
</html> 