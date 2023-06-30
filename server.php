<?php
    $word = $_GET['firstWord'];
    $second_word = $_GET['wordToCensor'];
    $banned_words = array("cattivo","cretino fosforescente","infame");
    $good_words = array("tesoro","cuore","bello")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>server</title>
</head>
    <body>
        <p>
            <?php echo $word ?>
        </p>
        <p>
            parola da censurare: <?php echo $second_word ?>
        </p>

        <p>
            parola nuova e amorevole: <?php echo $word." ".str_ireplace($banned_words,$good_words,$second_word) ?>
        </p>
    </body>
</html>