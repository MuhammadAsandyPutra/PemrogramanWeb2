<?php require('Model.php');
if (isset($_GET['id_member'])) {
    editMember();
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



   <?php echo (isset($_GET['id_member'])) ? "<title>Edit Member</title>": "<title>Tambah Member</title>" ?> 
</head>
<body>
    <h2>Pengisian Data Member</h2>
    <form action="" method="post">
    <?php
    
        if( isset($_GET['id_member']) ) {
        $sql = "SELECT * FROM perpustakaan WHERE id_member = " . $_GET['id_member'];
        $result = mysqli_query($conn, $sql);

        foreach($result as $res) :
            
    ?>
        <table class="mb-3">
            <tr>
            <td><label for="id_member" class="form-label">ID Member</label></td>
                <td><input type="text" name="id_member" class="form-control"<?php echo (isset($_GET['id_member'])) ?  "value = " . $res["id_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
            <td><label for="nama_member" class="form-label">Nama Member</label></td>
                <td><input type="text" name="nama_member" class="form-control" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["nama_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
            <td><label for="nomor_Member" class="form-label">Nomor Member</label></td>
                <td><input type="text" name="nomor_member" class="form-control" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["nomor_member"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
            <td><label for="alamat_Member" class="form-label">Alamat</label></td>
                <td><input type="text" name="alamat" class="form-control" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["alamat"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
            <td><label for="tanggal_Member" class="form-label">Tanggal Mendaftar</label></td>
                <td><input type="datetime-local" name="tgl_mendaftar" class="form-control"<?php echo (isset($_GET['id_member'])) ?  "value = " . $res["tgl_mendaftar"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
            <td><label for="tgl_akhirMember" class="form-label">Tanggal Bayar Terakhir</label></td>
                <td><input type="date" name="tgl_terakhir_bayar" class="form-control"<?php echo (isset($_GET['id_member'])) ?  "value = " . $res["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>
                    <?php 
                    if (isset($_GET['id_member'])) {
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
                    <td><label for="id_member" class="form-label">ID Member</label></td>
                    <td><input type="text" name="id_member" class="form-control"<?php echo (isset($_GET['id_member'])) ?  "value = " . $res["id_member"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td><label for="nama_Member" class="form-label">Nama Member</label></td>
                    <td><input type="text" name="nama_member" class="form-control"<?php echo (isset($_GET['id_member'])) ?  "value = " . $res["nama_member"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td><label for="nomor_Member" class="form-label">Nomor Member</label></td>
                    <td><input type="text" name="nomor_member"class="form-control" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["nomor_member"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td><label for="alamat_Member" class="form-label">Alamat</label></td>
                    <td><input type="text" name="alamat"class="form-control" <?php echo (isset($_GET['id_member'])) ?  "value = " . $res["alamat"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td><label for="tanggal_Member" class="form-label">Tanggal Mendaftar</label></td>
                    <td><input type="datetime-local" name="tgl_mendaftar" class="form-control"<?php echo (isset($_GET['id_member'])) ?  "value = " . $res["tgl_mendaftar"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td><label for="tgl_akhirMember" class="form-label">Tanggal Bayar Terakhir</label></td>
                    <td><input type="date" name="tgl_terakhir_bayar" class="form-control"<?php echo (isset($_GET['id_member'])) ?  "value = " . $res["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>
                        <?php 
                        if (isset($_GET['id_member'])) {
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
        tambahMember($_POST['id_member'],$_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'],$_POST['tgl_terakhir_bayar']);
    }
    if (isset($_POST['update'])) {
       updateMember($_POST['id_member'],$_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'],$_POST['tgl_terakhir_bayar']);
    }
    ?>
</body>
</html>