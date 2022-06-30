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
    <title>Tentang - Indigo</title>
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
              <a class="nav-link text-white mx-lg-4 my-2 my-lg-0 font-bebas fs-5" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info mx-lg-4 my-2 my-lg-0 font-bebas fs-5" href="tentang.php">TENTANG</a>
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
    <div class="banner-img w-100 d-flex justify-content-center align-items-center" style="height: 75vh">
      <div class="content text-md-center text-start mx-4 mx-md-0" data-aos="zoom-in" data-aos-duration="1300">
        <h1 class="fs-60 text-info font-payback">TENTANG</h1>
      </div>
    </div>
    <!-- Banner image -->
    <!-- sejarah start -->
    <section id="sejarah" class="py-5 bg-aneh">
      <div class="container py-5">
        <div class="row text-center" data-aos="zoom-in" data-aos-duration="1300">
          <div class="col mb-3">
            <h1 class="font-payback text-info">Sejarah Singkat</h1>
          </div>
        </div>
        <div class="row">
          <div class="col text-center" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <p>
              Fitnes ini berada di Kota Tasikmalaya, berdiri pada tahun 2018 oleh seorang binaragawan yaitu Bapak Dian Kuswardianto karena kecintaanya dengan oleahraga kebugaran yangt berkeinginan mengajak masyarakat Tasikmalaya lebih
              antusias untuk berolahraga dengan salah satunya yaitu fitnes.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- sejarah end -->
    <!-- fasilitas start -->
    <section id="fasilitas" class="py-5 bg-aneh">
      <div class="container py-5">
        <div class="row text-center" data-aos="zoom-in" data-aos-duration="1300">
          <div class="col mb-3">
            <h1 class="font-payback text-info">FASIILITAS UTAMA</h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <div class="card p-0 m-0 scale-obj shadow-sm">
              <img src="img/indigo3.jpg" alt="" class="img-fluid" />
              <div class="w-100 bg-awal text-white text-center">Area Fitnes</div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <div class="card p-0 m-0 scale-obj shadow-sm">
              <img src="img/indigo11.jpg" alt="" class="img-fluid" />
              <div class="w-100 bg-awal text-white text-center">Area Aerobik</div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <div class="card p-0 m-0 scale-obj shadow-sm">
              <img src="img/indigo9.jpg" alt="" class="img-fluid" />
              <div class="w-100 bg-awal text-white text-center">Area Billiard</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- fasilitas end -->
    <!-- more start -->
    <section id="more" class="bg-aneh py-5">
      <div class="container py-5">
        <div class="row text-center">
          <div class="col mb-3">
            <h1 class="font-payback text-info" data-aos="zoom-in" data-aos-duration="1300">FASILITAS LAIN</h1>
          </div>
        </div>
        <div class="row text-center justify-content-center">
          <div class="col-lg-3 col-md-4 col-6 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <div class="card p-2 shadow-sm h-100 scale-obj">
              <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" baseProfile="tiny" version="1.2" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="100" height="100">
                  <path
                    xmlns="http://www.w3.org/2000/svg"
                    d="M12 14c1.381 0 2.631-.56 3.536-1.465C16.44 11.631 17 10.381 17 9s-.56-2.631-1.464-3.535C14.631 4.56 13.381 4 12 4s-2.631.56-3.536 1.465C7.56 6.369 7 7.619 7 9s.56 2.631 1.464 3.535A4.985 4.985 0 0 0 12 14zm8 1a2.495 2.495 0 0 0 2.5-2.5c0-.69-.279-1.315-.732-1.768A2.492 2.492 0 0 0 20 10a2.495 2.495 0 0 0-2.5 2.5A2.496 2.496 0 0 0 20 15zm0 .59c-1.331 0-2.332.406-2.917.968C15.968 15.641 14.205 15 12 15c-2.266 0-3.995.648-5.092 1.564C6.312 15.999 5.3 15.59 4 15.59c-2.188 0-3.5 1.09-3.5 2.182 0 .545 1.312 1.092 3.5 1.092.604 0 1.146-.051 1.623-.133l-.04.27c0 1 2.406 2 6.417 2 3.762 0 6.417-1 6.417-2l-.02-.255c.463.073.995.118 1.603.118 2.051 0 3.5-.547 3.5-1.092 0-1.092-1.373-2.182-3.5-2.182zM4 15c.69 0 1.315-.279 1.768-.732A2.492 2.492 0 0 0 6.5 12.5 2.495 2.495 0 0 0 4 10a2.496 2.496 0 0 0-2.5 2.5A2.495 2.495 0 0 0 4 15z"
                  ></path>
                </svg>
                <h6 class="text-info mt-3">Group Aktif</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <div class="card p-2 shadow-sm h-100 scale-obj">
              <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="100" height="100">
                  <path xmlns="http://www.w3.org/2000/svg" d="M4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm7 9.792V16h2v-3.208a2.5 2.5 0 1 0-2 0z"></path>
                </svg>
                <h6 class="text-info mt-3">Tempat Loker</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <div class="card p-2 shadow-sm h-100 scale-obj">
              <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="100" height="100">
                  <path xmlns="http://www.w3.org/2000/svg" fill="#fff" d="M0 0h512v512H0z"></path>
                  <path
                    xmlns="http://www.w3.org/2000/svg"
                    d="M112 73c-13.75 0-24.214 4.87-33.047 13.271-8.832 8.402-15.755 20.6-20.414 34.575-5.887 17.661-7.953 38.064-6.887 56.111a57.246 57.246 0 0 1 2.461-.187c8.38-.405 16.317 1.094 23.494 4.234 14.355 6.28 25.436 18.27 34.057 32.28 15.104 24.543 23.187 55.746 24.96 80.585 114.097-14.223 124.655-14.223 238.753 0 1.772-24.84 9.855-56.042 24.959-80.586 8.62-14.009 19.702-25.999 34.057-32.28 7.875-3.444 16.67-4.898 25.955-4.046 1.066-18.047-1-38.45-6.887-56.111-4.659-13.976-11.582-26.173-20.414-34.575C424.214 77.87 413.75 73 400 73zM56.969 194.502c-.686-.008-1.38.006-2.082.04-5.621.284-11.8 1.978-18.862 5.509-23.413 11.707-26.349 65.687 14.82 79.41l4.505 1.502L86.79 391h338.42l31.44-110.037 4.504-1.502c41.17-13.723 38.234-67.703 14.82-79.41-14.121-7.061-24.722-6.775-34.367-2.555-9.645 4.22-18.564 13.23-25.943 25.22C400.906 246.7 393 282 393 304v10.195l-10.117-1.265c-128-16-125.766-16-253.766 0L119 314.195V304c0-22-7.906-57.3-22.664-81.283-7.38-11.991-16.298-21.001-25.943-25.22-4.22-1.847-8.624-2.94-13.424-2.995zM83.727 409l-23.272 23.271c11.994 3.239 33.75 3.763 42.545-1.666 3.272-4.695 6.903-14.536 10.438-21.605zm314.836 0c1.494 6.017 6.952 19.12 10.437 21.605 13.2 5.463 29.904 5.774 42.545 1.666L428.273 409z"
                  ></path>
                </svg>
                <h6 class="text-info mt-3">Ruang Tunggu</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <div class="card p-2 shadow-sm h-100 scale-obj">
              <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="100" height="100">
                  <path xmlns="http://www.w3.org/2000/svg" d="M21 5h-2.64l1.14-3.14L17.15 1l-1.46 4H3v2l2 6-2 6v2h18v-2l-2-6 2-6V5zm-5 9h-3v3h-2v-3H8v-2h3V9h2v3h3v2z"></path>
                </svg>
                <h6 class="text-info mt-3">Suplemen Kesehatan</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <div class="card p-2 shadow-sm h-100 scale-obj">
              <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="100" height="100">
                  <path
                    xmlns="http://www.w3.org/2000/svg"
                    d="M368 128h.09m111.46-32h-91.06l8.92-35.66 38.32-13.05c8.15-2.77 13-11.43 10.65-19.71a16 16 0 0 0-20.54-10.73l-47 16a16 16 0 0 0-10.36 11.27L355.51 96H224.45c-8.61 0-16 6.62-16.43 15.23A16 16 0 0 0 224 128h2.75l1 8.66A8.3 8.3 0 0 0 236 144c39 0 73.66 10.9 100.12 31.52A121.9 121.9 0 0 1 371 218.07a123.4 123.4 0 0 1 10.12 29.51 7.83 7.83 0 0 0 3.29 4.88 72 72 0 0 1 26.38 86.43 7.92 7.92 0 0 0-.15 5.53A96 96 0 0 1 416 376c0 22.34-7.6 43.63-21.4 59.95a80.12 80.12 0 0 1-28.78 21.67 8 8 0 0 0-4.21 4.37 108.19 108.19 0 0 1-17.37 29.86 2.5 2.5 0 0 0 1.9 4.11h49.21a48.22 48.22 0 0 0 47.85-44.14L477.4 128h2.6a16 16 0 0 0 16-16.77c-.42-8.61-7.84-15.23-16.45-15.23z"
                  ></path>
                  <path
                    xmlns="http://www.w3.org/2000/svg"
                    d="M108.69 320a23.87 23.87 0 0 1 17 7l15.51 15.51a4 4 0 0 0 5.66 0L162.34 327a23.87 23.87 0 0 1 17-7h196.58a8 8 0 0 0 8.08-7.92V312a40.07 40.07 0 0 0-32-39.2c-.82-29.69-13-54.54-35.51-72C295.67 184.56 267.85 176 236 176h-72c-68.22 0-114.43 38.77-116 96.8A40.07 40.07 0 0 0 16 312a8 8 0 0 0 8 8zm77.25 32a8 8 0 0 0-5.66 2.34l-22.14 22.15a20 20 0 0 1-28.28 0l-22.14-22.15a8 8 0 0 0-5.66-2.34h-69.4a15.93 15.93 0 0 0-15.76 13.17A65.22 65.22 0 0 0 16 376c0 30.59 21.13 55.51 47.26 56 2.43 15.12 8.31 28.78 17.16 39.47C93.51 487.28 112.54 496 134 496h132c21.46 0 40.49-8.72 53.58-24.55 8.85-10.69 14.73-24.35 17.16-39.47 26.13-.47 47.26-25.39 47.26-56a65.22 65.22 0 0 0-.9-10.83A15.93 15.93 0 0 0 367.34 352z"
                  ></path>
                </svg>
                <h6 class="text-info mt-3">Kantin</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <div class="card p-2 shadow-sm h-100 scale-obj">
              <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="100" height="100">
                  <path
                    xmlns="http://www.w3.org/2000/svg"
                    d="M12.707 17.793C13.534 18.62 14.295 19 15 19c.378 0 .68-.067 1.237-.276l.392-.152C17.679 18.15 18.209 18 19 18c1.214 0 2.379.545 3.486 1.58l.221.213-1.414 1.414C20.466 20.38 19.705 20 19 20c-.378 0-.68.067-1.237.276l-.392.152c-1.05.421-1.58.572-2.371.572-1.214 0-2.379-.545-3.486-1.58l-.221-.213 1.414-1.414zM9 3a3 3 0 0 0 6 0h6a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-9a2 2 0 0 0-1.995 1.85L10 14v7H6a1 1 0 0 1-1-1l-.001-8.001L3 12a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h6zm3.707 10.793C13.534 14.62 14.295 15 15 15c.378 0 .68-.067 1.237-.276l.392-.152C17.679 14.15 18.209 14 19 14c1.214 0 2.379.545 3.486 1.58l.221.213-1.414 1.414C20.466 16.38 19.705 16 19 16c-.378 0-.68.067-1.237.276l-.392.152c-1.05.421-1.58.572-2.371.572-1.214 0-2.379-.545-3.486-1.58l-.221-.213 1.414-1.414z"
                  ></path>
                </svg>
                <h6 class="text-info mt-3">Ruang Ganti</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <div class="card p-2 shadow-sm h-100 scale-obj">
              <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" baseProfile="tiny" overflow="inherit" version="1.2" viewBox="0 0 50 50" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="100" height="100">
                  <path
                    xmlns="http://www.w3.org/2000/svg"
                    d="M48.022 26.652c-1.396 6.519-6.192 11.874-12.516 13.976a18.88 18.88 0 0 1-5.975.973 18.873 18.873 0 0 1-17.93-12.914 18.716 18.716 0 0 1 1.03-14.404 18.773 18.773 0 0 1 10.93-9.46 18.923 18.923 0 0 1 13.71.689l.935-1.763C31.943-.12 24.142-1.046 17.128 1.287 10.785 3.396 5.644 7.846 2.652 13.815c-2.992 5.97-3.476 12.746-1.364 19.08A24.997 24.997 0 0 0 25.035 50c2.682 0 5.343-.433 7.911-1.286A24.961 24.961 0 0 0 49.998 26.94l-1.976-.288zM35.697 14.603l-5.014-9.384-2.55 10.477-10.429 2.05 9.547 5.421-1.642 10.796 8.107-7.374 10.046 4.82-5.131-10.027 8.124-7.842z"
                  ></path>
                </svg>
                <h6 class="text-info mt-3">Mushola</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mb-3" data-aos="zoom-in" data-aos-duration="1300" data-aos-delay="500">
            <div class="card p-2 shadow-sm h-100 scale-obj">
              <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="100" height="100">
                  <path xmlns="http://www.w3.org/2000/svg" d="M11 14h1.5a3.5 3.5 0 0 0 0-7H9v10h2v-3zM4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm7 6h1.5a1.5 1.5 0 0 1 0 3H11V9z"></path>
                </svg>
                <h6 class="text-info mt-3">Area Parkir</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- more end -->
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

      AOS.init({
        once: true,
      });
    </script>
  </body>
</html>
