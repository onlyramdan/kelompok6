<?php
include 'connect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$nama= $_POST["nama"];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$password = $_POST['password'];

 $sql = 'INSERT INTO pengguna VALUES ("' . $username . '","' . $nama . '", "' . $email . '", "' . $jenis_kelamin . '", "' . $tanggal_lahir . '", "' . $password . '")';
    
$result = mysqli_query($connect, $sql);
var_dump($sql);
var_dump($result);

if ($result) {
    header('Location: index.php');
} else {
    echo 'Insert Failed';
}
?>