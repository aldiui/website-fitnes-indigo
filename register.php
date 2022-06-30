<?php
require 'koneksidb.php';
if(isset($_POST["register"])){
    if( registrasi($_POST) > 0){
        echo "
            <script>
                alert('Regsitrasi Anda Berhasil');
                document.location.href='login.php';
            </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - Indigo</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Banner image -->
    <div class="container-fluid">
      <div class="row vh-100">
        <div class="col bg-awal text-white">
          <div class="py-5">
            <div class="row justify-content-center">
              <div class="col-md-8 col-11">
                <div class="card w-100 h-100 p-2 shadow" data-aos="zoom-in" data-aos-duration="1300">
                  <img src="img/indigo.png" width="200" class="img-fluid mx-auto my-2" />
                  <h3 class="font-payback text-info text-center mb-3">REGISTER</h3>
                  <form class="mx-2 mb-3 text-dark" method="post" action="">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control border border-info border-3" name="nama" id="Nama" placeholder="Nama" autocomplete="off" required />
                          <label for="Nama">Nama Lengkap</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control border border-info border-3" name="username" id="username" placeholder="username" autocomplete="off" required />
                          <label for="username">Username</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control border border-info border-3" name="tempat" id="tempat" placeholder="tempat" autocomplete="off" required />
                          <label for="tempat">Tempat Lahir</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-floating mb-3">
                          <input type="date" class="form-control border border-info border-3" name="tl" id="tl" placeholder="tl" autocomplete="off" required />
                          <label for="tl">Tanggal Lahir</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-floating mb-3">
                          <select class="form-select border border-info border-3" id="jk" aria-label="Floating label select example" name="jk" required>
                            <option value="Laki - laki">Laki - laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                          <label for="jk">Jenis Kelamin</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control border border-info border-3" name="alamat" id="alamat" placeholder="alamat" autocomplete="off" required />
                          <label for="alamat">Alamat</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control border border-info border-3" name="nohp" id="nohp" placeholder="nohp" autocomplete="off" required />
                          <label for="nohp">No Handphone</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-floating mb-3">
                          <input type="email" class="form-control border border-info border-3" name="email" id="email" placeholder="email" autocomplete="off" required />
                          <label for="email">Email</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-floating mb-3">
                          <input type="password" class="form-control border border-info border-3" name="password" id="password" placeholder="password" autocomplete="off" required />
                          <label for="password">Password</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-floating mb-3">
                          <input type="password" class="form-control border border-info border-3" name="password2" id="password2" placeholder="password2" autocomplete="off" required />
                          <label for="password2">Konfirmasi Password</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-floating mb-3">
                      <select class="form-select border border-info border-3" id="floatingSelect" aria-label="Floating label select example" name="level" required>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                      </select>
                      <label for="floatingSelect">Level User</label>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input border border-info border-3" type="checkbox" id="cek" />
                      <label class="form-check-label" for="cek"> Lihat Password</label>
                    </div>
                    <div class="text-center mb-3">
                      <button class="btn btn-info btn-kirim font-payback text-light w-50" name="register" type="submit">REGISTER</button>
                      <p class="mt-3">Sudah punya akun ? <a href="login.php" class="text-decoration-none fw-bold text-dark">Yuk Login</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner image -->

    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $("#cek").click(function () {
          if ($(this).is(":checked")) {
            $("#password").attr("type", "text");
            $("#password2").attr("type", "text");
          } else {
            $("#password").attr("type", "password");
            $("#password2").attr("type", "password");
          }
        });
      });

      AOS.init({
        once: true,
      });
    </script>
  </body>
</html>
