<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="PRAK302.php">
        Tinggi : <input type="text" name="input"><br>
        Alamat Gambar : <input type="url" name="url"><br>
        <button type="submit" name="submit" value="Cetak">Cetak</button>
</form>
<?php
        if(isset($_POST['input'],$_POST['url'],$_POST['submit'])){
            $url = $_POST['url'];
            $tinggi=$_POST['input'];
            $i=1; $t=$tinggi; $j=1;
            
        }
?>      
    <?php if( isset($_POST['submit']) ) { ?>
        <?php while($i <= $tinggi) { ?>
            <?php while($j < $i ) { ?>
            <img style="width: 20px; opacity:0" src=<?= "$url"; ?>
            alt="foto kosong">
            <?php $j = $j + 1; ?>
            <?php } ?>
                <?php while($t >= $i) { ?>
                <img style="width : 20px" src=<?= "$url"; ?> alt="foto">
                <?php $t = $t- 1; ?>
                <?php } ?><br>

        <?php
        $i = $i + 1;$j = 1; $t = $tinggi;?>
        <?php } ?>
<?php } ?>


</body>
</html>