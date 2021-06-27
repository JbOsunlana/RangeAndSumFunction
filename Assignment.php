<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $number = range(0,10);
    print_r ($number);

    ?>

    <hr>
    
    <?php
    $array = array(5, 6, 7, 8, 9, 10);

    echo array_sum($array);

    ?>

</body>
</html>