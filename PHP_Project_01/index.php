<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Project_01</title>
</head>
<body>
    <?php
        $hodnota = 10;
        $druha = 4;
        $vysledok = 0;

        $vysledok = $hodnota * $druha;
        echo $vysledok;
        echo '<br>';
               
        if ( $hodnota < $druha) {
            echo 'Dedí vec, isto';
        }
        else {
            echo 'Pičovina isto';
        }
    ?>

</body>
</html>