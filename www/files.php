<?php
$file = fopen(__DIR__ . '/file.txt', 'r');
//
while (!feof($file)) {
    echo fgets($file);
    echo '<br>';
}
fclose($file);
?>

<?php
$file = fopen(__DIR__ . '/file2.txt', 'w');
for($i = 1; $i < 101; $i++) {
    fputs($file, $i . PHP_EOL);
}
fclose($file);
