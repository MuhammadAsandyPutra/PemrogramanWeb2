<?php 
$Series[1] = "Samsung Galaxy S22"; //merupakan associative array, pada array ini kita menginisiasikan nilai pada array dengan sebuah key unik
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
            background: #FF0000;
            padding: 10px;
        }

    </style>
</head>
<body>
<table>
    <tr>
        <th>Daftar Smartphone Samsung</td>    
    </tr>
    <tr>
        <td><?php echo $Series[1]; ?></td>   //contoh pemanggilan array dengan key uniknya untuk ditampilkan
    </tr>
    <tr>
        <td><?php echo $Series[2]; ?></td>    
    </tr>
    <tr>
        <td><?php echo $Series[3]; ?></td>    
    </tr>
    <tr>
        <td><?php echo $Series[4]; ?></td>    
    </tr>
</table>
</body>
</html>
