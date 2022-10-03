<?php include "header.php"; ?>
<div class="container">
<form method='post' action="saveUser.php">
    <div class="row">
        <div class="col">
            <div class="mb-3 mt-5">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Username" name="username" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text " class="form-control" placeholder="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Pria" id="pria" checked>
                        <label class="form-check-label" for="pria">Pria</label>
                     </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Wanita" id="wanita">
                        <label class="form-check-label" for="wanita">Wanita</label>
                    </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir"  required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="password" name="password"  required>
            </div>
            <div class="mb-5 d-grid gap-2 col-6 mx-auto">
                <input id="button" type="submit" class="btn text-light mt-5 shadow" style="--bs-btn-border-radius: 30rem; background-color: #fbbb90" value="Daftar" width="20px">
            </div>
        </div>
        <div class="col">
        </div>
    </div>
</form>
</div>
</div>

<?php include "footer.php"; ?>