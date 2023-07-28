$file = fopen(__DIR__ . '/file.txt', 'r');
for($i = 0; $i < 4; $i++) {
    echo fgets($file);
    echo'<br>';
}
fclose($file);