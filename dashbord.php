<?php include "header.php";?>
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:./login.php?pesan=belum_login");
	}
	?>
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
	<br/>
	<br/>
	<a href="./logout.php">LOGOUT</a>

<?php include "footer.php";?>