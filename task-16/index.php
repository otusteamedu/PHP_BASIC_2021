<?
$dir    =  __DIR__ . '/imgs';
$photoArr = scandir($dir);

foreach ($photoArr as $key => $value) {
    $photoArr[$key] = "/imgs" . "/" . $value;
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        .galery {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .galery_item img {
            width: 100px;
        }
    </style>
</head>

<body>
    <div class="galery">
        <? for ($i = 2; $i < count($photoArr); $i++) {?>
            <div class="galery_item">
                <a href="<?= $photoArr[$i] ?>" target="_blank" rel="noopener noreferrer">
                    <img src="<?= $photoArr[$i] ?>" alt="">
                </a>
            </div>
        <? } ?>
    </div>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="file">Загрузка файлов:</label>
        <input type="file" name="foto" id="file">
        <input type="submit" value="Загрузить">
    </form>
</body>

</html>