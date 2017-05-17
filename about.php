<!DOCTYPE>
<html lang="ru">
    <head>
        <title>Антон Боровицкий</title>
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
        $userName = 'Антон Боровицкий';
        $userAge = '34';
        $userMail = 'bas@raido-global.ru';
        $userCity = 'Санкт-Петербург';
        $userInfo = 'ВЭД/back-end programmer';
        ?>
        <h1>Страница пользователя Антон</h1>
        <dl>
            <dt>Имя</dt>
            <dd><?= $userName ?></dd>
        </dl>
        <dl>
            <dt>Возраст</dt>
            <dd><?= $userAge ?></dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты</dt>
            <dd>
                <a href='mailto:bas@raido-global.ru'><?= $userMail ?></a>
            </dd>
        </dl>
        <dl>
            <dt>Город</dt>
            <dd><?= $userCity ?></dd>
        </dl>
        <dl>
            <dt>О себе</dt>
            <dd><?= $userInfo ?></dd>
        </dl>
    </body>
</html>
