<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan JSON ke Tabel</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Data Wisata</h2>
    <table>
        <thead>
            <tr>
                <th>KOTA</th>
                <th>LANDMARK</th>
                <th>TARIF</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Data JSON
            $json = '[
                {"kota":"SEMARANG", "landmark":"LAWANG SEWU", "tarif":"20000"},
                {"kota":"YOGYAKARTA", "landmark":"PRAMBANAN", "tarif":"35000"},
                {"kota":"MAGELANG", "landmark":"BOROBUDUR", "tarif":"45000"},
                {"kota":"SURAKARTA", "landmark":"PGS", "tarif":"GRATIS"}
            ]';

            // Decode JSON jadi array PHP
            $data = json_decode($json, true);

            // Looping isi array ke tabel
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>{$row['kota']}</td>";
                echo "<td>{$row['landmark']}</td>";
                echo "<td>{$row['tarif']}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
