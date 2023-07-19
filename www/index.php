<?php
$login = !empty($_GET['login']) ? $_GET['login'] : 'Логин не передан';
$password = !empty($_GET['password']) ? $_GET['password'] : 'пароль не передан';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Знакомство в GET запросами</title>
</head>
<body>
    <p>
        Переданный логин: <?= $login ?>
        <br>
        Переданный пароль: <?= $password ?>
    </p>
</body>
</html>
