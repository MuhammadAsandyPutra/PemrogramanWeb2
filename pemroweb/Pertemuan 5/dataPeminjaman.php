<?php 
require('Model.php');
if (isset($_GET['id_Peminjaman'])) {
    editPeminjaman();
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

<style>
.mb-3{
    border: 1px solid;
    margin: auto;
}


h2{
    margin-top: 10%;
    text-align: center;
}

label{
    font-style: italic;
}
</style>

   <?php echo (isset($_GET['id_Peminjaman'])) ? "<title>Edit Data Peminjaman</title>": "<title>Tambah Data Peminjaman</title>" ?> 
</head>
<body>

    <h2>FORM PEMINJAMAN</h2>
    <form action="" method="post">
    <?php
        if( isset($_GET['id_Peminjaman']) ) {
        $sql = "SELECT * FROM peminjaman WHERE id_Peminjaman = " . $_GET['id_Peminjaman'];
        $result = mysqli_query($conn, $sql);

        foreach($result as $res) :
    ?>
        <table class="mb-3">
            <tr>
                <td><label for="id_pinjam" class="form-label">ID Peminjaman</label></td>
                <td><input type="text" name="id_Peminjaman" class="form-control"<?php echo (isset($_GET['id_Peminjaman'])) ?  "value = " . $res["id_Peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
                <td><label for="tanggal_peminjaman" class="form-label">Tanggal Peminjaman</label></td>
                <td><input type="date" name="tgl_pinjam" class="form-control"<?php echo (isset($_GET['id_Peminjaman'])) ?  "value = " . $res["tgl_pinjam"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td><label for="tanggal_kembalian" class="form-label">Tanggal Kembalian</label></td>
                <td><input type="date" name="tgl_kembali" class="form-control"<?php echo (isset($_GET['id_Peminjaman'])) ?  "value = " . $res["tgl_kembali"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>
                    <?php 
                    if (isset($_GET['id_Peminjaman'])) {
                        echo "<button type=\"submit\" name=\"update\">Edit</button>";
                    }else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
                    }
                    ?>
                </td>
            </tr>
        </table>
        <?php 
            endforeach; 
        } else {
            ?>
            <table class="mb-3">
                <tr>
                    <td><label for="id_pinjam" class="form-label">ID Peminjaman</label></td>
                    <td><input type="text" name="id_Peminjaman" class="form-control"<?php echo (isset($_GET['id_Peminjaman'])) ?  "value = " . $res["id_Peminjaman"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                    <td><label for="tanggal_peminjaman" class="form-label">Tanggal Peminjaman</label></td>
                    <td><input type="date" name="tgl_pinjam" class="form-control"<?php echo (isset($_GET['id_Peminjaman'])) ?  "value = " . $res["tgl_pinjam"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td><label for="tanggal_kembalian" class="form-label">Tanggal Kembalian</label></td>
                    <td><input type="date" name="tgl_kembali" class="form-control"<?php echo (isset($_GET['id_Peminjaman'])) ?  "value = " . $res["tgl_kembali"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>
                        <?php 
                        if (isset($_GET['id_Peminjaman'])) {
                            echo "<button type=\"submit\" name=\"update\">Edit</button>";
                        }else {
                            echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
                        }
                        ?>
                </td>
            </tr>
        </table>
        <?php } ?>
    </form>
    <br>
    <?php
    if (isset($_POST['submit'])) {
        tambahpeminjaman($_POST['id_Peminjaman'],$_POST['tgl_pinjam'],$_POST['tgl_kembali']);
    }
    if (isset($_POST['update'])) {
       updatepeminjaman($_POST['id_Peminjaman'],$_POST['tgl_pinjam'],$_POST['tgl_kembali']);
    }
    ?>
</body>
</html>