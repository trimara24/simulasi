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

      <?php include 'navbar.php';?>

 <!-- SECTION ESKUL -->
     <section>
        <div class="container pt-5 mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0">
                        <h3 class="mb-0">Ekstrakurrikuler</h3>
                        <h3 class="text-primary ">Siswa</h3>
                        <div class="row">
                            <?php
                            $eskul = [
                                ["nama" => "PASKIBRA" , "gambar" => "img/paskibra.png"],
                                ["nama" => "Pramuka" , "gambar" => "img/pramuka.png"],
                                ["nama" => "PMR" , "gambar" => "img/pmr (1).png"],
                                ["nama" => "PLH" , "gambar" => "img/plh.png"],
                                ["nama" => "IT Club" , "gambar" => "img/ITclub.png"],
                                ["nama" => "PKS" , "gambar" => "img/pks.png"],
                                ["nama" => "Perisai Diri" , "gambar" => "img/perisai diri.jpg"],
                                ["nama" => "English Club" , "gambar" => "img/englishclub.png"],
                                ["nama" => "Cinematography" , "gambar" => "img/Cinematography.png"],
                                ["nama" => "Laskar Pustaka" , "gambar" => "img/laskar.png"],
                                ["nama" => "IRMA" , "gambar" => "img/irma.png"],
                                ["nama" => "Bulu Tangkis" , "gambar" => "img/tangkis.png"],
                                ["nama" => "Futsal" , "gambar" => "img/futsal.png"],
                                ["nama" => "Basket" , "gambar" => "img/basket.png"],
                                ["nama" => "Voli" , "gambar" => "img/voli.jpeg"],
                                ["nama" => "Sepak bola" , "gambar" => "img/sepakbola.jpeg"],
                               
                            ];

                            foreach ($eskul as $item) { ?>
                            <div class="col-lg-4">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="<?= $item['gambar']; ?>" alt="" width="150" height="150">
                                <div class="card-body  border-0">
                                       <h4><?= $item['nama']; ?></h4>
                                </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- TUTUP SECTION ESKUL -->

 </body>
 </html>