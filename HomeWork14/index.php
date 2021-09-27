<!DOCTYPE html>
<html>
<head>
    <title>HomeWork 14</title>
    <style>
        section {
            margin: 25px;
        }

        .previews {
            margin-top: 50px;
        }

        .item {
            width: 200px;
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        img {
            width: 100%;
        }
    </style>
</head>
<body>
<section>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="upload"/>
        <input type="submit" value="Загрузить файл"/>
    </form>

    <?php

    $imageDir = 'img' . DIRECTORY_SEPARATOR;

    if (isset($_FILES['upload']) && is_uploaded_file($_FILES['upload']['tmp_name'])) {
        if ($_FILES['upload']['error']) {
            echo "Не удалось загрузить файл. Код ошибки:{$_FILES['upload']['error']}." . PHP_EOL;
        } elseif (strpos($_FILES['upload']['type'], 'image/') === false) {
            echo "Файл {$_FILES['upload']['name']} не является изображением." . PHP_EOL;
        } else {
            if (!is_dir($imageDir)) {
                mkdir($imageDir);
            }

            if (!move_uploaded_file($_FILES['upload']['tmp_name'], $imageDir . basename($_FILES['upload']['name']))) {
                echo "Не удалось скопировать загруженный файл!" . PHP_EOL;
            }
        }
    }

    if (is_dir($imageDir)): ?>
        <div class="previews">
            <?php
            $aImages = scandir($imageDir);
            foreach ($aImages as $image):
                if (in_array($image, ['.', '..']) || !is_file($imageDir . $image)) {
                    continue;
                } ?>
                <div class="item">
                    <a href="<?= $imageDir . $image ?>" target="_blank">
                        <img src="<?= $imageDir . $image ?>" alt="Тут должно быть изображение">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>
</body>
</html>