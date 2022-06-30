<?php
require "koneksidb.php";
$id_komen = $_GET["id_komen"];
if (hapuskomen($id_komen) > 0){
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href='komentar.php';
        </script>
    ";
} else {
    echo "        
        <script>
            alert('Data gagal dihapus');
            document.location.href='komentar.php';
        </script>
    ";
}
?>