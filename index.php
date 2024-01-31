<?php
require "functions.php";    
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Restoran</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            text-align: center;
            background-color: #f5f5f5;
        }
        h1 {
            color: #333;
            margin: 20px 0;
        }
        table {
            width: 100%;
            max-width: 800px;
            margin: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0. 0.2);
        }
        th, td {
            padding: 16px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: bold;
            transition: background-color 0.3 ease;
        }
        td {
            font-weight: bold;
            text-align: left;
            color: #333;
        }
        tr:nth-child(odd) {
            background-color: #f1f1f1;
        }
        tr:hover {
            background-color: #e0f7fa;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0. 0.1);
        }
        th:hover {
            background-color: #e0f7fa;
            color: #4CAF50;
        }
        .nomor {
            text-align: center;
        }
    </style>
</head>
<body>
    
<h1>Restoran</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Makanan</th>
                <th>Kategori Makanan</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM tb_makanan";
            $data = $db->prepare($query);
            $data->execute();

            $no = 1;
            while ($pelanggan = $data->fetch(PDO::FETCH_OBJ)) :
            ?>
            <tr>
                <td class="nomor"><?= $no ?></td>
                <td><?= $pelanggan->nama_makanan ?></td>
                <td><?= $pelanggan->kategori_makanan ?></td>
                <td><?= $pelanggan->harga ?></td>
            </tr>
            <?php 
            $no++;
            endwhile ?>
        </tbody>
    </table>
</body>
</html>