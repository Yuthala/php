<?php
$login = !empty($_GET['login']) ? $_GET['login'] : '';
$password = !empty($_GET['password']) ? $_GET['password'] : '';

if($login === 'admin' && $password === 'Pa$$w0rd') {
    $authResult = "Авторизация прошла успешно";
} else if ($login !== 'admin') {
    $authResult = 'Пользователь не найден';
} else {
    $authResult = 'Пароль неверный';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
    <p><?= $authResult?></p>

</body>
</html>


