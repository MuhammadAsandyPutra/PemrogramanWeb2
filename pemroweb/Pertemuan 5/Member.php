<?php 
require('Model.php');
if (isset($_GET['id_member'])){
    hapusMember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Member Perpus</title>
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
    <h1 style= "text-align:Center">Member</h1>
    <table>
        <thead>
            <tr>
                <th>ID Member</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Alamat</th>
                <th>Tanggal Daftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            dataMember();
            ?>
        </tbody>
        <tfoot class="tab-bot">
            <tr>
                <td>
                <button type="button" class="btn btn-success"><a href="dataMember.php">TAMBAH MEMBER</a></button>
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