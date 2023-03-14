<?php echo "Hello World !!!!!<br>";
echo "Muhammad Asandy Putra";
echo "<br><br>";
echo "2110817310002 <br><br>";

$Kendaraan = ['<b>Mobil</b>', 'Motor', 'Sepeda', 'Bus'];
//$kendaraan = array ('Mobil', 'Motor', 'Sepeda', 'Bus'); Merupakan cara alternatif penulisan array 
//echo $Kendaraan[2].
//"<br><br>";
//echo $Kendaraan[0]."<br><br>";
//echo $Kendaraan[1];
// digunakan apabila hanya memanggil beberapa array

for($i=0; $i < count($Kendaraan); $i++){
    echo $Kendaraan[$i]."<br>";
}
//array di atas digunakan untuk memanggil menggunakan perulangan 
echo "<br><br>";
$Bulan = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'];
echo $Bulan[3];
//Array otomatis disesuaikan dari data 1 dan tidak lagi dari 0
echo "<br><br>";
$x ="Sebelum Null";
$x = NULL;
var_dump($x);

echo "<br><br>";
class Tumbuhan{
    function Tumbuhan(){
        $this->tipe="Dikotil";
    }
}
$Wortel=new Tumbuhan();
var_dump ($Wortel);
echo "<br><br>";

$g = 1;
$g +=$g;
echo $g;

echo "<br><br>";
$o = 2;
$p = -$o;
$k= -4;
$i = -$i;
echo $p;

echo "<br><br>";
$name = "Hello";
$name .= " Asandy!";
echo $name; // .= dapat digunakan untuk menggabung 2 string menjadi 1

echo "<br><br>";

?>

