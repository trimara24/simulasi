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
  $galeri = [
    'galeri/ri1.JPG',
    'galeri/ri2.JPG',
    'galeri/ri3.JPG',
    'galeri/ri4.JPG',
    'galeri/ri5.JPG',
    'galeri/ri6.JPG'
  ];
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
    'galeri/mbg.JPG',
    'galeri/mbg1.JPG',
    'galeri/mbg2.JPG',
    'galeri/mbg3.JPG',
    'galeri/mbg4.JPG',
    'galeri/mbg5.JPG'
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



</body>
</html>