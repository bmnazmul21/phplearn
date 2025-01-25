<h1>Recommended Books</h1>
    <?php
    $books = array(
        'Do Andoids Deams of electric sheep',
        'The Langoliers',
        'Hail Mary'
    );
    
    ?>

    <ul>
        <?php foreach( $books as $book): ?>

            <li><?php echo $book ; ?></li>
        
        <?php endforeach; ?>
    </ul>