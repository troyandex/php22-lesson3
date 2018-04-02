<!DOCTYPE>
<html lang="ru">
<head>
    <title>Константин ДЗ-2</title>
    <meta charset="utf-8">
    <style>
        body {
            font-family: sans-serif;  
        }
        
        dl {
            display: table-row;
        }
        
        dt, dd {
            display: table-cell;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <?php
    $FName = 'Константин';
    $SName = 'Пронин';
    $userAge = '27';
    $email = 'troyandex@gmail.com';
    $sity = 'Izhevsk';
    $about = 'краткий текст о себе';
    ?>
    
    <h1>Страница пользователя <?= $FName ?></h1>
    <dl>
        <dt>Имя</dt>
        <dd><?= $SName ?></dd>
    </dl>
    <dl>
        <dt>Возраст</dt>
        <dd><?= $userAge ?></dd>
    </dl>
    <dl>
        <dt>Адрес электронной почты</dt>
        <dd><a href="mailto:<?= $email ?>"><?= $email ?></a></dd>
    </dl>
    <dl>
        <dt>Город</dt>
        <dd><?= $sity ?></dd>
    </dl>
    <dl>
        <dt>О себе</dt>
        <dd><?= $about ?></dd>
    </dl>
</body>
</html>
