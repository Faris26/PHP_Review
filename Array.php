<?php 
//array
//Membuat Cara Lama
$hari = array("Senin","Selasa","Rabu","Kamis","Jumat",);
//Membuat Cara Baru
$bulan = ["Januari","February","Maret"];

//dapat dalam bentuk tipe data berbeda
$arr1 = [123,"tulisan",false];

//Menampilkan Array
var_dump($hari);
echo "<br>";
print_r($hari);

//Menampilkan 1 elemen pada array
echo $arr1[0];

//Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);