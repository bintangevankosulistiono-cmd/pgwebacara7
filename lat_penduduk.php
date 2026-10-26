
<?php
$penduduk = array(
    array("Moyudan", 27.62, 31497),
    array("Minggir", 27.27, 29886),
    array("Seyegan", 26.63, 47129),
    array("Godean", 26.84, 72028),
    array("Gamping", 29.25, 108675)
);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Penduduk PHP</title>
</head>
<body>

    <h2>Tabel Data Penduduk</h2>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>kecamatan</th>
            <th>luas</th>
            <th>jumlah_penduduk</th>
        </tr>

        <?php
        foreach ($penduduk as $data) {
            echo "<tr>";
            echo "<td>" . $data[0] . "</td>";
            echo "<td>" . $data[1] . "</td>";
            echo "<td>" . $data[2] . "</td>";
            echo "</tr>";
        }
        ?>

    </table>

</body>
</html>
