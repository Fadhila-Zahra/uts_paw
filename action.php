<?php
include "koneksi.php";

$nama = $_POST['nama_059'];
$email = $_POST['email_059'];



$sql = " INSERT INTO tbl_059 VALUE (null, '$nama', '$email')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Penambahan data siswa gagal";
}else {
    echo "Penambahan data siswa berhasil <br>";
    echo "<a href='tampil_data.php'> show data</a>";
}
?>