<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
</head>
<body>
    <div style="text-align: center">
        <h1>Форма обратной связи</h1>
        <form action="feedback.php" method="post">
            <label for="text">Введите ваш текст:</label><br>
            <textarea name="text" id="text" cols="55" rows="5"></textarea>
            <input type="submit" value="Отправить">
        </form>
    </div>
</body>
</html>