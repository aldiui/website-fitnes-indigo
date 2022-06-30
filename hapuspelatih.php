<?php
require "koneksidb.php";
$id_pelatih = $_GET["id_pelatih"];
if (hapuspelatih($id_pelatih) > 0){
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href='pelatih.php';
        </script>
    ";
} else {
    echo "        
        <script>
            alert('Data gagal dihapus');
            document.location.href='pelatih.php';
        </script>
    ";
}
?>