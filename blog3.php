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
    <title>5 Tips Nge-gym untuk Pemula, Apa Saja? - Indigo</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 bg-awal shadow">
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
              <a class="nav-link text-white mx-lg-4 my-2 my-lg-0 font-bebas fs-5" href="tentang.php">TENTANG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white mx-lg-4 my-2 my-lg-0 font-bebas fs-5" href="kelas.php">KELAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info mx-lg-4 my-2 my-lg-0 font-bebas fs-5" href="blog.php">BLOG</a>
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
    <!--  judul start -->
    <div class="pt-5 mt-5 bg-awal w-100 d-flex justify-content-center align-items-center" style="height: 30vh">
      <div class="content text-md-center text-start mx-4 mx-md-0" data-aos="zoom-in" data-aos-duration="1300">
        <h1 class="fs-60 text-info font-payback">BLOG</h1>
      </div>
    </div>
    <!--  judul end -->
    <!-- Blog3 -->
    <section id="blog3" class="py-5 bg-aneh">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10">
            <p><a href="blog.php" class="text-decoration-none text-secondary">Blog</a> > <a href="blog3.php" class="text-decoration-none text-secondary">5 Tips Nge-gym untuk Pemula, Apa Saja?</a></p>
            <h2 class="mb-3">5 Tips Nge-gym untuk Pemula, Apa Saja?</h2>
            <p class="mb-3 text-secondary">
              03 Mei 2021, <span class="text-info">Satria Perdana</span>, dikutip dari
              <a href="https://hellosehat.com/kebugaran/kekuatan/5-tips-nge-gym-untuk-pemula/" class="fst-italic text-decoration-none text-secondary">hellosehat.com</a>
            </p>
            <img src="img/blog3.jpg" alt="" class="img-fluid mb-3" />
            <div class="" style="text-align: justify">
              <p>Jika Anda ingin mulai berolahraga dan memilih gym sebagai pilihan aktivitas, ada beberapa tips nge-gym untuk pemula yang mesti diperhatikan.</p>
              <p>
                Nge-gym merupakan salah satu pilihan aktivitas yang bisa menjaga kesehatan dan kebugaran Anda. Michael R. Bracko, EdD, FACSM, ketua American College of Sports Medicines Consumer Information Committee, seperti dikutip WebMD,
                mengatakan bahwa olahraga bagaikana pil ajaib bagi Anda.
              </p>

              <p>
                “Olahraga bisa benar-benar menyembuhkan penyakit seperti beberapa jenis penyakit jantung. Olahraga telah berdampak dalam membantu orang-orang mencegah atau pulih dari beberapa jenis kanker. Olahraga membantu orang yang
                menderita arthritis. Olahraga membantu orang-orang mencegah dan mengatasi depresi,” tutur Michael.
              </p>
              <p>
                Tidak dipungkiri lagi bahwa banyak orang yang rutin nge-gym mengalami penurunan berat badan. Tentu saja ini hanya terjadi jika aktivitas nge-gym dilakukan dengan benar dan teratur. Namun bagi Anda yang masih pemula, tak
                perlu langsung menjalani jadwal gym yang berat.
              </p>
              <p></p>
              “Sedikit apapun manfaat yang didapat dari aktivitas fisik akan mendorong turunnya berat badan dan Anda akan merasa lebih baik,” ujar Rita Redberg, MSc, ketua American Heart Associations Scientific Advisory Board untuk program
              Choose to Move.

              <h3 class="mt-4 mb-3">Apa saja tips nge-gym untuk pemula?</h3>
              <p>
                Dalam olahraga apapun, perlu diingat bahwa penting bagi Anda untuk mengenal risiko-risiko cedera. Jangan lupa juga untuk tidak berlatih berlebihan. Seperti dilansir Everyday Health, ada 5 tips nge-gym untuk pemula yang bisa
                Anda lakukan agar tidak cedera dan bisa mendapatkan manfaat yang optimal.
              </p>

              <h3 class="mt-4 mb-3">1. Mulai secara perlahan-lahan</h3>
              <p>
                “Ketika Anda baru mulai nge-gym, jangan langsung melakukannya 5 hari seminggu, itu bisa jadi bencana untuk Anda,” kata John Higgins, MD, direktur Exercise Physiology di University of Texas Health Science Center di Houston.
              </p>
              <p>
                “Mulailah perlahan-lahan. Akan lebih baik bila Anda melakukan olahraga secara bertahap beberapa hari sekali. Rekomendasi yang dikeluarkan para ahli saat ini adalah rutin berolahraga 2-3 hari per minggu, setidaknya 30 menit
                per hari. Tapi bagi Anda pemula Anda bisa melakukannya 1-2 hari per minggu,” tutur Dr. Higgins.
              </p>

              <h3 class="mt-4 mb-3">2. Jangan lupakan peregangan</h3>
              <p>Dr. Higgins mengatakan, selain pemanasan, jangan lupa melakukan peregangan otot sebelum dan setelah melakukan latihan di gym. Pemanasan dan peregangan akan mengurangi risiko cedera saat berolahraga.</p>

              <p>“Ketika Anda pemanasan, Anda harus meregangkan otot dan menahannya sekitar 15 detik. Anda akan terhindar dari cedera bila melakukannya dengan baik dan benar,” tuturnya.</p>

              <h3 class="mt-4 mb-3">3. Jangan cuma satu bidang</h3>
              <p>
                Saat latihan di gym, kita bisa melakukan aktivitas apapun sesuai dengan target kesehatan dan kebugaran yang ingin dicapai. Sama halnya dengan berolahraga di rumah atau di luar ruangan, Anda bisa menggabung berbagai bidang
                olahraga yang Anda. Jadi dalam satu hari, jangan cuma melakukan satu hal yang sama, tapi lakukan bergantian dengan aktivitas lain.
              </p>
              <p>“Jangan lari terus setiap hari. Anda akan bosan. Cobalah yang lain dan Anda akan menikmatinya,” tutur Dr. Higgins.</p>

              <p>
                Masih kata Dr. Higgins, jangan lupa untuk melakukan beragam olahraga yang bisa Anda lakukan untuk kebugaran tubuh, seperti aerobik, olahraga kekuatan (resistensi), fleksibilitas (termasuk yoga), dan olahraga keseimbangan.
                Begitupun saat menjalani latihan kekuatan, jangan hanya fokus pada satu area tubuh saja seperti lengan atau dada. Beri perhatian yang sama pada semua area tubuh Anda misalnya perut, betis, bahu, punggung, dan sebagainya.
              </p>

              <h3 class="mt-4 mb-3">4. Ketahui berat beban dan cara yang benar menggunakan alat fitness</h3>
              <p>Kebanyakan orang bingung ketika pertama kali masuk gym, kata Dr. Higgins, tapi kebanyakan mereka ini hanya takut bertanya untuk meminta bantuan. Oleh karena itu, tips nge-gym untuk pemula adalah mengetahui berat badan.</p>
              <p>
                “Kalau tidak tahu, tanya. Di gym ada banyak orang yang akan membantu program fitness Anda dengan alat-alat yang ada di gym, dan dengan bertanya akan membantu Anda terhindar dari cedera yang disebabkan oleh Anda sendiri,”
                ujar Dr. Higgins.
              </p>
              <p>
                Karena malas bertanya, para pemula yang langsung memulai latihan dengan beban paling berat yang bisa mereka angkat. Padahal seharusnya dimulai dari yang paling ringan dulu. Dr. Higgins menyarankan agar tidak meningkatkan
                berat dulu dalam setiap minggunya, agar tidak cedera dan bisa mendapatkan manfaat yang terbaik dari fitness.
              </p>
              <p>Kebanyakan gym punya banyak petugas yang siap siaga untuk membantu Anda menjelaskan bagaimana cara yang benar menggunakan alat tertentu, sekaligus memberi tahu apa fungsi alat tersebut.</p>

              <h3 class="mt-4 mb-3">5. Ketahui kapan waktu untuk beristirahat</h3>
              <p>
                Anda mungkin berpikir nge-gym setiap hari itu baik. Padahal menurut Dr. Higgins, kita perlu istirahat juga untuk mengimbangi waktu olahraga, karena bila tidak ada waktu istirahat, tubuh dan otot tak punya waktu untuk
                memulihkan diri. Tips nge-gym terakhir untuk pemula adalah mengetahui waktu istirahat.
              </p>
              <p>“Jika Anda tidak memberikan waktu istirahat untuk tubuh Anda memulihkan dan memperbaiki diri, performa Anda akan turun dan Anda akan sulit pulih sepenuhnya,” ujar Dr. Higgins.</p>
              <p>
                Jika Anda merasa sakit atau nyeri setelah nge-gym (bukan karena cedera), itu baik, karena artinya otot Anda sudah mulai merasakan efeknya. Dr. Higgins menyarankan untuk tidak menggunakan obat penghilang rasa sakit dan
                biarkan pulih secara alami.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog3 -->
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
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script type="text/javascript">
      AOS.init({
        once: true,
      });
    </script>
  </body>
</html>
