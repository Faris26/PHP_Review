<?php
//Koneksi Ke Database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{

    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nrp = $data['nrp'];
    $nama = $data['nama'];
    $email = $data['email'];
    $jurusan = $data['jurusan'];
    $gambar = $data['gambar'];

    $query = "INSERT INTO mahasiswa VALUES
    ('', '$nrp' , '$nama' ,'$email' ,'$jurusan' ,'$gambar') 
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
