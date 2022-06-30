<?php
$conn = mysqli_connect("localhost","root","","db_fitnes");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row; 
    }
    return $rows;
}

// komentar start
function tambahkomen($data){
    global $conn;
    $nama=htmlspecialchars($data["nama"]);
    $nohp=htmlspecialchars($data["nohp"]);
    $email=htmlspecialchars($data["email"]);
    $pesan=htmlspecialchars($data["pesan"]);
    
    $query = "INSERT INTO komentar VALUES
    ('','$nama','$nohp','$email','$pesan')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function hapuskomen($id_komen){
    global $conn;
    mysqli_query($conn,"DELETE FROM komentar WHERE id_komen = $id_komen");

    return mysqli_affected_rows($conn);
}
// komentar end

// kegiatan start
function tambahkegiatan($data){
    global $conn;
    $nama_kegiatan=htmlspecialchars($data["nama_kegiatan"]);
    
    $query = "INSERT INTO kegiatan VALUES
    ('','$nama_kegiatan')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function hapuskegiatan($id_kegiatan){
    global $conn;
    mysqli_query($conn,"DELETE FROM kegiatan WHERE id_kegiatan = $id_kegiatan");

    return mysqli_affected_rows($conn);
}

function ubahkegiatan($data){
    global $conn;
    $id_kegiatan=$data["id_kegiatan"];
    $nama_kegiatan=htmlspecialchars($data["nama_kegiatan"]);

    $query = "UPDATE kegiatan SET
                nama_kegiatan='$nama_kegiatan' WHERE id_kegiatan=$id_kegiatan
            ";  
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// kegiatan end

// jadwal start
function tambahjadwal($data){
    global $conn;
    $hari=htmlspecialchars($data["hari"]);
    $id_pelatih=htmlspecialchars($data["id_pelatih"]);
    
    $query = "INSERT INTO jadwal VALUES
    ('','$hari','$id_pelatih')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function hapusjadwal($id_jadwal){
    global $conn;
    mysqli_query($conn,"DELETE FROM jadwal WHERE id_jadwal = $id_jadwal");

    return mysqli_affected_rows($conn);
}

function ubahjadwal($data){
    global $conn;
    $id_jadwal=$data["id_jadwal"];
    $hari=htmlspecialchars($data["hari"]);
    $id_pelatih=htmlspecialchars($data["id_pelatih"]);

    $query = "UPDATE jadwal SET hari='$hari',
                id_pelatih='$id_pelatih' WHERE id_jadwal=$id_jadwal
            ";  
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// jadwal end

// pelatih start
function tambahpelatih($data){
    global $conn;
    $nama_pelatih=htmlspecialchars($data["nama_pelatih"]);
    $jk=htmlspecialchars($data["jk"]);
    $nohp=htmlspecialchars($data["nohp"]);
    $email=htmlspecialchars($data["email"]);
    $skill=htmlspecialchars($data["skill"]);
    $alamat=htmlspecialchars($data["alamat"]);

    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $query = "INSERT INTO pelatih VALUES
    ('','$nama_pelatih','$jk','$nohp','$email','$skill','$alamat','$gambar')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}


function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if($error === 4){
        echo "
        <script>
        alert('Pilih gambar terlebih dahulu');
        </script>
        ";
        return false;
    }

    $ektensiGambarValid = ['jpg','jpeg','png','gif'];
    $ektensiGambar = explode('.',$namaFile);
    $ektensiGambar = strtolower(end($ektensiGambar));

    if(!in_array($ektensiGambar, $ektensiGambarValid)){
        echo "
        <script>
        alert('yang anda upload bukan gambar');
        </script>
        ";
        return false;
    }

    if($ukuranFile > 4000000){
        echo "
        <script>
        alert('ukuran gambar terlalu besar');
        </script>
        ";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ektensiGambar;

    move_uploaded_file($tmpName,'img/'.$namaFileBaru);
    return $namaFileBaru;
}

function hapuspelatih($id_pelatih){
    global $conn;
    mysqli_query($conn,"DELETE FROM pelatih WHERE id_pelatih = $id_pelatih");

    return mysqli_affected_rows($conn);
}

function ubahpelatih($data){
    global $conn;
    $id_pelatih=$data["id_pelatih"];
    $nama_pelatih=htmlspecialchars($data["nama_pelatih"]);
    $jk=htmlspecialchars($data["jk"]);
    $nohp=htmlspecialchars($data["nohp"]);
    $email=htmlspecialchars($data["email"]);
    $skill=htmlspecialchars($data["skill"]);
    $alamat=htmlspecialchars($data["alamat"]);
    $gambarlama=htmlspecialchars($data["gambarlama"]);

    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE pelatih SET nama_pelatih='$nama_pelatih', jk = '$jk', nohp = '$nohp', email='$email', skill='$skill', alamat='$alamat',
                gambar='$gambar' WHERE id_pelatih=$id_pelatih
            ";  
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// pelatih end

// login start
function registrasi($data){
    global $conn;
    $nama=htmlspecialchars($data["nama"]);
    $username=strtolower(stripslashes(($data["username"])));
    $tempat=htmlspecialchars($data["tempat"]);
    $tl=htmlspecialchars($data["tl"]);
    $jk=htmlspecialchars($data["jk"]);
    $alamat=htmlspecialchars($data["alamat"]);
    $nohp=htmlspecialchars($data["nohp"]);
    $email=htmlspecialchars($data["email"]);
    $password=mysqli_real_escape_string($conn, $data["password"]);
    $password2=mysqli_real_escape_string($conn, $data["password2"]);
    $level=htmlspecialchars($data["level"]);
    
    
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    
    if (mysqli_fetch_assoc($result)){
        echo "
        <script>
        alert('Regsitrasi Anda Gagal, Username Sudah Terdaftar');
        </script>
        ";
        return false;
    }
    
    if ($password !== $password2){
        echo "
        <script>
        alert('Regsitrasi Anda Gagal, Password Tidak Sama');
        </script>
        ";
        return false;
    }
    
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    $query = "INSERT INTO user VALUES
    ('','$nama','$username','$tempat','$tl','$jk','$alamat','$nohp','$email','$password','$level')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function hapususer($id_user){
    global $conn;
    mysqli_query($conn,"DELETE FROM user WHERE id_user = $id_user");

    return mysqli_affected_rows($conn);
}

// logim end
// kelas start
function tambahkelas($data){
    global $conn;
    $id_kegiatan=htmlspecialchars($data["id_kegiatan"]);
    $id_pelatih=htmlspecialchars($data["id_pelatih"]);
    $nama_kelas=htmlspecialchars($data["nama_kelas"]);
    $deskripsi=htmlspecialchars($data["deskripsi"]);
    $jadwal=htmlspecialchars($data["jadwal"]);
    $harga=htmlspecialchars($data["harga"]);
    $stok=htmlspecialchars($data["stok"]);

    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $query = "INSERT INTO kelas VALUES
    ('','$id_kegiatan','$id_pelatih','$nama_kelas','$deskripsi','$jadwal','$harga','$stok','$gambar')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function hapuskelas($id_kelas){
    global $conn;
    mysqli_query($conn,"DELETE FROM kelas WHERE id_kelas = $id_kelas");

    return mysqli_affected_rows($conn);
}

function ubahkelas($data){
    global $conn;
    $id_kelas=$data["id_kelas"];
    $id_kegiatan=htmlspecialchars($data["id_kegiatan"]);
    $id_pelatih=htmlspecialchars($data["id_pelatih"]);
    $nama_kelas=htmlspecialchars($data["nama_kelas"]);
    $deskripsi=htmlspecialchars($data["deskripsi"]);
    $jadwal=htmlspecialchars($data["jadwal"]);
    $harga=htmlspecialchars($data["harga"]);
    $stok=htmlspecialchars($data["stok"]);
    $gambarlama=htmlspecialchars($data["gambarlama"]);

    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE kelas SET id_kegiatan='$id_kegiatan', id_pelatih='$id_pelatih',nama_kelas = '$nama_kelas',deskripsi='$deskripsi',
                jadwal='$jadwal', harga='$harga',stok='$stok', gambar='$gambar' WHERE id_kelas=$id_kelas
            ";  
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubahprofil($data){
    global $conn;
    $id_user=$data["id_user"];
    $username=htmlspecialchars($data["username"]);
    $alamat=htmlspecialchars($data["alamat"]);
    $nohp=htmlspecialchars($data["nohp"]);
    $email=htmlspecialchars($data["email"]);

    $query = "UPDATE user SET username='$username', alamat = '$alamat', nohp='$nohp',
                email='$email' WHERE id_user=$id_user
            ";  
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// jadwal end

// transaksi start
function hapustransaksi($id_transaksi){
    global $conn;
    mysqli_query($conn,"DELETE FROM transaksi WHERE id_transaksi = $id_transaksi");

    return mysqli_affected_rows($conn);
}

function tambahtransaksi($data){
    global $conn;
    $tanggal=htmlspecialchars($data["tanggal"]);
    $id_user=htmlspecialchars($data["id_user"]);
    $id_kelas=htmlspecialchars($data["id_kelas"]);
    $total_bayar=htmlspecialchars($data["total_bayar"]);
    $stok=htmlspecialchars($data["stok"]);
    $stok2 = $stok - 1;

    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $query = "INSERT INTO transaksi VALUES
    ('','$tanggal','$id_user','$id_kelas','$total_bayar','$gambar')";
    mysqli_query($conn, $query);

    $query2 = "UPDATE kelas SET stok = '$stok2' WHERE id_kelas=$id_kelas";
    mysqli_query($conn, $query2);
    
    return mysqli_affected_rows($conn);
}
// transaksi end
?>