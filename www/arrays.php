<?php
$array = [
  'book' => [
      'Преступление и наказание' => [
              'heroes' => [
                      ['Раскольников' => 'студент'],
                      ['Старуха' => 'процентщица']
              ]
        ]
  ]

];

$array['book']['Преступление и наказание']['heroes'][] = ['Соня Мармеладова' => 'девушка студента'];

var_dump($array);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Массивы</title>
</head>
<body>
    <h4><?= $array['book']['Преступление и наказание']['heroes'][2] ?></h4>

</body>
</html>

<!--$array = [-->
<!--    'film' => [-->
<!--        'The Dark Knight' => [-->
<!--            'Stars' => [-->
<!--                ['Christian Bale' => 'born - January 30, 1974'],-->
<!--                ['Aaron Eckhart' => 'born -  March 12, 1968']-->
<!--            ]-->
<!--        ]-->
<!--    ]-->
<!--];-->
<!--$array['film']['The Dark Knight']['Stars'][] = ['Heath Ledger' => 'born - April 4, 1979'];-->