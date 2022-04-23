<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
</head>
<body>
<?php
include "koneksi.php";
$id = $_GET["id_059"];
$sql = "SELECT * FROM tbl_059 where id_059=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}
?>

<h1>Form Ubah Data</h1>
<?php
while ($row = mysqli_fetch_array($hasil))
{
?> 
    <form method = "POST" action="update.php">
        <input type="hidden" name = "id_059" value = "<?php echo $row['id_059']?>">
        Nama : <input type = "text" name = "nama_059" value = "<?php echo $row['nama_059']?>"><br/>
        Email : <input type = "text" name = "email_059"value = "<?php echo $row['email_059']?>"><br/>
        <button type = "submit">Update</button>
    </form>
<?php } ?>    
</body>
</html>