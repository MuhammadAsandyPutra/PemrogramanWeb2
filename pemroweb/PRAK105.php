<?php 
$Series[1] = "Samsung Galaxy S22";
$Series[2] = "Samsung Galaxy S22+";
$Series[3] = "Samsung Galaxy A03";
$Series[4] = "Samsung Xover 5";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td {
            border:1px solid;
        }
        th {
            background-color: #FF0000;
            padding: 10px 2px;
        
        }

    </style>
</head>
<body>
<table>
    <tr>
        <th>Daftar Smartphone Samsung</td>    
    </tr>
    <tr>
        <td><?= $Series[1]; ?></td>    
    </tr>
    <tr>
        <td><?= $Series[2]; ?></td>    
    </tr>
    <tr>
        <td><?= $Series[3]; ?></td>    
    </tr>
    <tr>
        <td><?= $Series[4]; ?></td>    
    </tr>
</table>
</body>
</html>