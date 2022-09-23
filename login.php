
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
        <div class="col mt-5 mb-5">
            <form method="POST" action="ceklogin.php">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary rounded-pill">login</button>
                            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>