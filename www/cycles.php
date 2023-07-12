<?php

$carsSpeed = [
    95,
    140,
    78
];

$sumOfSpeeds = 0;

foreach ($carsSpeed as $speed) {
    $sumOfSpeeds += $speed;
}

$countOfCars = count($carsSpeed);

$averageSpeed = $sumOfSpeeds/$countOfCars;

echo "Средняя скорость движения по трассе: " . $averageSpeed;
?>

<?php

$i = 0;

while ($i <= 10) {
    echo $i++;
    echo '<br>';
}

?>

<?php
$arr = [];
$x = 354;

while ($x <= 357) {
    if ($x % 2 == 0) {
        $arr[] = $x;
    }
    $x++;
}

foreach($arr as $value) {
    echo $value . ', ';
}

?>

<?php
for ($i = 4; $i < 10; $i++) {
    echo $i;
    echo '<br>';
}