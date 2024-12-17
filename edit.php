<?php
include "koneksi.php";
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $result = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim='$nim',  jurusan='$jurusan', email='$email' WHERE id='$id'");
    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = '$id'");
while ($r = mysqli_fetch_array($result)) {
    $nama = $r['nama'];
    $nim = $r['nim'];
    $jurusan = $r['jurusan'];
    $email = $r['email'];
}
?>
<html>

<head>
    <title>CRUD Mahasiswa</title>
</head>

<body style="font-family:arial">
    <center>
        <h2>CRUD Mahasiswa</h2>
    </center>
    <hr />
    <b>Edit Data Mahasiswa</b>
    <br /><br />
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" size="50" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" size="50" name="nim" value="<?php echo $nim; ?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" size="50" name="jurusan" value="<?php echo $jurusan; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" size="50" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>