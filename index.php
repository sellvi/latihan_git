<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK MUTU</title>
</head>
<body>
    <h2>DATA KELAS</h2>
    <br/>
    <a href="tambah.php">+ TAMBAH KELAS</a> <br><br/>
    <table border="1">
        <tr>
            <th>ID KELAS</th>
            <th>NAMA KELAS</th>
            <th>WALI KELAS</th>
            <th>AKSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi,"select * from tbkelas");
        while ($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['idkelas']; ?></td>
                <td><?php echo $d['namakelas']; ?></td>
                <td><?php echo $d['walikelas']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['idkelas']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['idkelas']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>