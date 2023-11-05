<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Имекс-Дон</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
  </head>
  <body>

    <?php include './components/navbar.php' ?>
   <header class="mh-100">
      <div class="container mh-100">
        <div class="content row d-flex align-items-center wh-100">
          <div class="col-12 col-md-8">
            <h1 class="fw-bold">Мы — одни из лидеров по экспорту стекла, оконных профилей и коплектующих в Ростове-на-Дону</h1>
          </div>
        </div>
      </div>
    </header>
    <main class="my-5">
      <div class="container d-flex flex-column">
        <div class="row mb-5 p-3 d-flex justify-content-center">
          <div class="col-5 col-md-2">
            <img src="./assets/images/storage-icon.svg" alt="">
            <p>Оформеление на СВХ</p>
          </div>
          <div class="col-5 col-md-2">
            <img src="./assets/images/truck.svg" alt="">
            <p>Доставка во все регионы</p>
          </div>
          <div class="col-5 col-md-2">
            <img src="./assets/images/partners.svg" alt="">
            <p>Более 10 контрагентов</p>
          </div>
          <div class="col-5 col-md-2">
            <img src="./assets/images/champion.svg" alt="">
            <p>Лучшее качество</p>
          </div>
        </div>
        <div class="export d-flex flex-column justify-content-center mb-5">
          <div class="title align-self-center mb-3">
            <h1>Мы поставляем</h1>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="card col-12 col-sm-5 p-1 border-0">
              <img src="./assets/images/al_profil.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Алюминеевые профили</h5>
                <p class="card-text">Небольшой пример текста, который должен основываться на названии карточки и составлять основную часть содержимого карты.</p>
                <a href="#" class="btn btn-primary">Подробнее</a>
              </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="card col-12 col-sm-5 p-1 border-0">
              <img src="./assets/images/al_profil.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Алюминеевые профили</h5>
                <p class="card-text">Небольшой пример текста, который должен основываться на названии карточки и составлять основную часть содержимого карты.</p>
                <a href="#" class="btn btn-primary">Подробнее</a>
              </div>
            </div>
            <div class="card col-12 col-sm-5 p-1 border-0">
              <img src="./assets/images/al_profil.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Алюминеевые профили</h5>
                <p class="card-text">Небольшой пример текста, который должен основываться на названии карточки и составлять основную часть содержимого карты.</p>
                <a href="#" class="btn btn-primary">Подробнее</a>
              </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="card col-12 col-sm-5 p-1 border-0">
              <img src="./assets/images/al_profil.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Алюминеевые профили</h5>
                <p class="card-text">Небольшой пример текста, который должен основываться на названии карточки и составлять основную часть содержимого карты.</p>
                <a href="#" class="btn btn-primary">Подробнее</a>
              </div>
            </div>
          </div>
        </div>

        <?php include './components/carousel_photo.php'; ?>
      </div>
    </main>
    <?php include './components/contact_info.php'; ?>
    <?php include './components/contact_form.php'; ?>

    <?php include './components/map.php'; ?>
    <?php include './components/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- <script src=".js/jquery.js"></script> -->
    <!-- <script src=".js/owl.carousel.min.js"></script> -->
    <!-- <script src="/js/index.js"></script> -->
  </body>
</html>
