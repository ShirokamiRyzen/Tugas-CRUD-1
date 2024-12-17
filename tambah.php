<html>

<head>
    <title>CRUD Mahasiswa</title>
</head>

<body style="font-family:arial">
    <center>
        <h2>CRUD Mahasiswa</h2>
    </center>
    <hr />
    <b>Tambah Data Baru</b>
    <br /><br />
    <form action="tambah.php" method="post" name="form1">
        <table width="100%" border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" size="50" required></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" size="50" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" size="50" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" size="50" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="+ Tambahkan"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        include "koneksi.php";
        $tambah_mahasiswa = "INSERT INTO mahasiswa (nama, nim, jurusan, email) VALUES ('$nama', '$nim', '$jurusan' , '$email')";
        $kerjakan = mysqli_query($koneksi, $tambah_mahasiswa);
        if ($kerjakan) {
            echo "Data berhasil ditambahkan. <a href='index.php'>Lihat Data Mahasiswa</a>";
        } else {
            echo "Gagal bre";
        }
    }
    ?>
</body>

</html>