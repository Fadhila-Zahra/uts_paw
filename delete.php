<?php
include "koneksi.php";
$id = $_GET['id_059'];
$sql = "DELETE FROM tbl_059 WHERE id_059=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Penghapusan gagal";
}else{
    echo "Penghapusan data berhasil <br>";
    echo "<a href='tampil_data.php'>show data</a>";
}
    
?>