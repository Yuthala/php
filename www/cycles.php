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
