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

<body style="background-color: whitesmoke;">

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>


  <div class="container mt-5">

    <!-- Section: Berita -->
 <div class="row">
  <div class="col-lg-12">
    <h3 class="mb-0">Berita <br><span class="text-primary">Terbaru</span></h3>
    <p class="mt-2 mb-0 text-muted">Update kegiatan, kisah inspiratif, dan deretan keberhasilan yang lahir dari semangat warga sekolah kami.</p>
  </div>
</div>


     
        <div class="row g-4 mt-3">
          <div class="col-lg-6">
            <div class="card h-100">
              <div class="card-header p-0">
                <a href="#"><img src="img/Poto2.JPG" class="img-fluid" alt="Pelepasan" width="700" height="300"></a>
              </div>
              <div class="card-body">
                <h3><b>Pelepasan Kelas XII - 2025</b></h3>
                <a class="btn btn-primary" href="https://youtu.be/8iZH3nDMxZM?si=ffbWXDQW9tNmi58v" target="_blank">Baca Selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card h-100">
              <div class="card-header p-0">
                <a href="#"><img src="img/ri2.JPG" class="img-fluid" alt="Jalan Sehat" width="700" height="300"></a>
              </div>
              <div class="card-body">
                <h3><b>Jalan Sehat HUT RI ke-80 2025</b></h3>
                <a class="btn btn-primary" href="https://s.id/JALAN-SEHAT-HUTRI-80" target="_blank">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Section: Berita -->


    <!-- SECTION GALERI -->
  <?php
  $galeri = [
    'img/mbg1.JPG',
    'img/mbg2.JPG',
    'img/mbg3.JPG',

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

     
      </div> <!-- End Container -->

    <!-- Section: Statistik -->
     <div class="container-fluid">
    <div class="row m-5">
      <div class="col-md-3">
        <div class="card text-white h-100" style="background-color: rgb(15, 102, 136);">
          <div class="card-body text-center">
            <i class="bi bi-person-video3 display-3"></i>
            <h4 class="mt-3">100 orang</h4>
            <p>Guru / Pendidik</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card text-white h-100" style="background-color: rgb(15, 102, 136);">
          <div class="card-body text-center">
            <i class="bi bi-people-fill display-3"></i>
            <h4 class="mt-3">1500 orang</h4>
            <p>Peserta Didik</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card text-white h-100" style="background-color: rgb(15, 102, 136);">
          <div class="card-body text-center">
            <i class="bi bi-layers display-3"></i>
            <h4 class="mt-3">45 Rombel</h4>
            <p>Rombongan Belajar</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card text-white h-100" style="background-color: rgb(15, 102, 136);">
          <div class="card-body text-center">
            <i class="bi bi-journal-code display-3"></i>
            <h4 class="mt-3">5</h4>
            <p>Program Keahlian</p>
          </div>
        </div>
      </div>
    </div>

</div>
    <!-- End Section: Statistik -->

 

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>