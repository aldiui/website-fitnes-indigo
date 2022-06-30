<?php
session_start();
if($_SESSION['level']=="admin"){
  header("Location:dashboard.php");
  exit;
}
elseif($_SESSION['level']==""){
  header("Location:login.php");
  exit;
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Indigo</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a href="#" class="navbar-brand fs-5 fw-bold">
          <img src="img/indigo1.png" class="me-2" width="70px" alt="" />
          <span class="text-info">Indigo Sp</span>ort Center
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="toggler-icon top-bar"></span>
          <span class="toggler-icon mid-bar"></span>
          <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-info mx-lg-4 my-2 my-lg-0 font-bebas fs-5" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white mx-lg-4 my-2 my-lg-0 font-bebas fs-5" href="tentang.php">TENTANG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white mx-lg-4 my-2 my-lg-0 font-bebas fs-5" href="kelas.php">KELAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white mx-lg-4 my-2 my-lg-0 font-bebas fs-5" href="blog.php">BLOG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white mx-lg-4 my-2 my-lg-0 font-bebas fs-5" href="contact.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle text-white" viewBox="0 0 16 16" data-bs-toggle="tooltip" title="Akun">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white text-white ms-lg-4 my-2 my-lg-0 font-bebas fs-5" href="logout.php" data-bs-toggle="tooltip" title="Logout">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right text-white" viewBox="0 0 16 16" >
                  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar -->
    <!-- Banner image -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="content text-md-center text-start mx-4 mx-md-0" data-aos="zoom-in" data-aos-duration="1300">
        <h1 class="text-info font-payback fs-1">Dedikasi dan Komitmen</h1>
        <h1 class="text-white font-payback fs-1">Untuk Kesehatan dan Kebugaran Anda</h1>
        <p class="text-white fs-5">#fitnesituasik</p>
        <div>
          <a href="kelas.php" class="btn btn-info text-white font-payback">Yuk Gabung Sekarang!</a>
        </div>
      </div>
    </div>
    <!-- Banner image -->
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header bg-info">
        <h5 class="offcanvas-title text-white font-bebas" id="offcanvasExampleLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body small bg-awal text-white">
        <div>
          Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
        </div>
      </div>
    </div>
    <!-- hastag -->
    <section class="py-5 bg-awal">
      <div class="container py-5">
        <div class="row">
          <div class="col">
            <p class="text-info text-center fw-bold fs-45" data-aos="zoom-in" data-aos-duration="1300">#fitnesituasik</p>
          </div>
        </div>
      </div>
    </section>
    <!-- hastag -->
    <!-- carousel image start -->
    <section id="carousel" class="bg-awal">
      <div class="container-fluid p-0 m-0">
        <div class="owl-carousel owl-theme">
          <div><img src="img/indigo3.jpg" alt="" class="img-fluid scale-obj" /></div>
          <div><img src="img/indigo4.jpg" alt="" class="img-fluid scale-obj" /></div>
          <div><img src="img/indigo5.jpg" alt="" class="img-fluid scale-obj" /></div>
          <div><img src="img/indigo6.jpg" alt="" class="img-fluid scale-obj" /></div>
          <div><img src="img/indigo7.jpg" alt="" class="img-fluid scale-obj" /></div>
          <div><img src="img/indigo8.jpg" alt="" class="img-fluid scale-obj" /></div>
          <div><img src="img/indigo9.jpg" alt="" class="img-fluid scale-obj" /></div>
          <div><img src="img/indigo10.jpg" alt="" class="img-fluid scale-obj" /></div>
          <div><img src="img/indigo11.jpg" alt="" class="img-fluid scale-obj" /></div>
          <div><img src="img/indigo12.jpg" alt="" class="img-fluid scale-obj" /></div>
        </div>
      </div>
    </section>
    <!-- carousel image end -->
    <!-- kalkulator start -->
    <section id="kalkulator" class="py-5 bg-awal">
      <div class="container py-5">
        <div class="row text-center" data-aos="zoom-in" data-aos-duration="1300">
          <div class="col mb-3">
            <h1 class="font-payback text-info">CEK BERAT BADAN IDEAL ANDA</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 text-white mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <p>
              Indeks massa tubuh adalah ukuran yang digunakan untuk mengetahui status gizi seseorang yang didapatkan dari perbandingan berat dan tinggi badan. Maka itu, setiap orang harus menghitung berapa nilai IMT-nya agar tahu status
              gizi tubuhnya normal atau tidak. Setiap orang harus tahu indeks massa tubuhnya masing-masing. Indeks massa tubuh adalah alat pendeteksi yang biasanya dilakukan di awal untuk mengetahui apakah seseorang berisiko terserang
              penyakit kronis atau tidak. Lalu, bagaimana cara menghitungnya?
            </p>
            <div>
              <button type="button" class="btn btn-info text-light font-payback" data-bs-toggle="modal" data-bs-target="#bmi">Hitung berat ideal anda</button>
            </div>
          </div>
          <div class="col-lg-5" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500"><img src="img/imt.jpg" alt="" class="img-fluid" /></div>
        </div>
      </div>
    </section>
    <!-- kalkulator end -->
    <!-- modal start  -->
    <form action="" method="post">
      <div class="modal fade" id="bmi" aria-hidden="true" aria-labelledby="bmiLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-bebas h2" id="bmiLabel">Kalkulator Indek Massa Tubuh</h5>
              <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="text-start justify-content-center">
                <div class="mb-3 row mx-auto">
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" id="nama" class="form-control border border-info border-3" name="nama" autocomplete="off" placeholder="nama" />
                      <label for="nama">Nama</label>
                    </div>
                  </div>
                </div>
                <div class="mb-3 row mx-auto">
                  <div class="col-6">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-floating">
                          <input type="number" class="form-control border border-info border-3" name="umur" id="umur" autocomplete="off" placeholder="Umur 13 - 99 Tahun" />
                          <label for="umur" class="h-100">Umur</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="row justify-content-between">
                      <div class="col-6">
                        <input type="radio" class="btn-check" name="jk" id="Laki - laki" value="Laki - laki" autocomplete="off" />
                        <label class="btn btn-outline-info border border-info border-3 " for="Laki - laki">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 1024 1024" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="100%" height="100%">
                            <path
                              xmlns="http://www.w3.org/2000/svg"
                              d="M874 120H622c-3.3 0-6 2.7-6 6v56c0 3.3 2.7 6 6 6h160.4L583.1 387.3c-50-38.5-111-59.3-175.1-59.3-76.9 0-149.3 30-203.6 84.4S120 539.1 120 616s30 149.3 84.4 203.6C258.7 874 331.1 904 408 904s149.3-30 203.6-84.4C666 765.3 696 692.9 696 616c0-64.1-20.8-124.9-59.2-174.9L836 241.9V402c0 3.3 2.7 6 6 6h56c3.3 0 6-2.7 6-6V150c0-16.5-13.5-30-30-30zM408 828c-116.9 0-212-95.1-212-212s95.1-212 212-212 212 95.1 212 212-95.1 212-212 212z"
                            ></path>
                          </svg>
                        </label>
                      </div>
                      <div class="col-6">
                        <input type="radio" class="btn-check" name="jk" id="Perempuan" value="Perempuan" autocomplete="off" />
                        <label class="btn btn-outline-info border border-info border-3" for="Perempuan">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="100%" height="100%">
                            <path
                              xmlns="http://www.w3.org/2000/svg"
                              d="M712.8 548.8c53.6-53.6 83.2-125 83.2-200.8 0-75.9-29.5-147.2-83.2-200.8C659.2 93.6 587.8 64 512 64s-147.2 29.5-200.8 83.2C257.6 200.9 228 272.1 228 348c0 63.8 20.9 124.4 59.4 173.9 7.3 9.4 15.2 18.3 23.7 26.9 8.5 8.5 17.5 16.4 26.8 23.7 39.6 30.8 86.3 50.4 136.1 57V736H360c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h114v140c0 4.4 3.6 8 8 8h60c4.4 0 8-3.6 8-8V812h114c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8H550V629.5c61.5-8.2 118.2-36.1 162.8-80.7zM512 556c-55.6 0-107.7-21.6-147.1-60.9C325.6 455.8 304 403.6 304 348s21.6-107.7 60.9-147.1C404.2 161.5 456.4 140 512 140s107.7 21.6 147.1 60.9C698.4 240.2 720 292.4 720 348s-21.6 107.7-60.9 147.1C619.7 534.4 567.6 556 512 556z"
                            ></path></svg
                        ></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-3 row mx-auto">
                  <div class="col-6">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-floating">
                          <input type="number" class="form-control border border-info border-3" name="tinggi" id="tinggi" autocomplete="off" placeholder="Tinggi 50 - 250 cm" />
                          <label for="tinggi">Tinggi Badan</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-floating">
                          <input type="number" class="form-control border border-info border-3" name="berat" id="berat" autocomplete="off" placeholder="Berat 20 - 200 kg" />
                          <label for="berat">Berat Badan</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-center">
              <button id="kalku" type="button" class="btn btn-success font-payback" data-bs-target="#bmi2" data-bs-toggle="modal" onclick="return confirm('Anda yakin akan melanjutkanya ?');">Hitung</button>
              <button type="reset" class="btn btn-danger font-payback" data-bs-dismiss="modal">Kembali</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="bmi2" aria-hidden="true" aria-labelledby="bmiLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-bebas h2" id="bmiLabel2">Hasil Indeks Massa Tubuh</h5>
              <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-start" id="hasilku"></div>
            <div class="modal-footer justify-content-center">
              <button type="reset" class="btn btn-success font-payback" data-bs-target="#bmi" data-bs-toggle="modal">Hitung Ulang</button>
              <button type="reset" class="btn btn-danger font-payback" data-bs-dismiss="modal">Kembali</button>
            </div>
          </div>
        </div>
      </div>
    </form>

    <!-- modal end  -->
    <!-- need start -->
    <section id="need" class="bg-aneh py-5">
      <div class="container py-5">
        <div class="row text-center">
          <div class="col mb-3">
            <h1 class="font-payback text-info" data-aos="zoom-in" data-aos-duration="1300">SEMUA YANG ANDA BUTUHKAN</h1>
          </div>
        </div>
        <div class="row text-center justify-content-center">
          <div class="col-lg-4 col-md-6 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <div class="card p-2 shadow-sm h-100 scale-obj">
              <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" baseProfile="tiny" version="1.2" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="100" height="100">
                  <path
                    xmlns="http://www.w3.org/2000/svg"
                    d="M12 14c1.381 0 2.631-.56 3.536-1.465C16.44 11.631 17 10.381 17 9s-.56-2.631-1.464-3.535C14.631 4.56 13.381 4 12 4s-2.631.56-3.536 1.465C7.56 6.369 7 7.619 7 9s.56 2.631 1.464 3.535A4.985 4.985 0 0 0 12 14zm8 1a2.495 2.495 0 0 0 2.5-2.5c0-.69-.279-1.315-.732-1.768A2.492 2.492 0 0 0 20 10a2.495 2.495 0 0 0-2.5 2.5A2.496 2.496 0 0 0 20 15zm0 .59c-1.331 0-2.332.406-2.917.968C15.968 15.641 14.205 15 12 15c-2.266 0-3.995.648-5.092 1.564C6.312 15.999 5.3 15.59 4 15.59c-2.188 0-3.5 1.09-3.5 2.182 0 .545 1.312 1.092 3.5 1.092.604 0 1.146-.051 1.623-.133l-.04.27c0 1 2.406 2 6.417 2 3.762 0 6.417-1 6.417-2l-.02-.255c.463.073.995.118 1.603.118 2.051 0 3.5-.547 3.5-1.092 0-1.092-1.373-2.182-3.5-2.182zM4 15c.69 0 1.315-.279 1.768-.732A2.492 2.492 0 0 0 6.5 12.5 2.495 2.495 0 0 0 4 10a2.496 2.496 0 0 0-2.5 2.5A2.495 2.495 0 0 0 4 15z"
                  ></path>
                </svg>
                <h6 class="text-info mt-3">KOMUNITAS MENGASIKAN</h6>
                <p>Bergabunglah dengan kami dan rasakan keasikan dalam berolahraga!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <div class="card p-2 shadow-sm h-100 scale-obj">
              <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" id="icon" viewBox="0 0 32 32" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="100" height="100">
                  <defs xmlns="http://www.w3.org/2000/svg">
                    <style>
                      .cls-1 {
                        fill: none;
                      }
                    </style>
                  </defs>
                  <path xmlns="http://www.w3.org/2000/svg" d="M28 13V4h-9v2h5.586L16 14.586 7.414 6H13V4H4v9h2V7.414l9 9V26H4v2h24v-2H17v-9.586l9-9V13h2z"></path>
                  <path xmlns="http://www.w3.org/2000/svg" id="_Transparent_Rectangle_" d="M0 0h32v32H0z" class="cls-1" data-name="<Transparent Rectangle>"></path>
                </svg>
                <h6 class="text-info mt-3">BERAGAM PILIHAN</h6>
                <p>Berbagai macam pilihan yang dapat Anda pilih dari kelas kami, Anda tidak akan pernah bosan lagi.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <div class="card p-2 shadow-sm h-100 scale-obj">
              <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="100" height="100">
                  <path xmlns="http://www.w3.org/2000/svg" d="M496 176h-58v-64h-76v122H150V112H74v64H16v160h58v64h76V278h212v122h76v-64h58V176z"></path>
                </svg>
                <h6 class="text-info mt-3">PERALATAN STANDAR NASIONAL</h6>
                <p>Peralatan terbaik dan lengkap tersedia di fitnes ini.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- need end -->
    <!-- gabung start -->
    <section id="need" class="bg-aneh py-5">
      <div class="container py-5">
        <div class="row text-center" data-aos="zoom-in" data-aos-duration="1300">
          <div class="col mb-3">
            <h1 class="font-payback text-info">GABUNGLAH BERSAMA KAMI</h1>
            <p>dengan kelas kami, Anda tidak akan pernah bosan lagi</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-5 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500"><img src="img/indigo3.jpg" alt="" class="img-fluid" /></div>
          <div class="col-lg-7 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <h1 class="fst-normal text-info">#fitnesituasik</h1>
            <p>
              Mari Sehat bugar bersama kami mengajak anda untuk antusias berolahraga. Jika Anda menyukai keasikan dan kegembiraan, Bergabunglah dengan kami dan bersenang-senanglah saat Anda berolahraga. kami memiliki kelas yang cocok untuk
              Anda.
            </p>
            <div>
              <a href="kelas.php" class="btn btn-info text-white font-payback">JOIN KELAS</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- gabung end -->
    <!-- footer start -->
    <footer class="bg-awal">
      <div class="container py-5 text-white">
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <h5 class="mb-3 text-info">Hubungi Kami</h5>
            <div class="mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-geo-alt-fill text-light me-2" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
              </svg>
              Jl. Cigeureng, Nagarasari
            </div>
            <div class="ms-4 ps-1 mb-2">Cipedes, Tasikmalaya</div>
            <div class="mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-telephone-fill text-light me-2" viewBox="0 0 16 16">
                <path
                  fill-rule="evenodd"
                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"
                />
              </svg>
              0822-1572-3321
            </div>
            <div class="mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-envelope-fill text-light me-2" viewBox="0 0 16 16">
                <path
                  d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.124l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"
                />
              </svg>
              indigosportcentre01@gmail.com
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <h5 class="mb-3 text-info">Ikuti Kami</h5>
            <div class="mb-2">
              <a href="https://instagram.com/indigosportcentre_" target="_blank" class="text-decoration-none text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-instagram text-white me-2" viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                  /></svg
                >indigosportcentre_
              </a>
            </div>
            <div class="mb-2">
              <a href="https://wa.me/+6282215723321?text=Hallo%20Ka%20Saya%20Ingin%20Daftar%20Fitness" target="_blank" class="text-decoration-none text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-whatsapp text-white me-2" viewBox="0 0 16 16">
                  <path
                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"
                  /></svg
                >0822-1572-3321
              </a>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="mb-2">
              <div class="ratio ratio-16x9">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.4049364311268!2d108.21425891379748!3d-7.308322673879175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f50b7aec86d8b%3A0xd817e597fe14d692!2sIndigo%20Sport%20Center!5e0!3m2!1sen!2sid!4v1653652809811!5m2!1sen!2sid"
                  width="300"
                  height="225"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->

    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script type="text/javascript">
      const nav = document.querySelector("nav");
      window.addEventListener("scroll", function () {
        if (window.pageYOffset > 100) {
          nav.classList.add("bg-awal", "shadow");
        } else {
          nav.classList.remove("bg-awal", "shadow");
        }
      });

      $(document).ready(function () {
        $("#kalku").click(function () {
          var text = $("input[name='nama']").val();
          var number = $("input[name='umur']").val();
          var tinggi = $("input[name='tinggi']").val();
          var berat = $("input[name='berat']").val();
          var jenis = $("input[name='jk']:checked").val();
          console.log(text);
          $.post("dataimt.php", { nama: text, umur: number, tinggi: tinggi, berat: berat, jk: jenis }).done(function (data) {
            $("#hasilku").html(data);
          });
        });
      });

      AOS.init({
        once: true,
      });

      $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
          loop: true,
          nav: true,
          autoplay: true,
          autoplayhoverpause: true,
          autoplaytimeout: 500,
          responsive: {
            0: {
              items: 1,
              dots: false,
            },
            600: {
              items: 2,
              dots: false,
            },
            1000: {
              items: 3,
              dots: false,
            },
          },
        });
      });
    </script>
  </body>
</html>
