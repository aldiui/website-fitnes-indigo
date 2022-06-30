<?php
require "koneksidb.php";
$id_kelas = $_GET["id_kelas"];
if (hapuskelas($id_kelas) > 0){
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href='kelasog.php';
        </script>
    ";
} else {
    echo "        
        <script>
            alert('Data gagal dihapus');
            document.location.href='kelasog.php';
        </script>
    ";
}
?>