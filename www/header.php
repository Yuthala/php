<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пример встраивания PHP в HTML</title>

    <style>
        table, td {
            border: solid black 1px;
            border-collapse: collapse;
        }

        #layout {
            width: 800px;
            margin: auto;
        }

        #layout td {
            padding: 20px;
        }

        #sidebar {
            width: 300px;
        }
    </style>
</head>
<body>
    <table id="layout">
    <tr>
        <td colspan="2"><?=$header ?></td>
    </tr>
    <tr>