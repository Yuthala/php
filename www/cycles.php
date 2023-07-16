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

?>

//<?php
//
//$array = [2, 3, 6, 1, 23, 2, 56, 7, 1, 15];
//$number = 1;
//
//$isNumberFound = false;
//foreach ($array as $item) {
//    echo 'Сравниваем с числом элемент ' . $item . '<br>';
//    if ($item === $number) {
//        $isNumberFound = true;
//        break;
//    }
//}
//
//echo $isNumberFound ? 'Число найдено' : 'Число не найдено';
//
//?>

<?php
for ($i = 1; $i <= 20; $i++) {
    if ($i % 3 === 0) {
        continue;
    }

    echo $i;
    echo ' ';

}
echo '<br>';
?>

<?php
    function checkNumber (array $array, int $num) {
        foreach($array as $item) {
            if ($item === $num) {
                return true;
            } else {
                return false;
            }
        }
}

checkNumber ([4, 8, 16, 32, 64], 2);
?>

