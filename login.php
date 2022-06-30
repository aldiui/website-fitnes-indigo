<?php
session_start();

require 'koneksidb.php';
if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])){
      if($row['level']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['level'] = "admin";
        header("Location: dashboard.php");
      }
      elseif($row['level']=="user"){
        $_SESSION['username'] = $username;
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['level'] = "user";
        header("Location: index.php");
      }
      exit;
    }
  }
  $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Indigo</title>
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
        <div class="col-lg-6 bg-awal text-white">
          <div class="py-5">
            <div class="row justify-content-center py-5">
              <div class="col-lg-8 col-md-6 col-11">
                <div class="card w-100 h-100 p-2 shadow" data-aos="zoom-in" data-aos-duration="1300">
                  <img src="img/indigo.png" width="200" class="img-fluid mx-auto my-3" />
                  <h3 class="font-payback text-info text-center mb-3">LOGIN</h3>
                  <form class="mx-2 mb-3 text-dark" method="post" action="">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control border border-info border-3" name="username" id="username" placeholder="username" autocomplete="off" required />
                      <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control border border-info border-3" name="password" id="password" placeholder="password" autocomplete="off" required />
                      <label for="password">Password</label>
                    </div>
                    <div class="form-check mb-3">
                      <input class="form-check-input border border-info border-3" type="checkbox" id="cek"/>
                      <label class="form-check-label" for="cek"> Lihat Password</label>
                    </div>
                    <div class="text-center mb-3">
                      <button class="btn btn-info btn-kirim font-payback text-light w-50" name="login" type="submit">Login</button>
                      <p class="mt-3">Belum registrasi ? <a href="register.php" class="text-decoration-none fw-bold text-dark">Yuk buat akun</a></p>
                    </div>
                    <?php if(isset($error)):?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <p class="text-sm">Username atau Password salah!</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    <?php endif;?>
                  </form>
                </div>
              </div>
            </div> 
          </div>
        </div>
        <div class="col-lg-6 d-none d-lg-block p-0 m-0">
          <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="5000">
                <img src="img/carouselogin2.jpg" class="w-100 d-flex justify-content-center align-items-center scale-obj" alt="..." />
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img src="img/carouselogin1.jpg" class="w-100 d-flex justify-content-center align-items-center scale-obj" alt="..." />
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img src="img/carouselogin3.jpg" class="w-100 d-flex justify-content-center align-items-center scale-obj" alt="..." />
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
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
          } else {
            $("#password").attr("type", "password");
          }
        });
      });

      AOS.init({
        once: true,
      });
    </script>
  </body>
</html>
