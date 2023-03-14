<?php 
$Seri = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Xcover 5");
//indexed array disini digunakan sebagai isi dari data yang ada pada tabel
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td {
            border:1px solid;
        }

    </style>
</head>
<body>
<table>
    <tr>
        <td><?php echo $Seri[0]; ?></td>   //memanggil nilai dari yang disimpan array sesuai dengan indexnya 
    </tr>
    <tr>
        <td><?php echo $Seri[1]; ?></td>    
    </tr>
    <tr>
        <td><?php echo $Seri[2]; ?></td>    
    </tr>
    <tr>
        <td><?php echo $Seri[3]; ?></td>    
    </tr>
</table>
</body>
</html>
