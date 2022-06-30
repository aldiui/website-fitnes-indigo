<?php
session_start();
if($_SESSION['level']=="user"){
  header("Location:index.php");
  exit;
}
elseif($_SESSION['level']==""){
  header("Location:login.php");
  exit;
}

require "koneksidb.php";
$id_kelas= $_GET["id_kelas"];
$kelas= query("SELECT * FROM kelas WHERE id_kelas=$id_kelas")[0];

if(isset($_POST["submit"])){
    if( ubahkelas($_POST) > 0){
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href='kelasog.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah');
                document.location.href='kelasog.php';
            </script>
        ";
    }
}
$skill = query("SELECT * FROM kegiatan");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelas - Indigo</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body class="bg-awal">
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
              <a class="nav-link text-white mx-lg-4 my-2 my-lg-0 font-bebas fs-5" href="akun.php">
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
        <h1 class="fs-60 text-info font-payback">KelaS</h1>
      </div>
    </div>
    <!--  judul end -->
    <div class="container-fluid p-0 m-0">
      <div class="row">
        <div class="col-md-2 bg-awal h-100">
        <ul class="nav flex-column mt-2 ms-2">
            <li class="nav-item">
              <a class="nav-link text-white border-bottom border-secondary my-3 active" aria-current="page" href="dashboard.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer me-2" viewBox="0 0 16 16">
                  <path
                    d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"
                  />
                  <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z" />
                </svg>
                Dashboard 
              </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white border-bottom border-secondary my-3" href="user.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill me-2" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
                User
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white border-bottom border-secondary my-3" href="kegiatan.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bullseye  me-2" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                  <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                  <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>
                Kegiatan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white border-bottom border-secondary my-3" href="pelatih.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill me-2" viewBox="0 0 16 16">
                  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                </svg>
                Pelatih
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info border-bottom border-secondary my-3" href="kelasog.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection-fill text-info me-2" viewBox="0 0 16 16">
                  <path
                    d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"
                  />
                </svg>
                Kelas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white border-bottom border-secondary my-3" href="jadwal.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event-fill me-2" viewBox="0 0 16 16">
                  <path
                    d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"
                  />
                </svg>
                Jadwal
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white border-bottom border-secondary my-3" href="transaksi.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin me-2" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                </svg>
                Transaksi
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white border-bottom border-secondary my-3" href="komentar.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-fill me-2" viewBox="0 0 16 16">
                  <path d="M2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                </svg>
                Konsultasi
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-10 p-4 bg-aneh">
          <div class="card p-2">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-10">
                    <div class="my-3 mx-1">
                        <h3 class="font-bebas text-center mb-3">Edit Kelas</h3>
                        <form action="" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="id_kelas" value="<?= $kelas["id_kelas"];?>">
                          <input type="hidden" name="gambarlama" value="<?= $kelas["gambar"];?>">
                          <div class="my-4 d-flex justify-content-center">
                            <div class="card p-2 shadow-lg">
                              <img src="img/<?= $kelas["gambar"];?>" alt="" width="250" height="250">
                            </div>
                          </div>
                          <div class="form-floating mb-3">
                            <select class="form-select border border-info border-3" id="id_kegiatan" aria-label="Floating label select example" name="id_kegiatan" required>
                              <?php 
                              $skill = query("SELECT * FROM kegiatan");
                              foreach($skill as $skill2):?>
                              <option value="<?= $skill2['id_kegiatan'];?>"><?= $skill2['nama_kegiatan'];?></option>
                              <?php endforeach;?>
                            </select>
                            <label for="id_kegiatan">Kegiatan</label>
                          </div>
                          <div class="form-floating mb-3">
                            <select class="form-select border border-info border-3" id="id_pelatih" aria-label="Floating label select example" name="id_pelatih" required>
                              <?php 
                              $pelatih = query("SELECT * FROM pelatih");
                              foreach($pelatih as $pelatih2):
                              ?>
                              <option value="<?= $pelatih2['id_pelatih'];?>">
                                <?= $pelatih2['nama_pelatih'];?> - 
                                <?php 
                                  $keg = $pelatih2['skill'];
                                  $keg1 = query("SELECT * FROM kegiatan WHERE id_kegiatan='$keg'");
                                ?>
                                <?php foreach($keg1 as $keg2):?>
                                  <?= $keg2['nama_kegiatan']; ?>
                                <?php endforeach;?>
                              </option>
                              <?php endforeach;?>
                            </select>
                            <label for="id_pelatih">Pelatih</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control border border-info border-3" name="nama_kelas" id="nama_kelas" placeholder="nama_kelas" autocomplete="off" required value="<?= $kelas["nama_kelas"];?>" />
                            <label for="nama_kelas">Nama kelas</label>
                          </div>
                          <div class="form-floating mb-3">
                            <textarea class="form-control border border-info border-3" name="deskripsi" placeholder="deskripsi" id="deskripsi" style="height: 100px" autocomplete="off" required><?= $kelas["deskripsi"];?></textarea>
                            <label for="deskripsi">Deskripsi</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="datetime-local" class="form-control border border-info border-3" name="jadwal" id="jadwal" placeholder="jadwal" autocomplete="off" required />
                            <label for="jadwal">Jadwal</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="number" class="form-control border border-info border-3" name="harga" id="harga" placeholder="harga" autocomplete="off" required value="<?= $kelas["harga"];?>" />
                            <label for="harga">Harga</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="number" class="form-control border border-info border-3" name="stok" id="stok" placeholder="stok" autocomplete="off" required value="<?= $kelas["stok"];?>" />
                            <label for="stok">Stok</label>
                          </div>
                          <div class="mb-3 text-center">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control border border-info border-3" name="gambar" id="gambar"  placeholder="alamat" autocomplete="off"/>
                          </div>
                          <div class="text-center my-3">
                              <button class="btn btn-info btn-kirim font-payback text-light w-50" name="submit" type="submit" required>Edit</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

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
