<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK MUTU</title>
</head>
<body>
    <a href="index.php">LIHAT SEMUA DATA</a>
    <h3>INSERT DATA KELAS</h3>
    <form action ="insert.php" method ="post">
        <table>
            <tr>
                <th>ID Kelas</th>
                <th><input type="text" name="Fidkelas"></th>
            </tr>
            <tr>
                <th>Nama Kelas</th>
                <th><input type="text" name="Fnamakelas"></th>
            </tr>
            <tr>
                <th>Wali Kelas</th>
                <th><input type="text" name="Fwalikelas"></th>
            </tr>
            <tr>
                <th></th>
                <th><input type="submit" value="simpan"></th>
            </tr>
        </table>
    </form>    
</body>
</html>