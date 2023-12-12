<?php

include 'koneksi.php';

//fungsi menampilkan data
function select($query)
{
    //panggil koneksi database
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

//fungsi menghapus data 
function delete_data($nomor)
{
    global $db;

    //query hapus data 
    $query = "DELETE FROM pendaftaran WHERE nomor = $nomor";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//fungsi menambahkan data dari formulir pendaftaran
function create_data($post)
{
    global $db;

    $nama = $post['nama'];
    $nisn = $post['nisn'];  
    $jenis_kelamin = $post['jenis_kelamin'];
    $tanggal_lahir = $post['tanggal_lahir'];
    $alamat = $post['alamat'];
    $email = $post['email'];
    $no_telp = $post['no_telp'];
    $status = "BELUM TERVERIFIKASI";

    //query tambah data
    $query = "INSERT INTO pendaftaran VALUES(null, '$nama', '$nisn', '$jenis_kelamin', 
    '$tanggal_lahir', '$alamat', '$email', '$no_telp', '$status')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}   

//fungsi update data 
function update_data($post)
{
    global $db;

    $nomor = $post['nomor'];
    $nama = $post['nama'];
    $nisn = $post['nisn'];  
    $jenis_kelamin = $post['jenis_kelamin'];
    $tanggal_lahir = $post['tanggal_lahir'];
    $alamat = $post['alamat'];
    $email = $post['email'];
    $no_telp = $post['no_telp'];
    $status = $post['status'];

    //query ubah data
    $query = "UPDATE pendaftaran SET nama = '$nama', nisn = '$nisn', jenis_kelamin = '$jenis_kelamin', 
    tanggal_lahir = '$tanggal_lahir', alamat = '$alamat', email = '$email', no_telp = '$no_telp', status = '$status'
    WHERE nomor = $nomor";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

?>