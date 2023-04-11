<?php
$nama = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$hobi = $_POST['hobi'];
$umur = $_POST['umur'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$prodi = $_POST['prodi'];


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