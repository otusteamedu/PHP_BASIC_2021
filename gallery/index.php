<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Work 9 Files</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        $images = scandir('./img', SCANDIR_SORT_NONE);
    ?>

    <section class="gallery-flex">
        <h2 class="gallery_heading">My books gallery</h2>
            <div class="frame-flex">
                <?php foreach ($images as $key => $filename) {
                    if ($filename !== '.' && $filename !== '..') {
                        ?>
                        <div class="product-item">
                            <div class="product-image">
                                <a href="<?='./img/'.$filename;?>" target="_blank">
                                    <img src="<?='./img/'.$filename;?>" alt="Book picture" width="120px" height="150px">
                                </a>
                            </div>
                         </div>
                    <?php }
                }
                ?>
            </div>

        <div class="upload-more">
            <form enctype="multipart/form-data" method="post">
                <p><input type="file" name="f">
                    <input type="submit" value="Upload your book image">
                </p>
            </form>
        </div>
    </section>

</body>
</html>
