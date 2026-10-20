<!DOCTYPE html>
<html>
<head>
    <title>Data Penduduk</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="4">
    <tr>
        <th>kecamatan</th>
        <th>luas</th>
        <th>jumlah_penduduk</th>
    </tr>
    <?php
    $data = [
        ["Moyudan", 27.62, 31497],
        ["Minggir", 27.27, 29886],
        ["Seyegan", 26.63, 47129],
        ["Godean", 26.84, 72028],
        ["Gamping", 29.25, 108675]
    ];

    foreach ($data as $d) {
        echo "<tr>
            <td>$d[0]</td>
            <td>$d[1]</td>
            <td align='right'>$d[2]</td>
        </tr>";
    }
    ?>
</table>
</body>
</html>