<!DOCTYPE html>
<html lang="en">
    <?php
//Подключаем PHP Data Object
    $dbh = new \PDO(
        'mysql:host=localhost;dbname=my_db;',
        'root',
        'root'
    );
    //устанавливаем кодировку
    $dbh->exec('SET NAMES UTF8');
    //формируем запрос к БД - если нужно добавить данные в БД
    $stm = $dbh->prepare('INSERT INTO users (`email`, `name`) VALUES (:email, :name)');
    $stm->bindValue('email', 'x100@php.zone');
    $stm->bindValue('name', 'Вячеслав');
    $stm->execute();
    //SELECT запрос из БД (получаем даные из БД)
    $dbh = new \PDO('mysql:host=localhost;dbname=my_db;', 'root', 'root');
    $dbh->exec('SET NAMES UTF8');
    $stm = $dbh->prepare('SELECT * FROM `users`');
    $stm->execute();

    $allUsers = $stm->fetchAll();
    var_dump($allUsers);

    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr><td>id</td><td>Имя</td><td>Email</td></tr>
    <?php foreach ($allUsers as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

