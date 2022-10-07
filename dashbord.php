<?php include "header.php";?>

<?php

	if($_SESSION['status']!="login"){
		header("location:./login.php?pesan=belum_login");
	}
	?>
	<div class="container text-center mt-5 mb-5"  style="height:15rem ;">
		<div class="row"><h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4></div>
		<div class="row">
		<a href="./logout.php"><button id="button" type="button" class="btn text-light mt-5 shadow" style="--bs-btn-border-radius: 30rem; background-color: #fbbb90">Logout</button></a>
		</div>
	</div>
<?php include "footer.php";?>