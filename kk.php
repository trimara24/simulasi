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

  <?php include 'navbar.php'; ?>

  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000, // durasi animasi dalam milidetik
      once: true // animasi hanya terjadi sekali
    });
  </script>

  <!-- SECTION JURUSAN -->
  <section>
    <div class="container pt-5 mt-3">
      <div class="row">
        <div class="col-lg-12">
          <div class="card border-0">
            <h3 class="mb-0">Konsentrasi</h3>
            <h3 class="text-primary ">Keahlian</h3>

            <div class="row">
              <div clas="row justify-content-center text-center">
                <div class="col" data-aos="fade-up">
                  <div class="card shadow rounded m-3 p-4 d-flex align-items-center h-95">
                    <img src="img/jurusan1.png" alt="" width="150" height="150">
                    <div class="card-body  border-0 text-center">
                      <h4 class="text-center"></h4>
                      <p><b>Teknik Jaringan Komputer (TKJ) </b></p>
                      <p>Konsentrasi ini fokus pada perancangan, pengelolaan, dan pemeliharaan jaringan komputer serta teknologi telekomunikasi.
                        Siswa dilatih untuk menguasai teknik instalasi jaringan, administrasi server, dan troubleshooting perangkat jaringan.</p>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div clas="row justify-content-center text-center">
                    <div class="col" data-aos="fade-up">
                      <div class="card shadow rounded m-3 p-4 d-flex align-items-center h-95">
                        <img src="img/jurusan2.png" alt="" width="150" height="150">
                        <div class="card-body  border-0 text-center">
                          <h4 class="text-center"></h4>
                          <p><b>Pengembangan Perangkat Lunak dan Gim (PPLG) </b></p>
                          <P>Bidang ini mempersiapkan siswa untuk merancang, mengembangkan, dan mengelola perangkat lunak dan gim.
                            Siswa akan belajar bahasa pemrograman, pengembangan aplikasi, desain gim, serta pengelolaan proyek teknologi.</P>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div clas="row justify-content-center text-center">
                        <div class="col" data-aos="fade-up">
                          <div class="card shadow rounded m-3 p-4 d-flex align-items-center h-95">
                            <img src="img/jurusan3.png" alt="" width="150" height="150">
                            <div class="card-body  border-0 text-center">
                              <h4 class="text-center"></h4>
                              <p><b>Teknik Sepeda Motor (TSM) </b></p>
                              <P>Konsentrasi ini mengajarkan keterampilan teknis dalam perbaikan, perawatan, dan modifikasi sepeda motor,
                                serta pengetahuan bisnis dan kewirausahaan di bidang otomotif roda dua.</P>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div clas="row justify-content-center text-center">
                            <div class="col" data-aos="fade-up">
                              <div class="card shadow rounded m-3 p-4 d-flex align-items-center h-95">
                                <img src="img/jurusan4.png" alt="" width="150" height="150">
                                <div class="card-body  border-0 text-center">
                                  <h4 class="text-center"></h4>
                                  <p><b>Desain Komunikasi Visual (DKV) </b></p>
                                  <P>Bidang ini berfokus pada pengembangan kemampuan kreatif dalam desain grafis, ilustrasi, animasi, dan media komunikasi visual untuk berbagai kebutuhan industri kreatif.</P>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div clas="row justify-content-center text-center">
                                <div class="col" data-aos="fade-up">
                                  <div class="card shadow rounded m-3 p-4 d-flex align-items-center h-95">
                                    <img src="img/jurusan5.png" alt="" width="150" height="150">
                                    <div class="card-body  border-0 text-center">
                                      <h4 class="text-center"></h4>
                                      <p><b>Teknik Otomasi Industri (TOI)</b></p>
                                      <P>Konsentrasi ini mendalami teknologi otomasi di industri, meliputi pemrograman PLC, robotika, dan sistem kontrol otomatis untuk meningkatkan efisiensi dan produktivitas di sektor manufaktur.</P>
                                    </div>
                                  </div>
                                </div>
  </section>
  <!-- TUTUP -->

</body>
</html>