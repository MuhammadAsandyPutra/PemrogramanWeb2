<?php 
require('Model.php');
if (isset($_GET['id_buku'])){
    hapusBuku($_GET['id_buku']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buku Perpus</title>
    <style>
        body { 
            margin:auto;
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

        h1{
            text-align: center;
            margin-top: 10%;
            font-size: 70px;
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
<body >
<h1>DATA BUKU</h1>
    <table>
        <thead class="tab-head">
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody class="tab-body">
            <?php
            dataBuku();
            ?>
        </tbody>
        <tfoot class="tab-bot">
            <tr>
                <td>
                <button type="button" class="btn btn-success"><a href="dataBuku.php">TAMBAH BUKU</a></button>
                </td>
                <td>
                <button type="button" class="btn btn-success"><a href="Home.php">KEMBALI</a></button>
                </td>
            </tr>
            </tfoot>
    </table>
    <br></br>
</body>
</html>
