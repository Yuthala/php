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
function findNum(array $array, int $num)
{
foreach ($array as $volume) {
if ($volume === $num) {
    echo 'Номер найден';
return true;

}
}
    echo 'Такого номера нет((';
return false;

}

findNum([2, 4, 6, 8, 16], 4);
echo '<br>';
findNum([1, 45, 56, 3, 67], 18);

?>
<?php

    function countInArray ( array $array, int $num) {
        $count = 0;
         foreach ($array as $item) {
             if ($item === $num) {
                 $count++;
                 echo $count . '<br>';
             } else {
                 echo 'Номер не найден' . '<br>';
             }
         }  return $count;
    }
    countInArray([1, 2, 5, 4, 5, 7, 89, 5], 5);

?>

<?php
$array = [
    'login' => 'admin'
];

if (array_key_exists('password', $array)) {
    echo $array['password'];
} else {
    echo 'Ключ "password" в массиве не найден' . '<br>';
    }
?>

<?php
$numbers = [
    1, 0, 7, 4
];

if (in_array(7, $numbers)) {
    echo "В массиве есть число 7" . '<br>';
}
