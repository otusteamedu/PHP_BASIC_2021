<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <title>Привет мир!</title>
  </head>

  <body>

    <div class="container">
      <div class="col">
        <section>

        <form method="post" action="" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleFormControlFile1">Загрузите ваш файл<br></label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="upload">
            <input type="submit" value="Загрузить файл"/>
          </div>
        </form>

        <?php

              $imageDir = 'image' . DIRECTORY_SEPARATOR;

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
                                  <img src="<?= $imageDir . $image ?>" alt="Новое изображение">
                              </a>
                          </div>
                      <?php endforeach; ?>
                  </div>
              <?php endif; ?>
              
        </section>
      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>

</html>