<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
            font-size: 20px;
        }
        
        h1 {
            color: #333333;
        }
        
        .biodata-container {
            border-radius: 10px;
            box-shadow: 10px 10px 5px lightblue;
            padding: 20px;
            display: flex;
            width: fit-content;
            height: fit-content;
            margin: auto;
            margin-top: 10%;
            background: url('https://img.freepik.com/free-vector/paper-style-white-monochrome-background_52683-66443.jpg?size=626&ext=jpg&ga=GA1.2.1856518961.1681272149&semt=ais');
        }
        
        .biodata-container img {
            width: 200px;
            margin-right: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .biodata-details {
            flex: 1;

        }
        
        p {
            margin: 0;
            padding: 5px 0;
        }
        
        strong {
            font-weight: bold;
        }

        .btn{
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 16px 16px;
    border-radius: 500px;
    display: inline-block;
    font-weight: 500;
    transition: all .4s ease-in-out;
    background-size: 152% 100%;
    background: #fd4766;
    border: 2px solid #fd4766;
    margin-top: 70px;
}
.btn:hover{
    background: transparent;
    border-color: #fd4766;
    color: #fd4766;
}

img {
    border-radius: 50%;
    max-height: 400px;
}

    </style>
</head>
<body>
    <div class="biodata-container">
        <img src="<?= base_url('assets/Foto_Diri_Asandy.jpg') ?>" alt="Foto Profil">
        <div class="biodata-details">
            <table>
                <tr>
                    <td><b>BIODATA</b></td>
                </tr><tr><td><br></td></tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $nama;?></td>
                </tr>
                <tr>
                    <td>NIM:</td>
                    <td>:</td>
                    <td><?= $nim;?></td>
                </tr>
                <tr>
                    <td>Prodi:</td>
                    <td>:</td>
                    <td><?= $prodi;?></td>
                </tr>
                <tr>
                    <td>Hobi:</td>
                    <td>:</td>
                    <td><?= $hobi;?></td>
                </tr>
                <tr>
                    <td>Skill:</td>
                    <td>:</td>
                    <td><?= $skill;?></td>
                </tr>
            </table>


            <form action="/home/index">
        <button class="btn" type="submit">Home Page</button>

        </form>
        </div>
        
    </div>
</body>
</html>
