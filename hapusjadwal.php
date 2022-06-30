<?php
require "koneksidb.php";
$id_jadwal = $_GET["id_jadwal"];
if (hapusjadwal($id_jadwal) > 0){
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href='jadwal.php';
        </script>
    ";
} else {
    echo "        
        <script>
            alert('Data gagal dihapus');
            document.location.href='jadwal.php';
        </script>
    ";
}
?>