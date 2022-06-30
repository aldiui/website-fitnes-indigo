<?php
require "koneksidb.php";
$id_kegiatan = $_GET["id_kegiatan"];
if (hapuskegiatan($id_kegiatan) > 0){
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href='kegiatan.php';
        </script>
    ";
} else {
    echo "        
        <script>
            alert('Data gagal dihapus');
            document.location.href='kegiatan.php';
        </script>
    ";
}
?>