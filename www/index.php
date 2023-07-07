<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пример встраивания PHP в HTML</title>
</head>
<body>
    
</body>
    <h1>Пример встраивания PHP в HTML</h1>
    2 + 2 = <?php echo 2 + 2; ?><br>
    <?php 
        $var = 123;
        echo 'Значение переменной: ' . $var;
    ?><br>
    <?php
        function showMinFloat(float $a, float $b, float $c) {
            echo min($a, $b, $c);
        }

        showMinFloat(2.5, 4.66, 0.7);
    ?>
    <?php
        echo __DIR__;
    ?>
</html>


