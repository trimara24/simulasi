<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SMKN 4 TASIKMALAYA</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./vendor/bs/bs.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>


<body>
  <?php include 'navbar.php'; ?>
  <!-- SECTION GALERI -->
  <?php
  function getImages()
  {
    return[
    'img/ri1.JPG',
    'img/ri2.JPG',
    'img/ri3.JPG',
    'img/ri4.JPG',
    'img/ri5.JPG',
    'img/ri6.JPG'
    ];
  }
  $galeri = getImages();
  $i = 0;
  ?>
  <section>
    <div class="container p-4 mt-5 my-5">
      <div class="row">
        <h3 class="mb-0 my-5 "></h3>
        <h3 class="text-primary ">Galeri</h3>
        <div class="card">
          <div class="col-lg-12">
            <h3 class="text-center">PERINGATAN HUT RI KE-80</h3>
            <hr>
            <div class="row m-3">
              <?php while ($i < count($galeri)): ?>
                <div class="col-lg-4">
                  <img src="<?= $galeri[$i] ?>" class="img-fluid rounded">
                </div>
                <?php $i++; ?>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- TUTUP GALERI -->

  <!-- SECTION GALERI 2 -->

  <?php
  $galeri = [
    'img/m1.JPG',
    'img/m2.JPG',
    'img/m3.JPG',
    'img/m4.JPG',
    'img/m5.JPG',
    'img/m6.JPG'
  ];
  $i = 0;
  ?>
  <section>
    <div class="container p-4 mt-5 my-5">
      <div class="row">
        <h3 class="mb-0 my-5 "></h3>
        <div class="card">
          <div class="col-lg-12">
            <h3 class="text-center">MBG SMKN 4 TASIKMALAYA</h3>
            <hr>
            <div class="row m-3">
              <?php while ($i < count($galeri)): ?>
                <div class="col-lg-4">
                  <img src="<?= $galeri[$i] ?>" class="img-fluid rounded">
                </div>
                <?php $i++; ?>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- TUTUP GALERI 2 -->


  <!-- SECTION GALERI 3 -->

  <?php
  $galeri = [
    'img/ls1.jpg',
    'img/ls2.jpg',
    'img/ls3.jpg',
    'img/ls4.jpg',
    'img/ls5.jpg',
    'img/ls6.jpg'
  ];
  $i = 0;
  ?>
  <section>
    <div class="container p-4 mt-5 my-5">
      <div class="row">
        <h3 class="mb-0 my-5 "></h3>
        <div class="card">
          <div class="col-lg-12">
            <h3 class="text-center">MPLS 2025</h3>
            <hr>
            <div class="row m-3">
              <?php while ($i < count($galeri)): ?>
                <div class="col-lg-4">
                  <img src="<?= $galeri[$i] ?>" class="img-fluid rounded">
                </div>
                <?php $i++; ?>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- TUTUP GALERI 3 -->




</body>
</html>