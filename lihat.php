<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku Tamu</title>
</head>
<body>
    <h1>Data Buku Tamu</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Isi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM buku_tamu";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['ID_BT']}</td>
                        <td>{$row['NAMA']}</td>
                        <td>{$row['EMAIL']}</td>
                        <td>{$row['ISI']}</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
<!-- Nama : Annora Iffah Diniyah Darma -->
 <!-- Nim : 202331162 -->

 