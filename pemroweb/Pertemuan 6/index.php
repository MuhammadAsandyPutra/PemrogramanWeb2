<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Portfolio Website</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
a{
    text-decoration: none;
}
.hero{
    width: 100%;
    height: 100vh;
    margin: auto;
    align-items: center;
    background-size: cover;
    justify-content: center;
    
}

.card {
    margin: auto;
    margin-top: 10%;
    background: url('https://img.freepik.com/free-vector/paper-style-white-monochrome-background_52683-66443.jpg?size=626&ext=jpg&ga=GA1.2.1856518961.1681272149&semt=ais');
    border-radius: 30px;
    padding: 40px;
    box-shadow: 10px 10px 5px lightblue;
    width: fit-content;
    height: fit-content;
}


.btn{
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 16px 40px;
    border-radius: 500px;
    display: inline-block;
    font-weight: 500;
    transition: all .4s ease-in-out;
    background-size: 152% 100%;
    background: #fd4766;
    border: 2px solid #fd4766;
}
.btn:hover{
    background: transparent;
    border-color: #fd4766;
    color: #fd4766;
}
.content{
    
    text-align: center;
   
}
.content .title{
    color: #1f1f25;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 4px;
   
    margin-bottom: 20px;
    background: linear-gradient(120deg, #1c99fe 20.69%, #7644ff 50.19%,#fd4766 79.69%);
    /* -webkit-background-clip: text; */
    -webkit-text-fill-color: transparent;
}
.content h1{
    color: #1f1f25;
    font-size: 75px;
    font-weight: 900;
    line-height: 90px;
    text-transform: inherit;
    text-align: center;
    margin-top: 3%;
    
}
.content h1 span{
    color: #fd4766;
    text-align: center;
}

.content p{
    color: #757575;
    margin-top: 10px;
    text-align: center;
    font-size: 20px;
}

.profile-img img{
    max-width: 100%;
    max-height: 100%;
    border-radius: 80%;
    width: 200px;
    height: 200px;
    margin-bottom: 20px;
}

.profile-img{
    margin-top: 10%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.title {
    text-align: center;
}

    </style>
</head>
<body>
    <div class="hero">
        <div class ="content card">
            <div class="profile-img">
                <img src="<?= base_url('assets/Foto_Diri_Asandy.jpg') ?>" alt="gambar saya">
            </div>
            <span class="title">----------------------------------</span>
            <h1>Hello, I’m <span><?= $nick;?></span></h1>
            <p>Saya berasal dari Program Studi <?= $prodi;?></p><br>
            <p>Silahkan klik Detail !</p><br>
            <form action="/home/biodata">
            <button class="btn" type="submit">DETAIL</button>


            </form>
            
        </div>
    </div>
</body>
</html>
