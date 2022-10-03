
<?php include "header.php"; ?>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses dashboard";
		}
	}
	?>
<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="login col mt-5 mb-5 shadow rounded" style="background-color: #ffdac1; ">
            <form method="POST" action="ceklogin.php">
                <div class="mb-3 mt-5 text-center">
                    <label for="username" class="form-label"><p>Username</p></label>
                    <input type="text" class="form-control rounded-pill" id="username" name="username" placeholder="Username">
                </div>
                <div class="mb-3 text-center">
                    <label for="password" class="form-label"><p>Password</p></label>
                    <input type="password" class="form-control rounded-pill" id="password" name="password" placeholder="Password">
                </div>
                <div class="mb-5 d-grid gap-2 col-6 mx-auto">
                <input type="submit" class="btn text-light mt-5 shadow" style="--bs-btn-border-radius: 30rem; background-color: #fbbb90;" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>