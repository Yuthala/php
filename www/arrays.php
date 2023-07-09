<?php
    $article = [
        'book' => [
            'title'=> 'Заголовок статьи',
            'text'=> 'Текст статьи',
            'author'=> [
                    'first_name'=> 'John',
                    'last_name' => 'Wilkinson'
            ],
            'description' => [
                    'genre' => 'fiction',
                    'category' => [
                            ['topic' => 'science'],
                            ['subcategory' => 'adventures']
                    ]
            ]
        ]
    ];

    $article['book']['description']['category'][] = ['shelf' => '5'];
    var_dump($article);
?>
<?php
    $array = [
        'film' => [
            'The Dark Knight' => [
                'Stars' => [
                    ['Christian Bale' => 'born - January 30, 1974'],
                    ['Aaron Eckhart' => 'born -  March 12, 1968']
                    ]
                ]
            ]
        ];
    $array['film']['The Dark Knight']['Stars'][] = ['Heath Ledger' => 'born - April 4, 1979'];
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
</head>
<body>
<!--    <h1>--><?php //= $article['title'] ?><!--</h1>-->
<!--    <p>--><?php //= $article['text'] ?><!--</p>-->
<!--    <p><em>--><?php //= $article['book']['author']['first_name'] . ' ' . $article['book']['author']['last_name'] ?><!--</em></p>-->
<!--    <p>--><?php //= $article['book']['description']['genre'] ?><!--</p>-->
<!--    <p>--><?php //= $article['book']['description']['category']['topic'] ?><!--</p>-->
<!--    <p>--><?php //= $article['book']['description']['category']['subcategory'] ?><!--</p>-->
<!--    <p>--><?php //= $article['book']['description']['category']['shelf'] ?><!--</p>-->


</body>
</html>
