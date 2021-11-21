<? 
  $DateTime = new DateTime('NOW');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <title>Klean</title>
</head>

<body>
  <header>
    <div class="navbar navbar-expand-lg">
      <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start header">

        <a href="/" class="d-flex logo">
          <img src="img/Logo.png" alt="Логотип">
        </a>

        <nav class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown_1" data-bs-toggle="dropdown"
                aria-expanded="true">Home</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown_1" data-bs-popper="none">
                <li><a class="dropdown-item" href="#">1</a></li>
                <li><a class="dropdown-item" href="#">2</a></li>
                <li><a class="dropdown-item" href="#">3</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown_2" data-bs-toggle="dropdown"
                aria-expanded="true">Service</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown_2" data-bs-popper="none">
                <li><a class="dropdown-item" href="#">1</a></li>
                <li><a class="dropdown-item" href="#">2</a></li>
                <li><a class="dropdown-item" href="#">3</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown_3" data-bs-toggle="dropdown"
                aria-expanded="true">Works</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown_3" data-bs-popper="none">
                <li><a class="dropdown-item" href="#">1</a></li>
                <li><a class="dropdown-item" href="#">2</a></li>
                <li><a class="dropdown-item" href="#">3</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown_4" data-bs-toggle="dropdown"
                aria-expanded="true">News</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown_4" data-bs-popper="none">
                <li><a class="dropdown-item" href="#">1</a></li>
                <li><a class="dropdown-item" href="#">2</a></li>
                <li><a class="dropdown-item" href="#">3</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown_5" data-bs-toggle="dropdown"
                aria-expanded="true">Contact</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown_5" data-bs-popper="none">
                <li><a class="dropdown-item" href="#">1</a></li>
                <li><a class="dropdown-item" href="#">2</a></li>
                <li><a class="dropdown-item" href="#">3</a></li>
              </ul>
            </li>
          </ul>
        </nav>

        <div class="text-end">
          <button type="button" class="btn btn-login">Log In</button>
          <button type="button" class="btn btn-signup">Sign Up</button>
        </div>

        <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div>
    </div>
  </header>
  <main>

    <section class="container showcase pb-5">
      <div class="row">

        <div class="order-1 order-lg-0 col-lg-5 col-md-12 mr-auto showcase_text">
          <h1 class="fw-light"><span class="title-1">Bootstrap&nbsp;5&nbsp;theme</span> crafted&nbsp;by&nbsp;<span
              class="title-2">ThemeWagon</span></h1>
          <p class="lead text-muted">ThemeWagon offers an wide array of category-oriented Free and Premium Bootstrap
            HTML Templates and Themes. </p>
          <a href="#" class="btn btn-primary">Check Demo</a>
        </div>

        <div class="order-0 order-lg-1 col-lg-7 col-md-12 mr-auto">
          <img class="showcase_img" src="img/schowcase/Illusration.png" alt="" width="100%">
        </div>
      </div>

    </section>

  </main>
  <?
    require_once("footer.php");
  ?>
</body>

</html>