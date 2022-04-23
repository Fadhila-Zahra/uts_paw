<?php
include "koneksi.php";
$id = $_POST['id_059'];
$nama = $_POST['nama_059'];
$email = $_POST['email_059'];


$sql = " UPDATE tbl_059 set nama_059 = '$nama', email_059 = '$email' where id_059 =$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Perubahan data siswa gagal";
}else {
    echo "Perubahan data siswa berhasil <br>";
    echo "<a href='tampil_data.php'>show data</a>";
}
?>