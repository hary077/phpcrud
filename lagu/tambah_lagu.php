<!DOCTYPE html>
<html>
<head>
    <title>lagu</title>
</head>
<body>
    <h3>lagu</h3>
    <form action="proses-tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>judul_lagu</td>
                <td><input type="text" name="judul_lagu" required></td>
            </tr>
            <tr>
                <td>artis</td>
                <td><input type="text" name="artis" required></td>
            </tr>
            <tr>
                <td>durasi</td>
                <td><input type="text" name="durasi" required></td>
            </tr>
           
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>


