<?php if(isset($_POST['nama']) AND isset($_POST['umur']) AND isset($_POST['jk']) AND isset($_POST['tinggi']) AND isset($_POST['berat'])): ?>
<?php
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jk = $_POST['jk'];
$tinggi = $_POST['tinggi'];
$berat = $_POST['berat'];
$tinggi2 = $tinggi / 100;
$imt = $berat / ($tinggi2 * $tinggi2);

if ($jk == "Laki - laki"){
  if ($imt < 18){
    $hasil = "Kurus";
    $gambar = "male_underweight.png";
  } elseif ($imt >= 18 && $imt <= 24.99){
    $hasil = "Normal";
    $gambar = "male_normal.webp";
  } elseif ($imt >= 25 && $imt <= 26.99){
    $hasil = "Kegemukan";
    $gambar = "male_overweight.png";
  } elseif ($imt >= 27){
    $hasil = "Obesitas";
    $gambar = "male_obese.webp";
  }

  $ideal1 = 18 * ($tinggi2 * $tinggi2);
  $ideal2 = 24.99 * ($tinggi2 * $tinggi2);
} elseif ($jk == "Perempuan"){
  if ($imt < 17){
    $hasil = "Kurus";
    $gambar = "female_underweight.png";
  } elseif ($imt >= 17 && $imt <= 22.99){
    $hasil = "Normal";
    $gambar = "female_normal.webp";
  } elseif ($imt >= 23 && $imt <= 26.99){
    $hasil = "Kegemukan";
    $gambar = "female_overweight.webp";
  } elseif ($imt >= 27){
	  $hasil = "Obesitas";
    $gambar = "female_obese.webp";
  }
  
  $ideal1 = 17 * ($tinggi2 * $tinggi2);
  $ideal2 = 22.99 * ($tinggi2 * $tinggi2);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-5">
        <div class="img">
          <img src="img/<?= $gambar;?>" alt="" class="img-fluid" width="150">
        </div>
      </div>
      <div class="col-7 text-center m-auto">
        <h5><?=round($imt, 2);?> | <?=$hasil; ?></h5>
        <div class="card p-1 border border-info border-2">
          <p>
            Hi, <?= $nama;?> <br>
            Berat ideal anda adalah <?= round($ideal1, 2);?> - <?= round($ideal2, 2);?>  kg
          </p>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <table class="table table-striped">
          <?php if ($jk == "Laki - laki"):?>
            <tr>
              <td>Kurus</td>
              <td>< 18</td>
            </tr>
            <tr>
              <td>Normal</td>
              <td>18 - 24,99</td>
            </tr>
            <tr>
              <td>Kegemukan</td>
              <td>25,00 - 26,99</td>
            </tr>
            <tr>
              <td>Obesitas</td>
              <td>>= 27</td>
            </tr>
          <?php elseif ($jk == "Perempuan"):?>
            <tr>
              <td>Kurus</td>
              <td>< 17</td>
            </tr>
            <tr>
              <td>Normal</td>
              <td>17 - 22,99</td>
            </tr>
            <tr>
              <td>Kegemukan</td>
              <td>23,00 - 26,99</td>
            </tr>
            <tr>
              <td>Obesitas</td>
              <td>>= 27</td>
            </tr>
          <?php endif;?>
        </table>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <h5>Rekomendasi</h5>
        <ul>
          <?php if($hasil == "Kurus"): ?>
            <li>Konsumsi makanan sehat dengan frekuensi lebih sering untuk menaikan berat badan.</li>
            <li>Hindari konsumsi obat penambah berat badan instan.</li>
            <li>Bentuk tubuh dengan olahraga angkat beban atau fleksibilitas.</li>
            <li>Konsultasi lebih lanjut dengan dokter kesehatan gizi</li>
          <?php elseif($hasil == "Normal"): ?>
            <li>Tetap konsumsi makanan sehat dan gizi yang seimbang.</li>
            <li>Tetap katif bergerak 30 menit perhari.</li>
            <li>Konsultasi lebih lanjut dengan dokter kesehatan gizi</li>
          <?php elseif($hasil == "Kegemukan" or $hasil == "Obesitas"): ?>
            <li>Atur pola makanan dengan membatasi konsumsi makanan tinggi kalori, pemanis buatan, dan gula.</li>
            <li>Penurunan berat badan yang direkomendasikan adalah 0,5 - 1kg per pekan.</li>
            <li>Hindari konsumsi berat badan instan</li>
            <li>Lakukan olahraga 3-4 kali perminggu selama 30 menit contohnya seperti berjalan kaki, bersepeda, senam, dan kebugaran lainnya.</li>
            <li>Konsultasi lebih lanjut dengan dokter kesehatan gizi</li>
          <?php endif; ?>                                                                 
        </ul>
      </div>
    </div>
  </div>
<?php else:?>
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <p>
          Maaf ada data form yang kosong harap hitung ulang untuk mengisi data kembali !
        </p>
      </div>
    </div>
  </div>
<?php endif; ?>
</body>
  <script src="../js/bootstrap.bundle.min.js"></script>
</html