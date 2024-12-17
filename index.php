<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mahasiswa</title>
    <style>
        .table1 {
            font-family: sans-serif;
            color: #444;
            border-collapse: collapse;
            width: 50%;
            border: 1px solid #f2f5f7;
        }

        .table1 tr th {
            background: #35A9DB;
            color: #fff;
            font-weight: normal;
        }

        .table1,
        th,
        td {
            padding: 8px 20px;
            text-align: left;
        }

        .table1 tr:hover {
            background-color: #f5f5f5;
        }

        .table1 tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body style="font-family:arial">
    <center>
        <h2>CRUD Mahasiswa</h2>
    </center>
    <hr />
    <a href="tambah.php">+ Tambah Data Baru</a><br /><br />
    <b>Data Mahasiswa</b>
    <table style="width:100%" class="table1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th colspan=2>
                <center>Opsi</center>
            </th>
        </tr>

        <?php
        include "koneksi.php";
        $id = 1;
        $data = mysqli_query($koneksi, "select * from mahasiswa");
        while ($r = mysqli_fetch_array($data)) {
            $id = $r['id'];
            $nama = $r['nama'];
            $nim = $r['nim'];
            $jurusan = $r['jurusan'];
            $email = $r['email'];
            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $nama; ?></td>
                <td><?php echo $nim; ?></td>
                <td><?php echo $jurusan; ?></td>
                <td><?php echo $email; ?></td>
                <td align=right width=70px><a href="edit.php?id=<?php echo $id; ?>">Edit</a></td>
                <td align=right width=70px><a href="hapus.php?id=<?php echo $id; ?>">Hapus</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>

</html>