
<?php include "header.php"; ?>
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
                    <input id="button" type="submit" class="btn text-light mt-5 shadow" style="--bs-btn-border-radius: 30rem; background-color: #fbbb90;" value="Login" width="20px">
                    <a class="text-center" style="color: white;" href="./daftar.php"><p>Daftar Akun</p></a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>