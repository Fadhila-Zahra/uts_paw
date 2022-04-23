<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>
<body>
<h1>Tampil Data</h1>
<h3><a href="tampil_data.php">Tampil Data Siswa</a> | <a href="tambah_data.php">Tambah Data</a></h3>
<table width = "90%" border = "1" cellspacing = "1">
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Email</td>
        <td>Action</td>

    </tr>
        <?php
        include "koneksi.php";
        $sql = "SELECT * FROM tbl_059";
        $hasil = mysqli_query($koneksi, $sql);
        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tr>
            <td><?=$row['id_059'];?></td>
            <td><?=$row['nama_059'];?></td>
            <td><?=$row['email_059'];?></td>
            <td><a href = "form_edit.php?id_059=<?=$row['id_059']?>">Edit | <a href = "delete.php?id_059=<?=$row['id_059']?>">Delete</td>
        </tr>
        <?php }
        ?>
</table>
</body>
</html>
