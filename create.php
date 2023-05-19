<?php
// include('koneksi.php');
$conn = mysqli_connect("localhost","root","","belajar_crud");

$json = file_get_contents('php://input');
$data = json_decode($json,true);

$nama = $data['nama'];
$alamat = $data['alamat'];


if (!mysqli_query($conn, "INSERT into customer (nama,alamat) values ('$nama', '$alamat')")){
    $status = array(
        'status' => "Error: %s\n", $conn->error
    );
}else {
    $status = array(
        'status' => 'success'
    );
}

echo json_encode($status);