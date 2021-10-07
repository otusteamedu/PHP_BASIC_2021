<!DOCTYPE html>
<html>
<head>
    <title>HomeWork 13</title>
</head>
<body>
<div>
    <ul>
        <?php
        $aMenu = [
            'Обо мне' => [
                'Резюме',
                'Контанкты'
            ],
            'Портфолио' => [
                'Приложения', 'Сайты'
            ],
            'Услуги' => [
                'Список',
                'Стоимость'
            ]
        ];
        foreach ($aMenu as $first => $secondaries) { ?>
            <li><a href="#"><?= $first; ?></a>
                <ul>
                    <?php
                    foreach ($secondaries as $secondary) {
                        ?>
                        <li><a href="#"><?= $secondary; ?></a></li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
    </ul>
</div>
</body>
</html>