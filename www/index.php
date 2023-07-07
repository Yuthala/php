<!DOCTYPE html>

<?php
    include __DIR__ . '/functions.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пример встраивания PHP в HTML</title>

    <style>
        table, td {
            border: solid black 1px;
            border-collapse: collapse;
        }

        #layout {
            width: 800px;
            margin: auto;
        }

        #layout td {
            padding: 20px;
        }

        #sidebar {
            width: 300px;
        }
    </style>
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
    ?><br>
    <?php
        echo __DIR__;
    ?><br>

    
        Число 2 <?= isEven(2) ? 'четное' : 'нечетное'?> <br>
        Число 5 <?= isEven(5) ? 'четное' : 'нечетное' ?> <br>
        Число 8 <?= isEven(8) ? 'четное' : 'нечетное' ?> <br>
<hr>
<table id="layout">
    <tr>
        <td colspan="2">HEADER</td>
    </tr>

    <tr>
        <td id="sidebar">SIDEBAR</td>
        <td>CONTENT</td>
    </tr>

    <tr>
        <td colspan="2">FOOTER</td>
    </tr>
</table>
    
</html>


