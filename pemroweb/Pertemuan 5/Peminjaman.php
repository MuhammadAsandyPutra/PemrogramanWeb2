<?php 
require('Model.php');
if (isset($_GET['id_peminjaman'])){
    hapusPeminjaman($_GET['id_peminjaman']);
    
}

if (isset($_GET['id_peminjaman'])){
    editpeminjaman($_GET['id_peminjaman']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman </title>
    <style>
       body{
            margin: auto;
        }
        table{
            border-collapse: collapse;
            margin: auto;
        }
        tr{
            border: black;
        }
        th{
            background-color: greenyellow;
            padding: 30px;
            border: 1px solid;
            font-size: 30px;
        }
        td{
            background-color: #E8E8E8;
            padding: 30px;
            text-align: center;
            border: 1px solid;
            font-size: 20px;
        }

        .btn a{
            color: white;
        }

        .tab-bot td{
            background-color: white;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
</head>
<body>
    <h2 style = "text-align:center">PEMINJAMAN</h2>
    <table>
        <thead>
            <tr>
                <th>ID Peminjaman</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            dataPeminjaman();
            ?>
        </tbody>
        <tfoot class="tab-bot">
            <tr>
                <td>
                <button type="button" class="btn btn-success"><a href="dataPeminjaman.php">PINJAM</a></button>
                </td>
                <td>
                <button type="button" class="btn btn-success"><a href="Home.php">KEMBALI</a></button>
                </td>
            </tr>
            </tfoot>
    </table>
    <br></br>
    </div>
</body>
</html>