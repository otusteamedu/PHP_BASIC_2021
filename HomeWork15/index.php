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
        <input type="file" name="upload" accept="image/png, image/jpeg"/>
        <input type="submit" value="Загрузить файл"/>
    </form>

    <?php

    $imageDir = 'img' . DIRECTORY_SEPARATOR;
    $imageSmallDir = $imageDir . 'small' . DIRECTORY_SEPARATOR;

    if (isset($_FILES['upload']) && is_uploaded_file($_FILES['upload']['tmp_name'])) {
        if ($_FILES['upload']['error']) {
            echo "Не удалось загрузить файл. Код ошибки:{$_FILES['upload']['error']}." . PHP_EOL;
        } elseif (strpos($_FILES['upload']['type'], 'image/') === false) {
            echo "Файл {$_FILES['upload']['name']} не является изображением." . PHP_EOL;
        } else {
            $fileOriginal = $imageDir . basename($_FILES['upload']['name']);
            $fileSmall = $imageSmallDir . basename($_FILES['upload']['name']);

            if (!is_dir($imageSmallDir)) {
                mkdir($imageSmallDir);
            }

            if (!move_uploaded_file($_FILES['upload']['tmp_name'], $fileOriginal)) {
                echo "Не удалось скопировать загруженный файл!" . PHP_EOL;
            } else {
                if ($_FILES['upload']['type'] == "image/jpeg") {
                    $image = imagecreatefromjpeg($fileOriginal);
                } elseif ($_FILES['upload']['type'] == "image/png") {
                    $image = imagecreatefrompng($fileOriginal);
                }
                if (!empty($image)) {
                    $imageSmall = imagescale($image, 200);

                    if ($_FILES['upload']['type'] == "image/jpeg") {
                        imagejpeg($imageSmall, $fileSmall);
                    } elseif ($_FILES['upload']['type'] == "image/png") {
                        imagepng($imageSmall, $fileSmall);
                    }
                }
            }
        }
    }

    if (is_dir($imageSmallDir)) { ?>
        <div class="previews">
            <?php
            $aImages = scandir($imageSmallDir);
            foreach ($aImages as $image) {
                if (in_array($image, ['.', '..']) || !is_file($imageSmallDir . $image)) {
                    continue;
                } ?>
                <div class="item">
                    <a href="<?= $imageDir . $image ?>" target="_blank">
                        <img src="<?= $imageSmallDir . $image ?>" alt="Тут должно быть изображение">
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</section>
</body>
</html>