<?php

include 'connect.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = 'SELECT * FROM pengguna WHERE username = "'.$username.'" AND password = "'.$password.'"';

$query= mysqli_query($conn, $sql);

if (mysqli_num_rows($query)){
   $row = mysqli_fetch_object($query);
   $_SESSION['username'] = $row->username;
}
header('Location: index.php');


// // mengaktifkan session php
// session_start();
 
// // menghubungkan dengan koneksi
// include 'connect.php';
// // menangkap data yang dikirim dari form
// $username = $_POST['username'];
// $password = $_POST['password'];
 
// // menyeleksi data user dengan username dan password yang sesuai
// $data = mysqli_query($connect,"select * from user where username='$username' and password='$password'");
 
// // menghitung jumlah data yang ditemukan
// $cek = mysqli_num_rows($data);
 
// if($cek > 0){
// 	$_SESSION['username'] = $username;
// 	$_SESSION['status'] = "login";
// 	header("location: dashbord.php");
// }else{
// 	header("location:login.php?pesan=gagal");
// }
?>
