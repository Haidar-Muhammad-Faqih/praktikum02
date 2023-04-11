<?php
$nama = $_GET['nama'];
$jk = $_GET['jenis_kelamin'];
$hobi = $_GET['hobi'];
$umur = $_GET['umur'];
$tanggal_lahir = $_GET['tanggal_lahir'];
$prodi = $_GET['prodi'];


echo "<h2>Hasil Formulir : </h2>";
echo "Nama : " . $nama . "<br>";
echo "Jenis Kelamin : " . $jk . "<br>";
echo "Umur : " . $umur . "<br>";
echo "Tanggal Lahir : " . $tanggal_lahir . "<br>";
echo "Hobi : ";
foreach($hobi as $h){
    echo $h . " ";
}
echo "<br>";
echo "prodi : " . $prodi . "<br>";