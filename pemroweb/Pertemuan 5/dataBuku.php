<!-- require untuk Model.php sebagai wadah function -->
<?php require('Model.php');
if (isset($_GET['id_buku'])) {
    editbuku();
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
}

label{
    font-style: italic;
}

</style>

   <?php echo (isset($_GET['id_buku'])) ? "<title>Edit Buku</title>": "<title>Tambah Buku</title>" ?> 
</head>
<body>
    <h2 style="text-align: center;">FORM BUKU</h2>
    <form action="" method="post">
    <?php
        if( isset($_GET['id_buku']) ) {
            $sql = "SELECT * FROM buku WHERE id_buku = " . $_GET['id_buku'];
            $result = mysqli_query($conn, $sql);

            foreach($result as $res) :
        
    ?>
        
        <table class="mb-3">
        
            <tr>
            <td><label for="judul_buku" class="form-label">Id Buku</label></td>
                <td><input type="text" name="id_buku"class="form-control"<?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["id_buku"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
            <td><label for="judul_buku" class="form-label">Judul Buku</label></td>
                <td><input type="text" name="judul" class="form-control" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["judul_buku"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td><label for="judul_buku" class="form-label">Nama Penulis</label></td>
                <td><input type="text" name="penulis" class="form-control"<?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["penulis"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td><label for="judul_buku" class="form-label">Penerbit</label></td>
                <td><input type="text" name="penerbit" class="form-control"<?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["penerbit"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td><label for="judul_buku" class="form-label">Tahun Terbit</label></td>
                <td><input type="text" name="thnterbit" class="form-control"<?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["tahun_terbit"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>
                    <?php 
                    if (isset($_GET['id_buku'])) {
                        echo "<button type=\"submit\" class='btn btn-success' name=\"update\" >Edit</button>";
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
                <td><label for="judul_buku" class="form-label">Id Buku</label></td>
                    <td><input type="text" name="id_buku"class="form-control"<?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["id_buku"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                <td><label for="judul_buku" class="form-label">Judul Buku</label></td>
                    <td><input type="text" name="judul" class="form-control" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["judul_buku"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td><label for="judul_buku" class="form-label">Nama Penulis</label></td>
                    <td><input type="text" name="penulis" class="form-control"<?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["penulis"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td><label for="judul_buku" class="form-label">Penerbit</label></td>
                    <td><input type="text" name="penerbit" class="form-control"<?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["penerbit"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td><label for="judul_buku" class="form-label">Tahun Terbit</label></td>
                    <td><input type="text" name="thnterbit" class="form-control"<?php echo (isset($_GET['id_buku'])) ?  "value = " . $res["tahun_terbit"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>
                        <?php 
                        if (isset($_GET['id_buku'])) {
                            echo "<button type=\"submit\" name=\"update\">Edit</button>";
                        }else {
                            echo "<button type=\"submit\" class='btn btn-success' name=\"submit\">Tambah</button>";   
                        }
                        ?>
                       

                </td>
            </tr>
        </table>
       
        <?php } ?>
        <style>
            .button_add button{
                margin-left: 24px;
                padding: 10px;
            }
        </style>
    </form>

    <br>
    <?php
    if (isset($_POST['submit'])) {
        tambahBuku($_POST['id_buku'],$_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    if (isset($_POST['update'])) {
       updateBuku($_GET['id_buku'],$_POST['judul'],$_POST['penulis'],$_POST['penerbit'],$_POST['thnterbit']);
    }
    ?>
</body>

</html>